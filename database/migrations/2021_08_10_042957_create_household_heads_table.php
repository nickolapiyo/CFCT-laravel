<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('household_heads', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('household_id');
        $table->integer('participant_id');
        $table->timestamps();

        $table->foreign('household_id')->references('id')->on('households')->onDelete('cascade');
        $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('household_heads');
    }
}
