<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $adminRole = Role::create(['name' => 'administrador']);
        $workerRole = Role::create(['name' => 'trabajador']);

        $this->adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
            'profile_photo' => 'path/to/admin_photo.jpg',
            'is_active' => true,
        ]);

        $this->workerUser = User::create([
            'name' => 'Worker User',
            'email' => 'worker@example.com',
            'password' => Hash::make('password'),
            'role_id' => $workerRole->id,
            'profile_photo' => 'path/to/worker_photo.jpg',
            'is_active' => true,
        ]);
    }

    public function test_admin_user_can_access_dashboard()
    {
        $this->actingAs($this->adminUser)
            ->get('/admin/dashboard')
            ->assertStatus(200)
            ->assertSee('Bienvenido, Admin User (Administrador)');
    }

    public function test_worker_user_can_access_dashboard()
    {
        $this->actingAs($this->workerUser)
            ->get('/worker/dashboard')
            ->assertStatus(200)
            ->assertSee('Bienvenido, Worker User');
    }

    public function test_guest_cannot_access_admin_dashboard()
    {
        $this->get('/admin/dashboard')
            ->assertRedirect('/login');
    }

    public function test_guest_cannot_access_worker_dashboard()
    {
        $this->get('/worker/dashboard')
            ->assertRedirect('/login');
    }
}
