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
            'username' => 'root',
            'password' => 'root123',
            'email' => 'root@quintet.group.id',
            'phone_number' => '62123456789'
        ])->assignRole('superadmin');

        User::create([
            'username' => 'admin',
            'password' => 'admin123',
            'email' => 'admin@quintet.group.id',
            'phone_number' => '62234567890'
        ])->assignRole('admin');

        User::create([
            'username' => 'loket',
            'password' => 'loket123',
            'email' => 'loket@quintet.group.id',
            'phone_number' => '62345678901'
        ])->assignRole('loket');
    }
}