<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('image');
            $table->string('City');
            $table->string('Country');
            $table->string('DOB');
            $table->unsignedBigInteger('status')->unsigned();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('status')->references('id')->on('statuses')->onDelete('cascade');
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
