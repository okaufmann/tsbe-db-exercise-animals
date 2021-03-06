<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnimals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('race_id');
            $table->integer('holder_id')->unsigned();
            $table->string('name');
            $table->enum('sex', ['m', 'f']);
            $table->integer('birthday');
            $table->timestamps();
        });

        Schema::table('animals', function (Blueprint $table) {
            $table->foreign('holder_id')->references('id')->on('holders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animals');
    }
}
