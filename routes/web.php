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
    return 'hola';
});
Route::get('/api/user', function () {
    return'hola';
});
Route::get('/paises', function () {
    return 'paises';
});
Route::post('/paises', function () {
    return 'paises';
});
Route::get('/paises/{pais}', function ($pais) {
    return 'el nombre del pais es '.$pais;
});
Route::put('/paises/{pais}', function ($pais) {
    return 'el nombre del pais es '.$pais;
});
Route::delete('/paises/{pais}', function ($pais) {
    return 'el nombre del pais es '.$pais;
});
Route::get('/paises/{pais}/departamentos', function ($pais) {
    return 'el nombre del pais es '.$pais.' y algo que tiene que ver con departamentos. ';
});
Route::post('/paises/{pais}/departamentos', function ($pais) {
    return 'el nombre del pais es '.$pais.' y algo que tiene que ver con departamentos. ';
});
Route::get('/paises/{pais}/departamentos/{departamentos}', function ($pais) {
    return 'el nombre del pais es '.$pais.' y algo que tiene que ver con departamentos. '.$departamentos;
});
Route::put('/paises/{pais}/departamentos/{departamentos}', function ($pais) {
    return 'el nombre del pais es '.$pais.' y algo que tiene que ver con departamentos. '.$departamentos;
});
Route::delete('/paises/{pais}/departamentos/{departamentos}', function ($pais,$departamentos) {
    return 'el nombre del pais es '.$pais.' y algo que tiene que ver con departamentos. '.$departamentos;
});

Route::match(['get', 'post'],'/colaboradores/miguel', function () {
    return 'hola miguel';
});
Route::match(['get', 'post'],'/colaboradores/carlos', function () {
    return 'hola Carlos';
});
Route::match(['get', 'post'],'/tienda/productos/{num}', function ($num) {
    return 'producto numero '.$num;
});
Route::match(['get', 'post'],'/agenda/julio/{num}', function ($num) {
    return 'Julio del año '.$num;
});
Route::match(['get', 'post'],'/categoria/php', function () {
    return 'Categoria PHP';
});
Route::match(['get', 'post'],'/categoria/php/num', function ($num) {
    return 'Categoria PHP con numero '.$num;
});