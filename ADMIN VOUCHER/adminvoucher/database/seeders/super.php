<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class super extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('superadmins')->insert([
            'username' => ('Olyvian'),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
