<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->unsignedInteger('scheduling_id');
            $table->unsignedInteger('student_id');
            $table->date('date');
            $table->decimal('amount', 8, 2);
            $table->string('voucher_payment')->nullable();
            

            $table->foreign('scheduling_id')->references('scheduling_id')->on('schedules');
            $table->foreign('student_id')->references('student_id')->on('students');

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
        Schema::dropIfExists('payments');
    }
}
