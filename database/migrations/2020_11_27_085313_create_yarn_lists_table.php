<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYarnListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yarn_lists', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('yarn_aliases');
            $table->integer('ne_count');
            $table->integer('denier_count');
            $table->integer('filament_count');
            $table->string('yarn_name');
            $table->integer('price');
            $table->integer('supplier_id');
            $table->string('another');
            $table->string('desc');
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
        Schema::dropIfExists('yarn_lists');
    }
}
