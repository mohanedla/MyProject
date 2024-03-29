<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aymen',
            'email' => 'Aymen@gmail.com',
            'password' => bcrypt('11111111'),
            'profile_image' => 'public/13.jpg',
            'role' => 1,
        ]);
    }
}