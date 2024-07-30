<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Kay Kay',
            'email' => 'kaykay199995@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
