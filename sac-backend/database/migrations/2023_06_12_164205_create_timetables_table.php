<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->increments('time_id');
            $table->time('available_time');
            $table->date('date');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('teacher_id');
          

            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');

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
        Schema::dropIfExists('timetables');
    }
}
