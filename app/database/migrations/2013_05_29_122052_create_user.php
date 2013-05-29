<?php

use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'user',
            function ($table) {
                $table->increments('id');
                $table->string('email', 100);
                $table->string('password', 100);
                $table->string('name', 50);
                $table->boolean('admin')->default(false);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }

}