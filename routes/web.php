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
    return view('home');
});

Route::resource('admin_page', 'AdminHomeController');
Route::resource('fpp1', 'FPP1Controller');
Route::resource('fpp2', 'FPP2Controller');
Route::resource('kasus_khusus', 'KasusKhususController');
Route::resource('edit_matkul', 'MatkulController');
Route::get('/input_matkul', 'MatkulController@loadJurusanInput');
Route::get('/list_matkul', 'MatkulController@loadJurusanEdit');


Route::get('dosen_page', function() {
	return view('dosen.index');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa.index');
});
Route::get('profil_mahasiswa', function() {
	return view('mahasiswa.profil');
});