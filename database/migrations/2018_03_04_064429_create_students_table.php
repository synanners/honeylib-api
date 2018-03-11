<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_num',9);
            $table->string('name', 60)->nullable();
            $table->string('course', 20)->nullable();
            $table->time('timein')->nullable();
            $table->time('timeout')->nullable();
            $table->string('img')->nullable();
            $table->dateTime('lastlogin')->nullable();
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
        Schema::dropIfExists('students');
    }
}
