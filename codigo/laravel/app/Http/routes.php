<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('categorias','CategoriaController',['except'=>['edit','create'] ]);

Route::resource('productos','ProductoController',[ 'only'=>['index','show'] ]);

Route::resource('categorias.productos','CategoriaProductoController',[ 'except'=>['show','edit','create'] ]);
