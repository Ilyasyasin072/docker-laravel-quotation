<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_lists', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('job_name');
            $table->integer('job_cost');
            $table->integer('job_type_id');
            $table->integer('job_lost');
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
        Schema::dropIfExists('job_lists');
    }
}
