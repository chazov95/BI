<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->default('line');
            $table->string('title');
            $table->string('company_id');
            $table->boolean('up_or_down')->default(true);// true - это возрастание. повышение или понижение показателя будет  считаться успехом
            $table->text('desription');
            $table->string('data');//двумерный массив значение
            $table->string('y_name');
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
        Schema::dropIfExists('charts');
    }
}
