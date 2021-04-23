<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodics', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->timestamps();
        });

        Schema::table('contracts', function (Blueprint $table) {

            $table->unsignedBigInteger('periodics_id');
            $table->foreign('periodics_id')->references('id')->on('periodics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodics');
    }
}
