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

// Route::resource('/', 'QENG_ProjectController');

Route::get('/', 'KakotoraController@homepage');
Route::get('/kakotora-home', 'KakotoraController@index');
Route::get('/kakotora-home/project-add', 'KakotoraController@index2');
Route::get('/kakotora-home/reguler-add', 'KakotoraController@reguler');
Route::get('/kakotora-home/reguler-add/{reguler}', 'KakotoraController@addreguler');
Route::post('/kakotora-home', 'KakotoraController@store')->name('kakotora.store');
Route::get('/kakotora/{id}', 'KakotoraController@show');
Route::get('/kakotora/download/{file}', 'KakotoraController@download');
Route::get('/kakotora-home/edit/{kakotora}', 'KakotoraController@edit');
Route::post('/kakotora-home/update/{kakotora}', 'KakotoraController@update');
Route::post('/kakotora-home/submit/{id}', 'KakotoraController@submit');
Route::get('/kakotora-home/editreg/{kakotorareg}', 'KakotoraController@editreg');
Route::post('/kakotora-home/updatereg/{kakotorareg}', 'KakotoraController@updatereg');

Route::get('/login', 'LoginController@login');
Route::post('/checklogin', 'LoginController@checklogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/kakotora-register', 'LoginController@register')->name('register');
Route::post('/kakotora-register', 'LoginController@storeUser');

