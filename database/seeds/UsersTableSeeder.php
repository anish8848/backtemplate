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
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');

  DB::table('users')->truncate();
  // DB::table('images')->truncate();

  DB::statement('SET FOREIGN_KEY_CHECKS=1;');

  // create user
  App\User::create([
      'name'     => 'Demo',
      'email'    => 'admin@abc.com',
      'password' => bcrypt('admin@abc')
  ]);
    }
}
