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
    return view('home');
})->name('home');

Route::get('certificaciones', function () {
    return view('certificate');
})->name('certificate');


Route::get('cursos', function () {
    return view('cursos');
})->name('cursos');

Route::get('Eventos', function () {
    return view('event');
})->name('event');

Route::get('Socios', function(){
	return view('partner');
})->name('partner');

Route::get('contacto', function(){
	return view('contact');
})->name('contact');
