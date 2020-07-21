<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'secretaria',
            'email' => 'secre@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name' => 'karla',
            'email' => 'karla@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name' => 'rosa',
            'email' => 'rosa@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
