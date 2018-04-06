<?php

//#################################################################################

Route::get('/', function () {
    return view('welcome');
})->middleware('auth'); //Quer dizere que o utilizador tem de estar autenticado para poder acessar à esta página

//##############################  Backend  ############################################
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//#################################################################################
