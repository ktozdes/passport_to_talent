<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvidiualJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invidiual_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->bigInteger('job_id')->unsigned();
            $table->bigInteger('individual_id')->unsigned();
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
        Schema::dropIfExists('invidiual_jobs');
    }
}
