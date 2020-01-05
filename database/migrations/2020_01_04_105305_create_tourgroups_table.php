<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourgroups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('reservation_id');
            $table->integer('tourcase_id');
            $table->integer('tourgrouptop');
            $table->integer('tourgrouplow');
            $table->integer('tourgroupdate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourgroups');
    }
}
