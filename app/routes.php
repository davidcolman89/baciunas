<?php

Route::get('/', array('as'=>'home','uses'=>'HomeController@showWelcome'));

Route::get('clientes/listado', array('as'=>'clientes.listado','uses'=>'ClientesController@showAll'));
Route::resource('clientes', 'ClientesController');


Route::get('ctasCtesCli/relaciones/{id}', array('as'=>'ctasCtesCli.relaciones','uses'=>'CtasCtesClienteController@getRelaciones'));
Route::get('ctasCtesCli/cliente/{idCliente}', array('as'=>'ctasCtesCli.cliente','uses'=>'CtasCtesClienteController@getListado'));
Route::get('ctasCtesCli/listado/{idCliente}', array('as'=>'ctasCtesCli.listado','uses'=>'CtasCtesClienteController@showAll'));
Route::resource('ctasCtesCli', 'CtasCtesClienteController');

Route::resource('home', 'HomeController');
