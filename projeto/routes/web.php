<?php

Route::get('/', function () {
    return "<h1>Olá</h1>";
});

Route::get('/clientes', 'ClienteController@index');
Route::get('/cliente/{id}/altera', 'ClienteController@altera')->name('cliente.altera');
Route::delete('/cliente/{id}/exclui', 'ClienteController@exclui')->name('cliente.exclui');
