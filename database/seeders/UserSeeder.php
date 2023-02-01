<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name' => 'User',
            'level' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'remember_token' => Str::random(60),
        ]);
    }
}
