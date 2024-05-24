<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'marcus',
            'email' => 'marcus@example.com',
        ]);
        // User::factory(10)->create();

        Animal::factory(9)->create();
    }
}
