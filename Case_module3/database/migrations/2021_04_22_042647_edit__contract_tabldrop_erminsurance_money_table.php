<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditContractTabldropErminsuranceMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('terms');
        Schema::dropIfExists('insurance_money');

        Schema::table('contracts', function (Blueprint $table) {
            $table->integer('term');
            $table->decimal('insurance_money',19,4);
            $table->decimal('fee_recurring',19,4);
           
           
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
