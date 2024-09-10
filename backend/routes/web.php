<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Pessoas', 'App\Http\Controllers\PessoaController@index');
Route::post('Pessoa', 'App\Http\Controllers\PessoaController@store');