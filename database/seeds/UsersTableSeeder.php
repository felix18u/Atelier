<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('administrateur'),
            'admin' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('utilisateur'),
        ]);
    }
}
