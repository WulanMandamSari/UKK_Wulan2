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

// Halaman Beranda Dashboard //
Route::get('/beranda', function () {
    return view('beranda.index');
});

// Landing Page //
// Route::get('home', function () {
//     return view('landingpage');
// });

// Form Pengaduan //
Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan')->middleware('auth');; 
Route::get('/pengaduan/create', 'PengaduanController@create')->middleware('auth');; 
Route::post('/pengaduan/store', 'PengaduanController@store')->middleware('auth');;
Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit')->middleware('auth');; 
Route::put('/pengaduan/update/{id}', 'PengaduanController@update')->middleware('auth');;
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy')->middleware('auth');; 
Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show')->middleware('auth');;
Route::get('/pengaduan/status/{id}', 'PengaduanController@status')->middleware('auth');;

// Form Tanggapan //
Route::get('/tanggapan', 'TanggapanController@index')->name('tanggapan')->middleware('auth');; 
Route::get('/tanggapan/create', 'TanggapanController@create')->middleware('auth');; 
Route::post('/tanggapan/store', 'TanggapanController@store')->middleware('auth');;
Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit')->middleware('auth');; 
Route::put('/tanggapan/update/{id}', 'TanggapanController@update')->middleware('auth');;
Route::get('/tanggapan/destroy/{id_tanggapan}', 'TanggapanController@destroy')->middleware('auth');; 
Route::get('/tanggapan/show/{id_tanggapan}', 'TanggapanController@show')->middleware('auth');;


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;

