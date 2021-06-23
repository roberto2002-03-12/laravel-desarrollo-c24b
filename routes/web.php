<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\EmbarcacionController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\TratadoController;
use App\Http\Controllers\UserController;

Route::resource('container',ContainerController::class);
Route::resource('embarcacion',EmbarcacionController::class);
Route::resource('pais',PaisController::class);
Route::resource('tratado',TratadoController::class);
Route::resource('user',UserController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
