<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->string('user_name')->nullable(true);
            $table->string('subject_name')->nullable(true);
            $table->integer('total_marks')->nullable(true);
            $table->integer('total_mcqs')->nullable(true);
            $table->integer('correct_mcqs')->nullable(true);
            $table->integer('fail_mcqs')->nullable(true);
            $table->integer('obtain_marks')->nullable(true);
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
        Schema::dropIfExists('results');
    }
}
