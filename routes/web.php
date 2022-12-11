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

Route::get('/contact', function () {
    return view('welcome');});

Route::get('/', function () {
    return view('sidebar');});

Route::get('/bar', function () {
    return view('bar');});

Route::get('/volume', function () {
    return view('volume');});
