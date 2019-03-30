<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('src');
            $table->string('name');
            $table->string('file_type');
            $table->unsignedInteger('filable_id')->unsigned();
            $table->string('filable_type');
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
        Schema::dropIfExists('filables');
    }
}
