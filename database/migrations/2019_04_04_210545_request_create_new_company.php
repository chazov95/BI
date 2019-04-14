<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RequestCreateNewCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_company_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->string('name');
            $table->text('description');
            $table->string('city')->default('');
            $table->string('logo')->default('');
            $table->string('adress')->default('');
            $table->string('phone')->default('');
            $table->string('site')->default('');
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
         Schema::dropIfExists('new_company_requests');    }
}
