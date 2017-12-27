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

/**
 * Authenticated Users are redirected to shipping page after hitting checkout
 */
Route::group(['middleware' => 'auth'], function ()
{
    Route::get('shipping-index', 'ShippingController@shippingIndex')->name('shipping');
});

Route::resource('address', 'AddressController');

Route::get('thank-you', 'ThanksController@getMessage')->name('thanks');

Route::get('payment-info', 'ShippingController@payment')->name('payment');
Route::post('payment-stored', 'ShippingController@storePayment')->name('payment.store');