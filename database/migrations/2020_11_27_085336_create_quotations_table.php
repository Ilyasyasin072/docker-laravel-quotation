<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('fabric_name');
            $table->string('fabric_desc');
            $table->integer('target_width');
            $table->integer('target_gsm');
            $table->integer('commision_to_agent');
            $table->integer('customer_id');
            $table->date('offer_date');
            $table->integer('grey_cost');
            $table->integer('price');
            $table->string('agent');
            $table->integer('transport');
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
        Schema::dropIfExists('quotations');
    }
}
