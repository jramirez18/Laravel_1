<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test 
     */
    function it_loads_the_users_list_page() //eliminar la palabra public
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }

    /**@test */
    function it_load_the_user_detail_page()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando el detalle del usuario: 5');
    }

    /** 
     * @test
    */
    function it_load_the_new_user_page()
    {
        $this->withoutExceptionHandling();//muestro los errores en pantalla

        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear nuevo usuario');
    }
}
