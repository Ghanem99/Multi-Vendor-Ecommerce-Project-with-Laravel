<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin 

        DB::table('users')->insert(
            [
            'name' => 'Admin',
            'email' => 'admin@gmail.com', 
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'status' => 'active',
            ], 
            // Vendor
            [
                'name' => 'Vendor',
                'email' => 'vendor@gmail.com',
                'username' => 'vendor',
                'password' => bcrypt('vendor'),
                'role' => 'vendor',
                'status' => 'active',
            ], 
            // User
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'username' => 'user',
                'password' => bcrypt('user'),
                'role' => 'user',
                'status' => 'active',
            ]
        );
    }
}
