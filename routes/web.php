<?php

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

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group( function() {
    Route::resource('curso', 'CursoController');
    Route::resource('professor', 'ProfessorController');
    Route::resource('aluno', 'AlunoController');

    Route::get('relatorio', 'PdfController@index');
});

