<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('position');
            $table->text('job_description')->nullable();
            $table->string('status');
            
            $table->bigInteger('degree_id')->unsigned();
            $table->text('education_description')->nullable();
            
            $table->bigInteger('immigration_offering_id')->unsigned();
            
            $table->string('skills')->nullable();
            $table->text('skills_description')->nullable();

            $table->string('employment_industry')->nullable();

            $table->string('salary_range');
            $table->text('salary_description')->nullable();
            $table->text('offered_benefit')->nullable();

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();

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
        Schema::dropIfExists('jobs');
    }
}
