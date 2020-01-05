<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourcases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id')->nullable();
            $table->integer('price')->nullable();
            $table->string('place')->nullable();
            $table->string('tourname')->nullable();
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
        Schema::drop('tourcases');
    }
}
