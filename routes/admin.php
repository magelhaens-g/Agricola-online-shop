<?php
Route::get('/', 'HomeController@index')->name('dashboard');
// Route::get('/product', 'ProductController@index')->name('product.index');
// Route::post('/product', 'ProductController@store')->name('product.store');
// Route::get('/product/create', 'ProductController@create')->name('product.create');
// Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
// Route::post('/product/{product}', 'ProductController@update')->name('product.update');
// Route::delete('/product/{product}', 'ProductController@destroy')->name('product.destroy');
Route::get('/product/data', 'DataController@products')->name('product.data');
Route::get('/buy/data', 'DataController@buys')->name('buy.data');
Route::resource('product', 'ProductController');

Route::get('buy', 'BuyController@index')->name('buy.index');