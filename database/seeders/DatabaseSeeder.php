<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Sami Saudi Arabia',
            'email' => 'sami@gmail.com',
            'timezone' => 'Asia/Riyadh',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Sami Egypt',
            'email' => 'sami.egypt@gmail.com',
            'timezone' => 'Africa/Cairo',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Sami America',
            'email' => 'sami.america@gmail.com',
            'timezone' => 'America/New_York',
        ]);

        Post::factory(5)->create();
    }
}
