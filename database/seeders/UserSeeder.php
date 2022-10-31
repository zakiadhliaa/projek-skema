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
        'name' => 'Admin',
        'level' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('rahasia'),
        'remember_token' => Str::random(60),

       ]); 
       User::create([
        'name' => 'User',
        'level' => 'User',
        'email' => 'user@gmail.com',
        'password' => bcrypt('rahasia'),
        'remember_token' => Str::random(60),
       ]);
    }
}
