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


Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);

Route::post('/contato',['uses'=>'ContatoController@criar']);

Route::put('/contato',['uses'=>'ContatoController@editar']);


Route::group(['middleware'=>'auth'],function(){

  Route::get('/admin/filiais',['as'=>'admin.filiais','uses'=>'Admin\FilialController@index']);
  Route::get('/admin/filiais/adicionar',['as'=>'admin.filiais.adicionar','uses'=>'Admin\FilialController@adicionar']);
  Route::post('/admin/filiais/salvar',['as'=>'admin.filiais.salvar','uses'=>'Admin\FilialController@salvar']);
  Route::get('/admin/filiais/editar/{id}',['as'=>'admin.filiais.editar','uses'=>'Admin\FilialController@editar']);
  Route::put('/admin/filiais/atualizar/{id}',['as'=>'admin.filiais.atualizar','uses'=>'Admin\FilialController@atualizar']);
  Route::get('/admin/filiais/deletar/{id}',['as'=>'admin.filiais.deletar','uses'=>'Admin\FilialController@deletar']);

  Route::get('/admin/funcionarios',['as'=>'admin.funcionarios','uses'=>'Admin\FuncionarioController@index']);
  Route::get('/admin/funcionarios/adicionar',['as'=>'admin.funcionarios.adicionar','uses'=>'Admin\FuncionarioController@adicionar']);
  Route::post('/admin/funcionarios/salvar',['as'=>'admin.funcionarios.salvar','uses'=>'Admin\FuncionarioController@salvar']);
  Route::get('/admin/funcionarios/editar/{id}',['as'=>'admin.funcionarios.editar','uses'=>'Admin\FuncionarioController@editar']);
  Route::put('/admin/funcionarios/atualizar/{id}',['as'=>'admin.funcionarios.atualizar','uses'=>'Admin\FuncionarioController@atualizar']);
  Route::get('/admin/funcionarios/deletar/{id}',['as'=>'admin.funcionarios.deletar','uses'=>'Admin\FuncionarioController@deletar']);

  Route::get('/admin/automoveis',['as'=>'admin.automoveis','uses'=>'Admin\AutomovelController@index']);
  Route::get('/admin/automoveis/adicionar',['as'=>'admin.automoveis.adicionar','uses'=>'Admin\AutomovelController@adicionar']);
  Route::post('/admin/automoveis/salvar',['as'=>'admin.automoveis.salvar','uses'=>'Admin\AutomovelController@salvar']);
  Route::get('/admin/automoveis/editar/{id}',['as'=>'admin.automoveis.editar','uses'=>'Admin\AutomovelController@editar']);
  Route::put('/admin/automoveis/atualizar/{id}',['as'=>'admin.automoveis.atualizar','uses'=>'Admin\AutomovelController@atualizar']);
  Route::get('/admin/automoveis/deletar/{id}',['as'=>'admin.automoveis.deletar','uses'=>'Admin\AutomovelController@deletar']);

  Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
  Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
  Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
  Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
  Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
  Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);

});
