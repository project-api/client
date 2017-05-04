<?php

use Illuminate\Database\Seeder;

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
           'name' => "John",
           'email' => "john@example.com",
           'password' => bcrypt('123456'),
         ]);
         DB::table('users')->insert([
           'name' => "david",
           'email' => "david@example.com",
           'password' => bcrypt('123456'),
         ]);
     }
}
