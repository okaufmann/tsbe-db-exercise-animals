<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHolders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('givenname');
            $table->string('surname');
            $table->string('address');
            $table->integer('zip');
            $table->string('location');
            $table->enum('gender', ['Mr', 'Mrs']);
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
        Schema::drop('holders');
    }
}
