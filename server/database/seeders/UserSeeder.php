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

        $data = [
            'name' => 'anandamw',
            'phone' => '0182323323',
            'email' => 'ananda@gmail.com',
            'password' => bcrypt(88888888),
        ];

        User::create($data);
    }
}
