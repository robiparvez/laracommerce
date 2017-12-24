<?php

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', ['uses' => 'FrontController@index'])->name('home');

Route::get('/shirts', ['uses' => 'FrontController@shirts'])->name('shirts');

Route::get('single', ['uses' => 'FrontController@single'])->name('single');

Route::group(['prefix' => 'admin'], function ()
{
    Route::get('/', function ()
    {
        return view('admin.index');
    })->name('admin.index')->middleware('auth');

    Route::resource('products', 'ProductController');

	Route::resource('categories', 'CategoryController');

});


