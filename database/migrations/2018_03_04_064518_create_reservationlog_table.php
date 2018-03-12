<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservationlog', function (Blueprint $table) {
            $table->string('res_number');
            $table->string('pc_name',100)->nullable();
            $table->dateTime('starttime')->nullable();
            $table->dateTime('endtime')->nullable();
            $table->string('student',60)->nullable();
            $table->tinyInteger('active')->default(0);
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
        Schema::dropIfExists('reservationlog');
    }
}
