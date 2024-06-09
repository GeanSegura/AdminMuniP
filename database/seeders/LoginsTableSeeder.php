<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Login;
use Carbon\Carbon;

class LoginsTableSeeder extends Seeder
{
    public function run()
    {
        $adminUser = User::where('email', 'admin@example.com')->first();
        $workerUser = User::where('email', 'worker@example.com')->first();

        Login::create([
            'user_id' => $adminUser->id,
            'login_at' => Carbon::now()->subDays(2),
        ]);

        Login::create([
            'user_id' => $adminUser->id,
            'login_at' => Carbon::now()->subDays(1),
        ]);

        Login::create([
            'user_id' => $workerUser->id,
            'login_at' => Carbon::now()->subDays(3),
        ]);

        Login::create([
            'user_id' => $workerUser->id,
            'login_at' => Carbon::now()->subDays(1),
        ]);
    }
}
