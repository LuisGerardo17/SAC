<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('person_id');
            $table->string('identification_card');
            $table->string('name_one');
            $table->string('name_two')->nullable();
            $table->string('last_name');
            $table->string('mother_last_name');
            $table->string('cell_phone');
            $table->string('house_number');
            $table->string('main_street');
            $table->string('secondary_street')->nullable();
            $table->string('province');
            $table->string('canton');
            $table->string('sector');

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
        Schema::dropIfExists('people');
    }
}
