<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'nama' => 'Administrator',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'password' => bcrypt('1234'),
        ]);
    }
}
