<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_assignments_table.php
public function up()
{
    Schema::create('assignments', function (Blueprint $table) {
        $table->id('assignmentID');
        $table->unsignedBigInteger('subjectID');
        $table->unsignedBigInteger('classID');
        $table->unsignedBigInteger('academicID')->nullable();
        $table->integer('totalMarks');
        $table->string('title', 50);
        $table->string('description', 200);
        $table->date('dueDate');
        $table->boolean('status')->default(0);
        $table->timestamps();

        // Foreign key constraints
        $table->foreign('subjectID')->references('id')->on('subjects')->onDelete('cascade');
        $table->foreign('classID')->references('id')->on('classes')->onDelete('cascade');
        $table->foreign('academicID')->references('id')->on('academics')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
