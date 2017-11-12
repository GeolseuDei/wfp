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
    return view('templates.masteradmin');
});

Route::get('admin_page', function () {
    return view('admin.index');
});

Route::get('fpp1', function () {
    return view('admin.fpp1');
});
Route::get('fpp2', function () {
    return view('admin.fpp2');
});
Route::get('kasus_khusus', function () {
    return view('admin.kasus_khusus');
});
Route::get('input_matkul', function () {
    return view('admin.input_matkul');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa.index');
});