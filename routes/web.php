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

Route::get('/contactos', function () {
    return view('contactos');});

Route::get('/', function () {
    return view('sidebar');});

//Rotas para login
Route::get('/helvio', function () {
    return view('homepage');});

Route::get('/artur', function () {
    return view('artur');});

Route::get('/gustavo', function () {
    return view('gustavo');});

Route::get('/pedro', function () {
    return view('pedro');});


//Rotas para navegacao
Route::get('/nav', function () {
    return view('navegacao');});

Route::get('/nav2', function () {
    return view('navegacao2');});

Route::get('/homepage', function () {
    return view('homepage');});






Route::get('/radio', function () {
    return view('radio');});

Route::get('/media', function () {
    return view('media');});

Route::get('/media2', function () {
    return view('media2');});

Route::get('/atender', function () {
    return view('atender');});
//Rotas para login
Route::get('/helvio', function () {
    return view('helvio');});

Route::get('/artur', function () {
    return view('artur');});

Route::get('/gustavo', function () {
    return view('gustavo');});

Route::get('/pedro', function () {
    return view('pedro');});



//Rotas para navegacao
Route::get('/nav', function () {
    return view('navegacao');});

Route::get('/nav2', function () {
    return view('navegacao2');});

Route::get('/acidente', function () {
    return view('acidente');});



Route::get('/radio', function () {
    return view('radio');});

Route::get('/media', function () {
    return view('media');});

Route::get('/media2', function () {
    return view('media2');});

Route::get('/atender', function () {
    return view('atender');});
Route::get('/homepage', function () {
    return view('homepage');});
