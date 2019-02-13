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

Route::get('/usuarios',function(){
    return 'Usuarios';
});

route::get('/usuarios/nuevo',function(){
    return 'Crear nuevo usuario';

});

route::get('/usuarios/{id}',function($id){
    return "Mostrando detalle del usuario: {$id}";

});

//se le agrego un ? al 2do parametro
route::get('/saludo/{name}/{nickname?}',function($name,$nickname=null){
    if($nickname)
    {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    
    }
    else{
        return "Bienvenido {$name}, no tienes apodo";
    }

});
