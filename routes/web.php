<?php

Route::get('/', function(){
    return redirect('funcionarios');
});
Route::get('/funcionarios', 'FuncionariosController@index')->name('funcionarios');
Route::get('/funcionarios/create', 'FuncionariosController@create');
Route::get('/funcionarios/edit/{id}', 'FuncionariosController@edit')->name('funcionarios.edit');
Route::post('/funcionarios/edit/{id}', 'FuncionariosController@update');
Route::post('/funcionarios/remove/{id}', 'FuncionariosController@remove');
Route::post('/funcionarios/create', 'FuncionariosController@store')->name('funcionarios.create');
Route::get('/funcionarios/all', 'FuncionariosController@all')->name('funcionarios.all');
