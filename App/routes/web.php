<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Site\HomeController@index')->name('site.home');

Route::get('/login', 'Site\LoginController@index')->name('site.login');
Route::get('/login/sair', 'Site\LoginController@sair')->name('site.login.sair');
Route::post('/login/entrar', 'Site\LoginController@entrar')->name('site.login.entrar');

Route::get('/contato/{id?}', 'ContatoController@index');
Route::post('/contato', 'ContatoController@criar');
Route::put('/contato', 'ContatoController@editar');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/cursos', 'Admin\CursoController@index')->name('admin.cursos');
    Route::get('/admin/cursos/adicionar', 'Admin\CursoController@adicionar')->name('admin.cursos.adicionar');
    Route::post('/admin/cursos/salvar', 'Admin\CursoController@salvar')->name('admin.cursos.salvar');
    Route::get('/admin/cursos/editar/{id}', 'Admin\CursoController@editar')->name('admin.cursos.editar');
    Route::put('/admin/cursos/atualizar/{id}', 'Admin\CursoController@atualizar')->name('admin.cursos.atualizar');
    Route::delete('/admin/cursos/{id}', 'Admin\CursoController@deletar')->name('admin.cursos.deletar');
});
