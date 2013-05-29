<?php

use Illuminate\Database\Migrations\Migration;

class CreateImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create(
            'image',
            function ($table) {
                $table->increments('id');
                $table->text('path', 100);
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
        Schema::drop('image');
    }

}