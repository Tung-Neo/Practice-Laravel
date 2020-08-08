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
Route::group(['prefix'=>'product'], function(){
	Route::get('list','ProductController@getdanhsach');
	Route::get('add','ProductController@getthem');
	Route::post('add','ProductController@postthem');
	Route::get('edit/{id}','ProductController@getsua');
	Route::post('edit/{id}','ProductController@postsua');
	Route::get('delete/{id}','ProductController@getxoa');
});
