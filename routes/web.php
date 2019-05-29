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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@dashboard')->name('home');
Route::group(['as'=>'page.', 'prefix'=>'page' ], function(){
//
// Route::get('create','Admin\Page\PageController@create')->name('create');
// Route::post('','Admin\Page\PageController@store')->name('store');
Route::post('/delete_image','Admin\Page\PageController@store')->name('delete_image');
// Route::put('{slider}','PageController@update')->name('update');
// Route::get('{slider}/edit','PageController@edit')->name('edit');
// Route::delete('{slider}','PageController@delete')->name('destroy');
});
Route::resource('page', 'Admin\Page\PageController');
