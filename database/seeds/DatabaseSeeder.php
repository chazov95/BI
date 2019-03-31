<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'a@g4v.ru',
            'real_name' => 'Сергей',
            'real_lastname' => 'Чазов',
            'global_admin_permission' => true,
            'theme' => 'default',
            'email' => 'a@g4v.ru',
            'password' => bcrypt('istfac2007'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'remember_token' => str_random(10),
            'companys_admin_permission' => 'a:1:{i:0;i:1;}'
        ]);
    }
}
