<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 120);
            $table->integer('parent_id')->default(0);
            $table->string('logo')->default('');
            $table->text('desription_full', 4000);//не больше 4000 символов
            $table->string('desription_short');
            $table->integer('company_id');
            $table->integer('charts_id');
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
        Schema::dropIfExists('dots');
    }
}
