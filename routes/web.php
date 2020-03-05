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

Route::get('/', 'FrontEndController@index');
Route::get('/single-product/{product}','FrontEndController@single_product')->name('product.single');
Route::get('/cart','ShoppingController@cart')->name('cart');
Route::post('/cart/add','ShoppingController@add_to_cart')->name('cart.add');
Route::get('/cart/incr/{id}/{qty}','ShoppingController@incr')->name('cart.incr');
Route::get('/cart/decr/{id}/{qty}','ShoppingController@decr')->name('cart.decr');
Route::get('/cart/add/{id}','ShoppingController@rapid_add')->name('rapid.add.cart');
Route::get('/cart/delete/{id}','ShoppingController@cart_delete')->name('cart.delete');

Route::get('/checkout',[
    'uses' => 'CheckoutController@index',
    'as' => 'cart.checkout',
]);

Route::post('/checkout',[
    'uses' => 'CheckoutController@payment',
    'as' => 'cart.checkout',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('product','ProductController');

