<?php


Route::get('/', function () {
    return view('');
});

Route::get('/clientes', 'ClienteController@index');


Route::get('/cliente/{id}/altera', 'ClienteController@altera')->name('cliente.altera');


Route::delete('/cliente/{id}/exclui', 'ClienteController@exclui')->name('cliente.exclui');
