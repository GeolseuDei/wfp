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

Auth::routes();

Route::get('/', function () {
	return view('home');
});
Route::get('/home', function () {
	return view('home');
});
Route::resource('admin_page', 'AdminHomeController');
Route::resource('fpp1', 'FPP1Controller');
Route::resource('fpp2', 'FPP2Controller');
Route::resource('kasus_khusus', 'KasusKhususController');
Route::resource('edit_matkul', 'MatkulController');
Route::get('/input_matkul', 'MatkulController@loadJurusanInput');
Route::get('/list_matkul', 'MatkulController@loadJurusanEdit');
Route::resource('master_dosen', 'MasterDosenController');
Route::get('input_dosen', 'MasterDosenController@create');

// Route::get('master_dosen', function() {
// 	$user = Auth::user();
//     if($user['status'] == 'admin')
//     {
//     	return view('admin.master_dosen');
//     }
//     else
//     {
//     	return view('noaccess');
//     }
	
// })->middleware('auth');

Route::get('master_mahasiswa', function() {
	return view('admin.master_mhs');
})->middleware('auth');

Route::get('dosen_page', function() {
	return view('dosen.index');
})->middleware('auth');

Route::get('mahasiswa', function () {
	return view('mahasiswa.index');
})->middleware('auth');

Route::get('profil_mahasiswa', function() {
	return view('mahasiswa.profil');
})->middleware('auth');

//Route::get('/home', 'HomeController@index')->name('home');
