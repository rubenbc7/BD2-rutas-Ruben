<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Cruds;
use Illuminate\Http\Request;

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

Route::get('cruds', 'App\Http\Controllers\CrudsController@index')->name('cruds.index');

Route::get('agregar', 'App\Http\Controllers\CrudsController@agregar')->name('cruds.agregar');

Route::post('crear', 'App\Http\Controllers\CrudsController@crear')->name('cruds.store');

Route::get('cruds/{id}/editar', 'App\Http\Controllers\CrudsController@editar')->name('cruds.editar');

Route::put('cruds/{cruds}/editar', 'App\Http\Controllers\CrudsController@update')->name('cruds.update');

Route::delete('cruds/{id}', 'App\Http\Controllers\CrudsController@destroy' )->name('cruds.destroy');