<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Remka',
          'email' => 'remuka@gmail.com',
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'name' => 'Uzai',
          'email' => 'audeboyer0418@gmail.com',
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'name' => 'Some user',
          'email' => 'something@gmail.com',
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'name' => 'Another user',
          'email' => 'another@gmail.com',
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'name' => 'One more user',
          'email' => 'onemore@gmail.com',
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'name' => 'A last user',
          'email' => 'lastone@gmail.com',
          'password' => bcrypt('qwerty'),
      ]);
    }
}
