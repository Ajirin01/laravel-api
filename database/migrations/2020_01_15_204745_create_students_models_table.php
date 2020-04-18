<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_name');
            $table->integer('class_model_id')->unsigned()->index();
            $table->foreign('class_model_id')->references('id')->on('class')->onDelete('cascade');
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
        Schema::dropIfExists('students_models');
    }
}
