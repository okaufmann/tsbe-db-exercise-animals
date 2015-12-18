<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnimalMedications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals_medications', function (Blueprint $table) {
            $table->integer('animal_id')->unsigned();
            $table->integer('medication_id')->unsigned();
            $table->primary(['animal_id', 'medication_id']);
        });

        Schema::table('animals_medications', function (Blueprint $table) {
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('CASCADE');
            $table->foreign('medication_id')->references('id')->on('medications')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animals_medications');
    }
}
