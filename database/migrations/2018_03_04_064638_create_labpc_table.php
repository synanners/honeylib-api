<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabpcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labpc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pc_name',100)->nullable();
            $table->string('ip_address', 100)->nullable();
            $table->string('in_use', 9)->nullable();
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
        Schema::dropIfExists('labpc');
    }
}
