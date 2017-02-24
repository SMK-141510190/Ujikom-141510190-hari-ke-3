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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['api'],'prefix' => 'api'], function () {
    Route::post('register', 'APIController@register');
    Route::post('login', 'APIController@login');

    Route::group(['middleware' => 'jwt-auth'], function () {
    	Route::post('get_user_details', 'APIController@get_user_details');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('jabatan', 'jabatansController');
Route::resource('golongan', 'golongansController');
Route::resource('kategorilembur', 'kategoriLemburController');
Route::resource('pegawai', 'pegawaisController');
Route::resource('lemburpegawai', 'lemburPegawaisController');
Route::resource('tunjangan', 'tunjangansController');
Route::resource('tpegawai', 'tunjanganPegawaisController');
Route::resource('penggajian', 'penggajiansController');