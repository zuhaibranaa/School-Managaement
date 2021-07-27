<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('image');
            $table->string('Course_Name');
            $table->string('Category');
            $table->string('Duration');
            $table->string('Start_Date');
            $table->string('End_Date');
            $table->string('Total_Seats');
            $table->unsignedBigInteger('Status_ID')->unsigned();
            $table->timestamps();
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('Status_ID')->references('id')->on('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
