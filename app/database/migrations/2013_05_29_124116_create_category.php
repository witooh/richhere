<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategory extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'category',
            function ($table) {
                $table->increments('id');
                $table->string('name', 100);
                $table->integer('user_id')->nullable();
                $table->integer('image_id')->nullable();
                $table->timestamps();

                $table->index('user_id');
                $table->index('image_id');
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
        Schema::drop('category');
    }

}