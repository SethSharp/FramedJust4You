<?php

namespace Database\Seeders;

use App\Domain\Iam\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        // Main User
        User::factory()->admin()->create([
            'name' => 'Admin User',
            'email' => 'admin@framed.test'
        ]);

        User::factory()->count(2)->create();
    }
}
