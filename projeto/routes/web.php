<?php

Route::get('/', function () {
    return "<h1>Olá</h1>";
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
 * Categorias
 */