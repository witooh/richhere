<?php

use Illuminate\Database\Migrations\Migration;

class CreateTransaction extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'transaction',
            function ($table) {
                $table->increments('id');
                $table->integer('user_id');
                $table->integer('category_id');
                $table->decimal('amount', 11, 2);
                $table->text('with')->nullable();
                $table->datetime('datetime');
                $table->string('note', 250)->nullable();
                $table->timestamps();

                $table->index('user_id');
                $table->index('category_id');
                $table->index('amount');
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
        Schema::drop('transaction');
    }

}