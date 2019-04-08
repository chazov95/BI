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
            'password' => bcrypt('Aqwerty123'),
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
            'password' => bcrypt('Aqwerty123'),
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

//три главных тестовых точки
DB::table('dots')->insert([
            'name' => 'Сайт bi.ru.net',
            'description_full' => 'Это главная точка контакта в нашем проекте. Я вижу в ней несколько путей развития: наращивать функционал (это сейчас важнее всего), улучшать внешний вид, тестировать на баги и улучшать способы обратной связи. Ну и да: интегрировать сайт со всем, что интегрируется. например с Б24',
            'description_short' => 'Подточки: формы обратной связи, главная страница, чат поддержки',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'company_id' => '1',
            'chart_id' => '1',
            ]);

DB::table('dots')->insert([
            'name' => 'Телефонные звонки',
            'description_full' => 'Телефонные звонки бывают двух видов: холодные, когда мы предлагаем бизнесу бесплатно поучаствовать зарегистрирвоаться и работать с нашим сайтом, и горячие (обратные), когда мы звоним человеку, который уже проявил интерес. Вторые ценнее',
            'description_short' => 'Делится на горячие и холодные звонки',
            'company_id' => '1',
            'chart_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);

DB::table('dots')->insert([
            'name' => 'тестовая точка',
            'description_full' => 'тестовое полное описание',
            'description_short' => 'Тестовое коротко описание',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'company_id' => '2',
            'chart_id' => '3',
            ]);

//Три подчиненных точки
DB::table('dots')->insert([
            'name' => 'Обратная связь',
            'description_full' => 'Нам нужны следующие формы обратной связи: чат от битрикса, возможность оставить отзыв во время оплаты поддержки, кнопка "обратная связь как на Битриксе"',
            'description_short' => 'чат, кнопка \"обратная связь\", отзыв во время поддержки',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'company_id' => '1',
            'chart_id' => '1',
            'parent_id'=>'1',
            ]);

DB::table('dots')->insert([
            'name' => 'Интерфейс',
            'description_full' => 'Нужно сделать дополнительный канбан по юзерам, а не по точкам. Это нужно вынести в конкретную задачу. А так это будет самая нагруженная точка. Надо будет разбить ее на дочерние',
            'description_short' => 'Все, что с касается функционала сайта bi.ru.net',
            'company_id' => '1',
            'chart_id' => '2',
            'parent_id'=>'1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);

DB::table('dots')->insert([
            'name' => 'Холодные звонки',
            'description_full' => 'Нужно разработать скрипты, определиться с базой и много еще всего',
            'description_short' => 'Все, что касается звонком людям, не проявлявшим интерес',
            'company_id' => '1',
            'chart_id' => '1',
            'parent_id'=>'2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);

    }
}
