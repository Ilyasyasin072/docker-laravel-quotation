<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationDetailJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_detail_jobs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('quotation_id');
            $table->integer('job_list_id');
            $table->integer('job_cost');
            $table->integer('job_lost');
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
        Schema::dropIfExists('quotation_detail_jobs');
    }
}
