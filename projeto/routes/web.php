<?php

Route::get('/', function () {
    return view('index');
});

/**
 * Clients
 */
Route::get('/clientes', 'ClienteController@listar')->name('cliente.listar');

Route::get('/cliente/incluir', 'ClienteController@incluir')->name('cliente.incluir');
Route::post('/cliente/salvar', 'ClienteController@salvar')->name('cliente.salvar');

Route::get('/cliente/{id}/alterar', 'ClienteController@alterar')->name('cliente.alterar');
Route::patch('/cliente/{id}/alterar', 'ClienteController@atualizar')->name('cliente.atualizar');

Route::delete('/cliente/{id}/excluir', 'ClienteController@excluir')->name('cliente.excluir');

/**
 * Category
 */
Route::get('/categorias', 'CategoriaController@listar')->name('categoria.listar');

Route::get('/categoria/incluir', 'CategoriaController@incluir')->name('categoria.incluir');
Route::post('/categoria/salvar', 'CategoriaController@salvar')->name('categoria.salvar');

Route::get('/categoria/{id}/alterar', 'CategoriaController@alterar')->name('categoria.alterar');
Route::patch('/categoria/{id}/alterar', 'CategoriaController@atualizar')->name('categoria.atualizar');

Route::delete('/categoria/{id}/excluir', 'CategoriaController@excluir')->name('categoria.excluir');

/**
 * Product
 */
Route::get('/produtos', 'ProdutoController@listar')->name('produto.listar');

Route::get('/produto/incluir', 'ProdutoController@incluir')->name('produto.incluir');
Route::post('/produto/salvar', 'ProdutoController@salvar')->name('produto.salvar');

Route::get('/produto/{id}/alterar', 'ProdutoController@alterar')->name('produto.alterar');
Route::patch('/produto/{id}/alterar', 'ProdutoController@atualizar')->name('produto.atualizar');

Route::delete('/produto/{id}/excluir', 'ProdutoController@excluir')->name('produto.excluir');
