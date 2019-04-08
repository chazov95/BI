<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDotTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dot_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dot_id');
            $table->integer('responsible_id'); //ответственный
            $table->integer('company_id');
            $table->string('name', 200);
            $table->text('description', 4000);
            $table->date('deadline');
            $table->string('status')->default('1');//на каком этапе находится
            $table->integer('autor_id');//кто создал 
            $table->integer('from_user_id');// задача создана на основании идеи покупателя
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dot_tasks');
    }
}
