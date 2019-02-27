<?php

// clases de laravel
use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  aca especificamos lo que queremos que haga esta migracion
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // columnas de nuestra tabla
            // increments es un metodo
            $table->increments('id');   //entero sin signo que se auto incrementa 
            $table->string('name');     //varchar
            $table->string('email')->unique(); //varchar, columna que va ser unica 
            $table->string('password');
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->unsignedInteger('profession_id');//PARA NO CREAR MUCHAS MIGRACIONES, SI SE NOS OLVIDO AGREGAR UN CAMPO SOLO ABRIMOS LA MIGRACION 
            //PRINCIPAL Y AHI AGREGAMOS EL NUEVO CAMO, Y LUEGO EJECUTAMO EL COMANDO PHP ARTISAN MIGRATE:REFRESH
            $table->rememberToken();  //este metodo no representa una columna en la bd, helpers que permiten generar columnas
            $table->timestamps(); // metodo helper
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //revierte la operacion del metodo UP
    {
        Schema::dropIfExists('users');
    }
}
