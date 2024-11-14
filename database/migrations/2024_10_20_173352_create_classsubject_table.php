<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('classsubject', function (Blueprint $table) {
        $table->unsignedBigInteger('subjectID');
        $table->unsignedBigInteger('classID');
        $table->unsignedBigInteger('teacherID');
        $table->timestamp('date')->useCurrent();
        $table->primary(['subjectID', 'classID']); // Composite primary key
        $table->foreign('subjectID')->references('subjectID')->on('subjects')->onDelete('cascade');
        $table->foreign('classID')->references('classID')->on('classes')->onDelete('cascade');
        $table->foreign('teacherID')->references('id')->on('teachers')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('classsubject');
}

};
