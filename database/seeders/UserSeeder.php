<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@email.com',
                'password' => bcrypt('1234'),
                'role' => 'admin'
            ],
            [
                'name' => 'vendor',
                'role' => 'vendor@email.com',
                'password' => bcrypt('1234'),
                'role' => 'vendor'
            ],
            [
                'name' => 'vendor',
                'email' => 'vendor@email.com',
                'password' => bcrypt('1234'),
                'role' => 'vendor'
            ],

        );
    }
}
