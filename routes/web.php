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
Route::get('halo3', function () {
    return view('blog');
});
