<?php

Auth::routes();


//PROJECT ROUTES
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', ['uses' => 'FrontController@index'])->name('home');

Route::get('shirts', ['uses' => 'FrontController@shirts'])->name('shirts');

Route::get('single', ['uses' => 'FrontController@single'])->name('single');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function ()
{
    Route::get('/', function ()
    {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('products', 'ProductController');

    Route::resource('categories', 'CategoryController');

});

// Cart
Route::resource('cart', 'CartController');


Route::get('shipping-index','ShippingController@step1')->name('shipping');

Route::post('shipping-post','ShippingController@shippingPost')->name('shippingPage');