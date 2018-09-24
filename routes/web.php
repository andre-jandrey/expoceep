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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'ProjetoController@index')->name('inicio');
    /*Route::get('/home', 'HomeController@index')->name('home');*/
    Route::get('/sucesso', 'ProjetoController@sucesso'); // editar registro
    Route::get('/congratulations', 'ProjetoController@congratulations'); // editar registro
    Route::get('/projeto/edit/{id}/box/{box}', 'ProjetoController@setBox'); // editar registro
    Route::resource('projeto', 'ProjetoController');
    Route::resource('curso', 'CursoController');
    Route::get('/mapa', 'MapaController@showMapa')->name('mapa');
    Route::get('/mapa/sala/{id}', 'MapaController@showSala')->name('sala');
    Route::get('/mapa/bloco', 'MapaController@showBloco')->name('bloco');
    Route::get('/mapa/bloco/{id}', 'MapaController@showBlocoCurso')->name('bloco');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'AdminController@index'); // editar registro
    Route::get('/relatorioBox', 'AdminController@relProjetoBox'); // editar registro
    Route::get('/etiquetas', 'AdminController@relEtiquetas'); // editar registro
});
