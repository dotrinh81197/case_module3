<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {

        $table->id();
        $table->unsignedBigInteger('product_id');
        $table->string('full_name');
        $table->string('email');
        $table->string('phone');
        $table->string('address');
        $table->integer('gender');
        $table->date('dob');
        $table->string('cmnd');
        $table->string('job');
        $table->integer('status');
        $table->unsignedBigInteger('user_id')->nullable();
        $table->foreign('product_id')->references('id')->on('products');
        $table->foreign('user_id')->references('id')->on('users');
        });
       

    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
