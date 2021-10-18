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

Route::get('/', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show');

Route::get('/seed', 'PagesController@seed')->name('seed');
Route::get('/fertilizer', 'PagesController@fertilizer')->name('fertilizer');
Route::get('/tool', 'PagesController@tool')->name('tool');
Route::get('/contact', 'PagesController@contact');
Route::get('/search', 'PagesController@search')->name('search');
Route::post('/product/{product}/checkout', 'PagesController@checkout')->name('checkout')->middleware('auth');
Route::post('/product/{product}/checkout/thanks', 'PagesController@thanks')->name('buy');



Auth::routes();
