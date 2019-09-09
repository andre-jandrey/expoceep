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
Auth::routes(['register' => false]);

Route::middleware(['auth', 'encerrado'])->group(function () {
    Route::get('/', 'ProjetoController@index')->name('inicio');
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
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', 'AdminController@index'); // editar registro
    Route::get('/etiquetas', 'AdminController@relEtiquetas'); // editar registro
    Route::get('/aprovar', 'AdminController@relEtiquetas'); // editar registro
    Route::get('/aprovar/{id}', 'AdminController@aprovar'); // editar registro
    Route::get('/reprovar/{id}', 'AdminController@reprovar'); // editar registro
    Route::get('/projetos', 'AdminController@projetos'); // editar registro
    Route::get('/usuarios', 'AdminController@usuarios'); // editar registro
});
