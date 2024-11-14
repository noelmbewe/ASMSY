<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('classID');
            $table->string('className', 60);
            $table->unsignedBigInteger('teacherID')->nullable();
            $table->timestamp('date')->useCurrent();
            $table->timestamps();
            
            $table->foreign('teacherID')->references('id')->on('teachers')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('class');
    }
}
