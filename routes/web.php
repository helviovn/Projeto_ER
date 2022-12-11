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
    return view('sidebar');});



//Rotas para navegacao
Route::get('/nav', function () {
    return view('navegacao');});

Route::get('/nav2', function () {
    return view('navegacao2');});

//Route::get('/homepage', function () {
  //  return view('homepage');});






Route::get('/radio', function () {
    return view('radio');});

Route::get('/radio_artur', function () {
    return view('radio_artur');});

Route::get('/media', function () {
    return view('media');});

Route::get('/media_artur', function () {
    return view('media_artur');});

Route::get('/media2', function () {
    return view('media2');});

Route::get('/media2_artur', function () {
    return view('media2_artur');});

Route::get('/atender', function () {
    return view('atender');});
//Rotas para login
Route::get('/helvio', function () {
    return view('homepage');});

Route::get('/artur', function () {
    return view('homepage2');});

Route::get('/gustavo', function () {
    return view('gustavo');});

Route::get('/pedro', function () {
    return view('pedro');});



//Rotas para navegacao
Route::get('/nav', function () {
    return view('navegacao');});

Route::get('/nav_artur', function () {
    return view('navegacao_artur');});

Route::get('/nav2', function () {
    return view('navegacao2');});

Route::get('/nav2_artur', function () {
    return view('navegacao2_artur');});


Route::get('/acidente', function () {
    return view('acidente');});
Route::get('/acidente_artur', function () {
    return view('acidente_artur');});
Route::get('/contactos1', function () {
    return view('contactos1');});
Route::get('/definicoes', function () {
    return view('definicoes');});
Route::get('/definicoes_artur', function () {
    return view('definicoes_artur');});
Route::get('/contactos2', function () {
    return view('contactos2');});


Route::get('/radio', function () {
    return view('radio');});

Route::get('/media', function () {
    return view('media');});

Route::get('/media2', function () {
    return view('media2');});

Route::get('/atender', function () {
    return view('atender');});


Route::get('/appshelvio', function () {
    return view('apps_helvio');});

Route::get('/veiculo', function () {
    return view('veiculo');});

Route::get('/avaria', function () {
    return view('avaria');});

Route::get('/apps_artur', function () {
    return view('apps_artur');});

Route::get('/veiculo_artur', function () {
    return view('veiculo_artur');});

Route::get('/avaria_artur', function () {
    return view('avaria_artur');});

