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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/submit', 'HomeController@submit');

Route::get('/table', 'HomeController@table')->name('table');

Route::get('/table/{id}', 'HomeController@destroy');

Route::put('/updatetable/{id}', 'HomeController@update');

Route::post('/send','HomeController@send');

Route::get('/send_view','HomeController@view');

Route::get('/table_list','HomeController@table_list');

Route::delete('/destroy_id/{id}','HomeController@destroy_id');

Route::get('/edit/{id}','HomeController@get_id');

Route::put('/update_id/{id}','HomeController@update_id');

Route::post('/resend','HomeController@resend');

Route::get('/resend_view','HomeController@review');
Route::get('/rtable','HomeController@rtable');

Route::delete('/rtable/{id}','HomeController@redestroy');

Route::get('/get_id/{id}','HomeController@gets_id');
Route::put('/up_id/{id}','HomeController@up_id');
