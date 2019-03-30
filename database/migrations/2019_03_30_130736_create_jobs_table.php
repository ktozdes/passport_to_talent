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
            $table->string('position');
            $table->text('job_description');
            $table->string('status');
            
            $table->string('education');
            $table->text('education_description');
            
            $table->string('immigration_offering');
            
            $table->string('skills');
            $table->text('skills_description');

            $table->string('employment_industry');

            $table->string('salary_range');
            $table->text('salary_description');
            $table->text('offered_benefit');

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
