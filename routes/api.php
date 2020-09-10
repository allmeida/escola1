<?php

use Illuminate\Http\Request;

Route::get('/home', 'HomeController@index')->name('home');
    Route::middleware('auth:api')->group( function() {
    });

Route::resource('aluno', 'AlunoController');
Route::resource('curso', 'CursoController');
