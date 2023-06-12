<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('scheduling_id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('time_id');

            $table->string('modality');
            $table->integer('amount_hours');
            $table->decimal('cost', 8, 2);
            $table->string('conditions');
            $table->boolean('accept_conditions')->default(false);
            $table->string('type_of_pay');


            $table->foreign('level_id')->references('level_id')->on('levels');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            $table->foreign('time_id')->references('time_id')->on('timetables');

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
        Schema::dropIfExists('schedules');
    }
}
