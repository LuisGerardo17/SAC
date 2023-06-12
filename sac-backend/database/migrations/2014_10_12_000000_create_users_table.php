<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('mail');
            $table->string('password');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('person_id');
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->foreign('person_id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
                  ->references('person_id')->on('people');

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
        Schema::dropIfExists('users');
    }
}
