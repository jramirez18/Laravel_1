<?php

namespace App\Http\Controllers;//apellido de una clase

use Illuminate\Http\Request;

class UserController extends Controller
{
    //METODOS PUBLICOS O ACCIONES
    public function index()
    {
        return 'Usuarios';

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
