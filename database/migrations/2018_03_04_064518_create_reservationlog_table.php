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
            $table->increments('id');
            $table->string('res_number');
            $table->string('pc_name',100);
            $table->dateTime('starttime');
            $table->dateTime('endtime');
            $table->string('student',60);
            $table->tinyInteger('active')->default(1);
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
