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

Route::get('/welcome', function () {
    return view('welcome');});

Route::get('/', function () {
    return view('sidebar');});

Route::get('/radio', function () {
    return view('radio');});

Route::get('/media', function () {
    return view('media');});

Route::get('/media2', function () {
    return view('media2');});

Route::get('/atender', function () {
    return view('atender');});
