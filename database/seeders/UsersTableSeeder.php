<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'administrador')->first();
        $workerRole = Role::where('name', 'trabajador')->first();

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
}