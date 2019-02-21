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
        ->assertSee('');
    }

    /** @test */
    function it_shows_a_message_dafault_if_there_are_empty() //eliminar la palabra public
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados');
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
