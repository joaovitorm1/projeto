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
    return view('index');
})->name('index');
Route::get('/prefeitura', function () {
    return view('prefeitura');
})->name('prefeitura');

Route::get('/cidade', function () {
    return view('cidade');
})->name('cidade');
Route::get('/secretarias', function () {
    return view('secretaria');
})->name('secretarias');

Route::get('/noticia', function () {
    return view('noticias');
})->name('noticias');
Route::get('/prefeitura', function () {
    return view('prefeitura');
})->name('prefeitura');


