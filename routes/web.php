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

Route::resource('admin_page', 'AdminHomeController')->middleware('auth');
Route::resource('fpp1', 'FPP1Controller')->middleware('auth');
Route::resource('fpp2', 'FPP2Controller')->middleware('auth');
Route::resource('kasus_khusus', 'KasusKhususController')->middleware('auth');
Route::resource('edit_matkul', 'MatkulController')->middleware('auth');
Route::get('/input_matkul', 'MatkulController@loadJurusanInput')->middleware('auth');
Route::get('/list_matkul', 'MatkulController@loadJurusanEdit');
Route::resource('master_dosen', 'MasterDosenController')->middleware('auth');
Route::get('input_dosen', 'MasterDosenController@create')->middleware('auth');
Route::resource('master_mahasiswa', 'MasterMahasiswaController')->middleware('auth');
Route::get('input_mhs', 'MasterMahasiswaController@create')->middleware('auth');
Route::resource('master_kelas', 'MasterKelasController')->middleware('auth');
Route::get('input_kelas', 'MasterKelasController@create')->middleware('auth');

Route::resource('mahasiswa', 'MahasiswaController')->middleware('auth');
Route::resource('profil_mahasiswa', 'ProfilMahasiswaController')->middleware('auth');
Route::resource('jadwal_matkul', 'JadwalMatkulController')->middleware('auth');
Route::resource('daftarkelas', 'DaftarKelasController')->middleware('auth');
Route::get('carimk', 'DaftarKelasController@getNamaMK')->middleware('auth');
Route::resource('history', 'HistoryController')->middleware('auth');

Route::resource('dosen_page', 'DosenController')->middleware('auth');


