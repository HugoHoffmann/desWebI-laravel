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

/**
 * Order
 */
Route::get('/ordens', 'OrdemController@listar')->name('ordem.listar');

Route::get('/ordem/incluir', 'OrdemController@incluir')->name('ordem.incluir');
Route::post('/ordem/salvar', 'OrdemController@salvar')->name('ordem.salvar');

Route::get('/ordem/{id}/alterar', 'OrdemController@alterar')->name('ordem.alterar');
Route::patch('/ordem/{id}/alterar', 'OrdemController@atualizar')->name('ordem.atualizar');

Route::delete('/ordem/{id}/excluir', 'OrdemController@excluir')->name('ordem.excluir');

/**
 * Order Details
 */
Route::get('/ordens-detalhes', 'OrdemDetalheController@listar')->name('ordem-detalhe.listar');

Route::get('/ordem-detalhe/incluir', 'OrdemDetalheController@incluir')->name('ordem-detalhe.incluir');
Route::post('/ordem-detalhe/salvar', 'OrdemDetalheController@salvar')->name('ordem-detalhe.salvar');

Route::get('/ordem-detalhe/{id}/alterar', 'OrdemDetalheController@alterar')->name('ordem-detalhe.alterar');
Route::patch('/ordem-detalhe/{id}/alterar', 'OrdemDetalheController@atualizar')->name('ordem-detalhe.atualizar');

Route::delete('/ordem-detalhe/{id}/excluir', 'OrdemDetalheController@excluir')->name('ordem-detalhe.excluir');