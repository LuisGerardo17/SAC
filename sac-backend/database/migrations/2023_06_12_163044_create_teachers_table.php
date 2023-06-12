<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('person_id');
            $table->string('active')->default(true);


            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('level_id')->references('level_id')->on('levels');
            $table->foreign('person_id')->references('person_id')->on('people');

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
        Schema::dropIfExists('teachers');
    }
}
