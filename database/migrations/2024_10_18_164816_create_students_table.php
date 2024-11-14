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
            $table->id('studentID');
            $table->string('firstname', 60);
            $table->string('lastname', 60);
            $table->enum('gender', ['Male', 'Female']);
            $table->string('homeDistrict', 60);
            $table->string('area', 60);
            $table->date('DOB')->nullable();
            $table->date('admissionDate')->nullable();
            $table->unsignedBigInteger('schoolID')->nullable();
            $table->unsignedBigInteger('parentID')->nullable();
            $table->unsignedBigInteger('classID')->nullable();
            $table->timestamps();

            // Foreign key to parents table
            $table->foreign('parentID')->references('parentID')->on('parents')->onDelete('set null');
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
