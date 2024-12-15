<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class UsersTest extends TestCase
{

    use RefreshDatabase;


    public function setUp(): void {
        parent::setUp();
        User::factory()->count(50)->create([
            'role' => 'manager',
        ]);
        User::factory()->count(30)->create([
            'role' => 'revisor',
        ]);
        User::factory()->count(20)->create([
            'role' => 'comprador',
        ]);
    }

    /**
     * Test para verificar que se listan los usuarios.
     */
    public function test_list_users()
    {

        // Hacer una solicitud GET al endpoint de listado de usuarios
        $response = $this->getJson('/api/users');

        // Asegurar que la respuesta es exitosa
        $response->assertStatus(200);

        $response->assertJsonCount(100);
    }

    public function test_user_statistics()
    {

        // Hacer una solicitud GET al endpoint de estadísticas
        $response = $this->getJson('/api/users/stats');

        // Verificar que la respuesta es exitosa
        $response->assertStatus(200);

        $response->assertJson([
            [
                'role' => 'comprador',
                'count' => 20,
            ],
            [
                'role' => 'manager',
                'count' => 50,
            ],
            [
                'role' => 'revisor',
                'count' => 30,
            ]
        ]);

    }


}
