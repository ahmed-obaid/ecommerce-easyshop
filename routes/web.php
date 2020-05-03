<?php

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
 
Route::get('/lang/{lang}', function ($lang) {
    session()->put('lang',$lang);
    return redirect()->back();
})->name('lang');



Auth::routes();

 
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/all-products', 'HomeController@all_products')->name('all-products');
//===============cart================
Route::get('/addtocart/{product}', 'cartcontroller@addtocart')->name('addtocart');
Route::get('/show-cart', 'cartcontroller@showcart')->name('showcart');
Route::get('/cart/{product}/{subtract}', 'cartcontroller@subtract')->name('subtract');
Route::get('/checkout/{amount}', 'cartcontroller@checkout')->name('checkout')->middleware('auth');
Route::post('/cart/charge', 'cartcontroller@charge')->name('charge')->middleware('auth');
Route::get('/users/orders', 'orders@orders')->name('user.orders')->middleware('auth');
//===============cart================
//===============contact================
Route::get('/contact/show', 'HomeController@contact_show')->name('contact-show');
Route::post('/contact', 'HomeController@contact_us')->name('contact-us');


//===============contact================

Route::get('/mens-shirts', 'HomeController@mens_shirts')->name('mens-shirts');
Route::get('/mens-trousers', 'HomeController@mens_trousers')->name('mens-trousers');
Route::get('/mens-shoes', 'HomeController@mens_shoes')->name('mens-shoes');
Route::get('/womens-shirts', 'HomeController@womens_shirts')->name('womens-shirts');
Route::get('/womens-trousers', 'HomeController@womens_trousers')->name('womens-trousers');
Route::get('/womens-shoes', 'HomeController@womens_shoes')->name('womens-shoes');
Route::get('/kids-shirts', 'HomeController@kids_shirts')->name('kids-shirts');
Route::get('/kids-trousers', 'HomeController@kids_trousers')->name('kids-trousers');
Route::get('/kids-shoes', 'HomeController@kids_shoes')->name('kids-shoes');

Route::namespace('backend')->prefix('admin')->middleware('admin')->group(function(){
    Route::get('/','dasboard@dashboard')->name('admin.home');
    Route::resource('users','users');
    Route::resource('categories','categories');
    Route::resource('products','products');
    Route::resource('types','types');
    Route::resource('messages','messages');
    Route::post('messages/{id}/replay','messages@replay')->name('message.replay');
});
 