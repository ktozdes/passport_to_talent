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
            $table->string('middlename');
            $table->text('bio');
            $table->string('city');
            $table->string('phone');
            
            $table->string('education');
            $table->text('education_description');
            
            $table->string('immigration_status');
            $table->boolean('immigration_seeking');
            
            $table->string('skills');
            $table->text('skills_description');

            $table->string('employment_industry');

            $table->text('previous_positions');

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
