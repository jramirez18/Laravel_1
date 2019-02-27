<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessionToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //metodo table para modificcar
        Schema::table('users',function(Blueprint $table){
            $table->string('profession',50)->nullable()->after('password');//indica que quiero agregar el campo despues de password

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users',function(Blueprint $table){
            $table->dropColumn('profession');

        });
    }
}
