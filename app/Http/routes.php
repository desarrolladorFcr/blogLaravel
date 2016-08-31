<?php

/*
  ---------------------------------------
  Rutas en Laravel
  ---------------------------------------
  + Las rutas son agrupadas en el siguiente método Route::group, dentro de éste está
  + Route::get,post() El primer parámetro es la ruta que se solicita
  + el segundo es el controlador seguido del metodo que atiende la petición
 */

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['uses'=> 'CiudadanosController@mostrarCiudadanos']);
    Route::get('/crearCiudadano', 'CiudadanosController@verCrear');
    Route::post("/guardarCiudadano", 'CiudadanosController@addCiudadanos');
    Route::get('/varBlog', 'blog@verBlogs');
    Route::get('/crear', 'blog@crearBlog');
    Route::post("/guardar", 'blog@guardarBlog');
    Route::post('/eliminacion','blog@eliminarBlog');
    Route::get('/actualizar','blog@actualizarBlog');
    Route::post('/actualizando','blog@actualizando');
    Route::get('/ciudades', 'CiudadController@mostrar');
    Route::post('/guardadCiudad','CiudadController@guardadCiudad');
    Route::get('/verGuardar', 'CiudadController@verGuardar');
    Route::get('/verEliminar', 'CiudadController@verEliminar');
    Route::post('/eliminarCity', 'CiudadController@eliminarCity');
    Route::post('/remove', 'CiudadanosController@remove');
});

