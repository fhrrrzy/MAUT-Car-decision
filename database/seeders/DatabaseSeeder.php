<?php

namespace Database\Seeders;

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
        // User::factory(1)->create();
        #run car seeder
        $this->call(CarSeeder::class);

        User::factory()->create([
            'name' => 'Admin CDA',
            'email' => 'test@example.com',
            'username' => 'admincda',
        ]);
    }
}
