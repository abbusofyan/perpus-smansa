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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/detail', 'HomeController@detail')->name('detail');

Route::post('/get_data_by_nis', 'HomeController@get_data_by_nis')->name('get_data_by_nis');

Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/', ['as' => 'index', 'uses' => 'AdminController@index']);

    Route::group(['prefix'=>'buku','as'=>'buku.'], function(){
        Route::get('/', ['as' => 'index', 'uses' => 'BukuController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'BukuController@create']);
    });

    Route::group(['prefix'=>'anggota','as'=>'anggota.'], function(){
        Route::get('/', ['as' => 'index', 'uses' => 'AnggotaController@index']);
        Route::get('/generateQrCode', ['as' => 'generateQrCode', 'uses' => 'AnggotaController@generateQrCode']);
        Route::post('/store', ['as' => 'store', 'uses' => 'AnggotaController@store']);
    });

    Route::group(['prefix'=>'peminjaman','as'=>'peminjaman.'], function(){
        Route::get('/', ['as' => 'index', 'uses' => 'PeminjamanController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'PeminjamanController@create']);
    });

    Route::group(['prefix'=>'pengembalian','as'=>'pengembalian.'], function(){
        Route::get('/', ['as' => 'index', 'uses' => 'PengembalianController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'PengembalianController@create']);
    });
});

// route member=======================================================================================
Route::group(['prefix'=>'member','as'=>'member.'], function(){

    Route::get('/', ['as' => 'index', 'uses' => 'MemberController@index']);
    Route::get('/history', ['as' => 'history', 'uses' => 'MemberController@history']);
    Route::get('/perpanjang', ['as' => 'perpanjang', 'uses' => 'MemberController@perpanjang']);
    Route::get('/kartu_anggota', ['as' => 'kartu_anggota', 'uses' => 'MemberController@kartu_anggota']);

    // Route::group(['prefix'=>'buku','as'=>'buku.'], function(){
    //     Route::get('/', ['as' => 'index', 'uses' => 'BukuController@index']);
    //     Route::get('/create', ['as' => 'create', 'uses' => 'BukuController@create']);
    // });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
