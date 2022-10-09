<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'surename' => 'Admin Just Do It',
            'language' => 'en',
            'password' => 'admin123'
        ])->assignRole('root');

        User::create([
            'username' => 'User',
            'surename' => 'User Just Do It',
            'language' => 'en',
            'password' => 'user123'
        ])->assignRole('user');
    }
}