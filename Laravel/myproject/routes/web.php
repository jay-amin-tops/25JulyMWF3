<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/testroute', function(){
//     echo 'home';
// });
Route::view('/testroute', 'mypage');
// Route::post('/home', [App\Http\Controllers\HomeController::class, 'index']);
// Route::put('/home', [App\Http\Controllers\HomeController::class, 'index']);
// Route::patch('/home', [App\Http\Controllers\HomeController::class, 'index']);
// Route::delete('/home', [App\Http\Controllers\HomeController::class, 'index']);
// Route::resource('/home', [App\Http\Controllers\HomeController::class]);
// Route::view('/home', "view page");
Route::get('/allproducts', [App\Http\Controllers\ProductController::class, 'index']);
// Route::get('/allproducts', [App\Http\Controllers\HomeController, 'index']);
Route::get('/addnewproduct', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/storeproduct', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/deleteprod/{prodid?}', [App\Http\Controllers\ProductController::class, 'destroy']);
Route::get('/editprod/{prodid?}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/saveeditedproduct/{prodid?}', [App\Http\Controllers\ProductController::class, 'update']);
Route::view('/sendmailtestview', 'sendmailtestview');
Route::any('/sendmailtest', [App\Http\Controllers\HomeController::class, 'sendmail']);
