<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //METODOS

    //si en un contralador solo hay un solo metodo publico se le coloca como nombre __invoke, y en el archivo de ruta
    //solo se llama al controlador y no al metodo.
    public function __invoke($name,$nickname=null)
    {
        $name=ucfirst($name);
    if($nickname)
    {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    
    }
    else{
        return "Bienvenido {$name}, no tienes apodo";
    }
    }
}
