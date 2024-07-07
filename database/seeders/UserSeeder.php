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
        DB::table('users')->insert([
            [
                'name' => 'Joel Jr',
                'username' => 'user',
                'email' => 'user@devsistemas.com.br',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Joel Vendor',
                'username' => 'vendor',
                'email' => 'vendor@devsistemas.com.br',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password')
            ],

            [
                'name' => 'Joel Admin',
                'username' => 'admin',
                'email' => 'admin@devsistemas.com.br',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
