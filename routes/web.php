<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//ACA EL ORDEN DE LAS RUTAS SI IMPORTA MUCHO, pues primero
//va de recorriendo de una en una
Route::get('/', function () {
    return 'welcome';
});

//ENLACE DE RUTA A UN CONTROLADOR
Route::get('/usuarios','UserController@index');//nombre del controlador y el nombre del metodo

route::get('/usuarios/nuevo','UserController@create');

route::get('/usuarios/{id}','UserController@show')->where('id','[0-9]+');

//se le agrego un ? al 2do parametro
route::get('/saludo/{name}/{nickname?}','WelcomeUserController'); //el controloador solo tiene un metodo por eso se definio asi




//NOTA: PARA REVISAR CUALQUIER ERROR HAY QUE VER LOS LOGS DE LA API

