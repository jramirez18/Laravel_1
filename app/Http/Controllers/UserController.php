<?php

namespace App\Http\Controllers;//apellido de una clase

use Illuminate\Http\Request;

class UserController extends Controller
{
    //METODOS PUBLICOS O ACCIONES
    public function index()
    {
        $users=[//se debe de pasar la variable a la view
            'joel',
            'juan',//arreglos estaticos
            'carlos',
            'Jorge',
            '<script>alert("Clicker")</script>'
        ];
        $title='listado de usuarios';
        return view('users',compact('users','title'));//llamamos a la vista, no se necesita colocar la extencion
        //si el array se encuentra definido utilizamos el COMPACT

    }


    //para llamar a este metodo lo hacemos en el archivo de rutas web.PHP agregando el 
    //el nombre del controller y el nombre del metodo.
    public function show($id)//va tener un parametro
    {
        return "Mostrando detalle del usuario: {$id}";//para concatenar una variable se usan las comillas "" 
    }


    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
