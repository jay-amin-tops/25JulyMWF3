<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function sendmail(Request $request){
        // dd("called sendmail");
        // dd();
        $mailTo = $request->to;
        $data = array('name' => "Hardik");
        // DD($mailTo);
        \Mail::send(['html' => 'mail'], $data, function ($message) use ($mailTo) {
            // DD($mailTo);
            $message->to($mailTo, 'Welcome to my site')->subject('Congsratulation');
            $message->from('jay.amin.tops@gmail.com', 'Jay Amin');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
}
