<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsoftdelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::table('categories', function(Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('products', function(Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('customers', function(Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('consultations', function(Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('contracts', function(Blueprint $table){
            $table->softDeletes();
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
