<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jam ani nor',
            'email' => 'jamaninor@gmail.com',
            'password' => Hash::make('jamaninor123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jan international eksport',
            'email' => 'janinternationaleksport@gmail.com',
            'password' => Hash::make('jamaninor123'),
        ]);
    }
}
