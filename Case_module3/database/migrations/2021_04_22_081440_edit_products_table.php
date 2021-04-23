<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('image');
           
           
        });
        Schema::table('products', function (Blueprint $table) {
           
            $table->longText('image')->nullable(true);
           
           
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
