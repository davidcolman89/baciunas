<?php

Route::get('/', 'HomeController@showWelcome');

Route::get('clientes/listado', array('as'=>'clientes.listado','uses'=>'ClientesController@showAll'));
Route::resource('clientes', 'ClientesController');


Route::get('ctasCtesCli/cliente/{idCliente}', array('as'=>'ctasCtesCli.cliente','uses'=>'CtasCtesClienteController@listado'));
Route::get('ctasCtesCli/listado/{idCliente}', array('as'=>'ctasCtesCli.listado','uses'=>'CtasCtesClienteController@showAll'));
Route::resource('ctasCtesCli', 'CtasCtesClienteController');

Route::resource('home', 'HomeController');
