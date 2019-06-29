<?php

Route::get('/', 'EventosController@home')->name('home');
Route::get('/login', 'UsuariosController@login')->name('login');

Route::post("/logar", 'UsuariosController@logar')->name('logar');

Route::resource('usuarios','UsuariosController');
Route::resource('eventos','EventosController');
Route::resource('ingressos','IngressosController');
Route::resource('categorias','CategoriasController');