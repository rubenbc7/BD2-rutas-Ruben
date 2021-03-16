<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Notas;

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

Route::get('notas', 'App\Http\Controllers\NotasController@index')->name('notas.index');

Route::get('agregar', 'App\Http\Controllers\NotasController@agregar');

Route::post('crear', 'App\Http\Controllers\NotasController@store')->name('notas.store');

Route::get('notas/{id}/editar', 'App\Http\Controllers\NotasController@edit')->name('notas.edit');