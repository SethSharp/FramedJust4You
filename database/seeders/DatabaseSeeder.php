<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('production')) {
            throw new \RuntimeException("Cannot refresh the production database man!!");
        }

        Artisan::call('bootstrap');

        $this->call(UserTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductTableSeeder::class);
    }
}
