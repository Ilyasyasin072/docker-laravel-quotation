<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationDetailYarnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_detail_yarns', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('quotation_id');
            $table->integer('yarn_list_id');
            $table->integer('usage_percentage');
            $table->integer('price');
            $table->string('desc');
            $table->integer('sequence');
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
        Schema::dropIfExists('quotation_detail_yarns');
    }
}
