<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@presto.it',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Editor',
            'email' => 'editor@presto.it',
            'password' => bcrypt('12345678'),
        ]);
    }
}
