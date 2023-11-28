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
        User::create([
            'npm' => 'admin',
            'name' => 'Administrator',
            'class' => 'A',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);
    }
}
