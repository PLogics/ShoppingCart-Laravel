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
    return view('/welcome');
});

//login & signup//
Route::get('/loginRegister', 'App\Http\Controllers\IController@login_register');
Route::post('/signUp', 'App\Http\Controllers\IController@sign_up');
Route::post('/login', 'App\Http\Controllers\IController@login');

//index//
Route::get('/index', 'App\Http\Controllers\IController@index');

//User//
Route::get('/indexUser', 'App\Http\Controllers\IController@index_user');

//categories//
Route::get('/Product/{id}', 'App\Http\Controllers\IController@product_id');

//product//
Route::get('/Product', 'App\Http\Controllers\IController@product');
Route::get('/productInfo', 'App\Http\Controllers\IController@product_info');
Route::get('/buyProduct/{id}', 'App\Http\Controllers\IController@buy_product');
Route::post('addToCart', 'App\Http\Controllers\IController@add_to_cart');
Route::get('/checkout', 'App\Http\Controllers\IController@checkout');
Route::get('removeProduct/{id}', 'App\Http\Controllers\IController@remove_product');

//reviews//
// Route::post('reviews', 'App\Http\Controllers\IController@reviews_form');
// Route::get('reviewSummary', 'App\Http\Controllers\IController@review_summary');

//contactUs//
Route::get('/contactUs', 'App\Http\Controllers\IController@contact_us');
Route::post('/contactUsForm', 'App\Http\Controllers\IController@contact_us_form');

//logout
Route::get('/logoutUser', 'App\Http\Controllers\IController@logout');
