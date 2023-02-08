<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => '$2y$10$gxcHw8HzhRklQSuzJxGfYePRqC9BFje/9AJdfGQZWtUic9PUMoLgy',
        ])
        ->assignRole('admin',"writer");

        for ($i = 0; $i < 10; $i++) {
            \App\Models\User::factory()->create([
                'name' => "User $i",
                'email' =>"example$i@example.com",
                'password' => '$2y$10$gxcHw8HzhRklQSuzJxGfYePRqC9BFje/9AJdfGQZWtUic9PUMoLgy',
            ])->assignRole('user');
        }

    }
}
