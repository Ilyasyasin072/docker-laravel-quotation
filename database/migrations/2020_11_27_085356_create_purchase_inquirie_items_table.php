<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseInquirieItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_inquirie_items', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('purchase_inquire_id');
            $table->integer('quotation_id');
            $table->string('color_desc');
            $table->integer('final_price_yard');
            $table->integer('final_price_kg');
            $table->integer('qty_yard');
            $table->integer('qty_kg');
            $table->integer('quotation_price');
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
        Schema::dropIfExists('purchase_inquirie_items');
    }
}
