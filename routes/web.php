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
Route::get('halo', function () {
    return "hallo";
});
Route::get('halo2', function () {
    return "<h1>hallo semuah</h1>";
});
Route::get('portofolio-example', function () {
    return view('portex');
});
Route::get('ets-web', function () {
    return view('ets-web');
});
Route::get('js-validation', function () {
    return view('validation-js');
});
Route::get('basic-js', function () {
    return view('basic-js');
});
Route::get('layout-web', function () {
    return view('layout-task');
});
Route::get('exploring-css', function () {
    return view('css-example');
});
Route::get('pag-bootstrap', function () {
    return view('bootstrap-pagination');
});
Route::get('counting-web', function () {
    return view('counting');
});

Route::get('blog2', function () {
    return view('blog');
});
Route::get('master', function () {
    return view('master2');
});
Route::get('biodata', 'App\Http\Controllers\DosenController@identity');


Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir','App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses','App\Http\Controllers\DosenController@proses');

Route::get('/blog',function (){
    return view('home');
});
Route::get('/blog/tentang',function (){
    return view('tentang');
});
Route::get('/blog/kontak',function (){
    return view('kontak');
});



Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');


Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/tambah','App\Http\Controllers\KeranjangController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');


