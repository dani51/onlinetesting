<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned()->nullable(true);
//            $table->foreign('subject_id')->references('id')->on('questions');
            $table->string('question_name', 255)->nullable(true);
            $table->string('option_no', 255)->nullable(true);
            $table->integer('question_time')->unsigned()->nullable(true);
            $table->integer('question_type')->unsigned()->nullable(true);
            $table->string('question_answer')->nullable(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
