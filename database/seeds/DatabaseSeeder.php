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
            'global_permission' => 'superAdmin',
            'theme' => 'default',
            'password' => bcrypt('istfac2007'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'remember_token' => str_random(10),
            
        ]);

DB::table('users')->insert([
            'name' => 'AlexanderCh',
            'email' => 'oitv18@gmail.com',
            'real_name' => 'Александр',
            'real_lastname' => 'Chazov',
            'global_permission' => 'superAdmin',
            'theme' => 'default',
            'password' => bcrypt('istfac2007'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'remember_token' => str_random(10),
            
        ]);


          DB::table('companies')->insert([
            'admin_id' => '1',
            'name' => 'Buisness Intersections',
            'description_full' => 'BI (buisness intersections) - это инструмент для системного анализа точек контакта между бизнесом и людьми ',
            'description_short' => 'BI (buisness intersections) - это инструмент для системного анализа точек контакта между бизнесом и людьми ',
            'logo' => 'img/default/dot.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
            
        ]);

DB::table('companies')->insert([
            'admin_id' => '2',
            'name' => 'Тестовая компания',
            'description_full' => 'Тестовое полное описание для компании. Админом являтся пользователь с id=2',
            'description_short' => 'Краткое описание может быть порой крайне кратким',
            'logo' => 'img/default/dot.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
            
        ]);


           DB::table('companies_users')->insert([
            'company_id' => '1',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
            
        ]);
            DB::table('companies_users')->insert([
            'company_id' => '2',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
            
        ]);
            DB::table('companies_users')->insert([
            'company_id' => '1',
            'user_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
            
        ]);
    }
}
