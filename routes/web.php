<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
  
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('home', function () {
//     return view('home');
// });
// Route::get('index', function () {
//     return view('index');
// });
// Route::get('contact', function () {
//     return view('contact');
// });
// Route::get('aboutus', function () {
//     return view('aboutus');
// });
// Route::get('product1', function () {
//     return view('product1');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/view_category',[AdminController::class,'view_category']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('/view_product',[AdminController::class,'view_product']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('/show_product',[AdminController::class,'show_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('/update_product/{id}',[AdminController::class,'update_product']);
Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
Route::get('/order',[AdminController::class,'order']);



Route::get('/',[HomeController::class,'index']);
Route::get('home',[HomeController::class,'index']);
Route::get('product1',[HomeController::class,'product1']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('aboutus',[HomeController::class,'aboutus']);

Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
Route::get('/show_cart',[HomeController::class,'show_cart']);
Route::post('/remove_cart/{id}',[HomeController::class,'remove_cart']);
Route::get('/cash_order',[HomeController::class,'cash_order']);

