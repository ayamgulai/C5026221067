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
Route::get('biodata', 'App\Http\Controllers\DosenController@identity');
