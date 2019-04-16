<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')->nullable();
            $table->text('bio')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            
            $table->string('education')->nullable();
            $table->text('education_description')->nullable();
            
            $table->string('immigration_status')->nullable();
            $table->boolean('immigration_seeking')->nullable();
            
            $table->string('skills')->nullable();
            $table->text('skills_description')->nullable();

            $table->string('employment_industry')->nullable();

            $table->text('previous_positions')->nullable();

            $table->bigInteger('residence_state')->unsigned();
            $table->bigInteger('degree_id')->unsigned();
            $table->bigInteger('major_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

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
        Schema::dropIfExists('individuals');
    }
}
