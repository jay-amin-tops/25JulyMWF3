<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Books;
use App\Models\Authors;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\DataTables\ProductsDataTable;
use PDF;
use DB;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(product $product)
    // {
    //     // dd("Inside controller");
    //     // dd($product->get());
    //     $ProductsData = $product->get();
    //     return view("showallproducts", compact('ProductsData'));
    // }
    public function index(ProductsDataTable $dataTable, product $product)
    {
        return $dataTable->render('users.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CategoriesData = ["something"];
        return view("addnewproducts", compact('CategoriesData'));
        // dd("test");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(product $product)
    {
        $productData = $product::find(15);
        // dd($productData);
        $data = [
            'title' => $productData['title'],
            'price' => $productData['price'],
            'quantity' => $productData['quantity'],
            'data' => $productData,
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('custompdf.pdf');

        dd("called");
        # code...
    }
    public function customQueryBuilder(product $product)
    {
        DB::connection()->enableQueryLog();

        // $ProdDataFromElo = $product::get();
        // DB::table('products')
        // ->select('title', 'description as desc')
        // ->get();
        // DB::table('products')->get();
        // $DistUsers = DB::table('products')->distinct()->get();
        // $DistUsers = DB::table('products')->distinct('title')->get();
        // $DistUsers = DB::table('products')->select('title')->distinct()->get();
        // $DistUsers = DB::table('products')->select('title')->where('title', '<>', 'update')->get();
        // $DistUsers = DB::table('products')->select('quantity')->where('price', '>', '100')->groupBy('id')->get();
        // $DistUsers = DB::table('products')->select('quantity')->where('price', '>', '100')->orderBy('date', 'asc')->get();
        // $users = DB::table('users')
        //      ->select(DB::raw('count(*) as user_count, name'))
        //      ->where('name', '<>', 1)
        //      ->groupBy('name')
        //      ->get();
        // ->select("*",DB::raw('count(*) as quantity'))
        // $users = DB::table('products')
        //      ->select("title")
        //      ->where('quantity', '<>', 1)
        //      ->groupBy('title')
        //      ->get();
        // $users = DB::table('products')
        // ->select('quantity', DB::raw('SUM(price) as total_sales'),DB::raw('SUM(title) as total_sale'))
        // ->groupBy('quantity')
        // ->get();
        // $users = DB::table('products')
        //         ->select("title",'price', 'quantity')
        //         ->groupByRaw('price')
        //         ->get();
        // $results = DB::select( DB::raw("SELECT `title` FROM `products` GROUP BY title") );

        // ->join('product_details', 'sales.product_detail_id', '=', 'product_details.id')
        // ->join('products', 'product_details.product_id', '=', 'products.id')
        $results = $product::select(DB::raw('count(*) as count'), 'title', 'products.description')
            ->groupBy('products.title')
            ->get();
        $queries = DB::getQueryLog();

        dd($results);
        dd($queries);
    }
    public function store(Request $request, product $product)
    {

        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);
        // if(!$validate->fails()){

        // }
        // dd($request->all());    
        // $product->title = $request->title;
        // $product->description = $request->description;
        // $product->price = $request->price;
        // $product->quantity = $request->quantity;
        $data = $request->except(['btn-save', '_token']);
        // dd($data);
        foreach ($data as $key => $value) {
            $product->$key = $value;
            // print_r("Key is $key and value is $value <br>");
        }
        $product->save();
        return redirect("allproducts");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function datatablecalling(UsersDataTable $dataTable, product $product)
    {
        return $dataTable->render('users');
    }
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($prodid, product $product)
    {
        $productData = $product::find($prodid);
        return view("editproducts", compact('productData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($prodId, Request $request, product $product)
    {
        $productData = $product::find($prodId);
        $data = $request->except(['btn-save', '_token']);
        foreach ($data as $key => $value) {
            $productData->$key = $value;
            // print_r("Key is $key and value is $value <br>");
        }
        $productData->save();
        return redirect("allproducts");
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($prodid, product $product)
    {
        // dd($prodid);
        // $res=$product::where('id',$prodid)->delete();
        $product = $product::find($prodid);
        $product->delete(); //returns true/false
        return redirect("allproducts");
    }
    public function eloqunatQueryJoin()
    {
        // $books = Books::with(['authors', 'publisher','genre'])->get();
        DB::connection()->enableQueryLog();
        // $books = Books::with(['author']);

        $Books =  Books::get();
        $author =  Books::find(1)->author;
        // $BooksWithAuthor = Books::with([author])->get();
        $BooksWithAuthor = Books::with('author')->get();
        // $BooksWithAuthorGroupBy = Books::select("title","description","books.id")->groupBy('books.id')->get();
        $BooksWithAuthorGroupBy = DB::table('books')
            ->select('title', DB::raw('count(*) as total'))
            ->groupBy('title')
            ->get('title');
            // ->pluck('title');
        // foreach ($BooksWithAuthor as $key => $value) {
        //     echo ($value->books->title); 
        //     echo ($value->author->author_name); 
        // }
        $queries = DB::getQueryLog();
        // dd($queries);
        dd($BooksWithAuthorGroupBy);
        dd($Books);
        return redirect("allproducts");
    }
}
