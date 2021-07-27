<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('Name');
            $table->string('Phone');
            $table->string('Email');
            $table->string('City');
            $table->string('Education');
            $table->unsignedBigInteger('status')->unsigned();
            $table->timestamps();
        });
        Schema::table('admissions', function (Blueprint $table) {
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
        Schema::dropIfExists('admissions');
    }
}
