<?php

Route::get('/', 'EventosController@home')->name('home');

Route::resource('usuarios','UsuariosController');
Route::resource('eventos','EventosController');
Route::resource('ingressos','IngressosController');
Route::resource('categorias','CategoriasController');