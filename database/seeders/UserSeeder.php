<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [   
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'role' => 'admin',
                'phone' => '085267816542',
                'password' => Hash::make('password')
            ],
            [   
                'name' => 'User',
                'email' => 'user@gmail.com',
                'username' => 'user',
                'role' => 'user',
                'phone' => '012387223',
                'password' => Hash::make('password')
            ],
        );
        foreach($data AS $d){
            User::create([
                'name' => $d['name'],
                'email' => $d['email'],
                'username' => $d['username'],
                'role' => $d['role'],
                'phone' => $d['phone'],
                'password' => $d['password']
            ]);
        }
    }
}