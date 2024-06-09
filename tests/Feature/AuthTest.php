<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $adminRole = Role::create(['name' => 'administrador']);
        $workerRole = Role::create(['name' => 'trabajador']);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
            'profile_photo' => 'path/to/admin_photo.jpg',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Worker User',
            'email' => 'worker@example.com',
            'password' => Hash::make('password'),
            'role_id' => $workerRole->id,
            'profile_photo' => 'path/to/worker_photo.jpg',
            'is_active' => true,
        ]);
    }

    public function test_admin_user_can_login()
    {
        $response = $this->post('/login', [
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/admin/dashboard');
    }

    public function test_worker_user_can_login()
    {
        $response = $this->post('/login', [
            'email' => 'worker@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/worker/dashboard');
    }

    public function test_invalid_user_cannot_login()
    {
        $response = $this->post('/login', [
            'email' => 'invalid@example.com',
            'password' => 'invalidpassword',
        ]);

        $response->assertSessionHas('error');
    }
}