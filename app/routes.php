<?php

Route::get('/', 'HomeController@showWelcome');
Route::get('clientes/listado', array('as'=>'clientes.listado','uses'=>'ClientesController@showAll'));

Route::resource('clientes', 'ClientesController');
Route::resource('home', 'HomeController');
