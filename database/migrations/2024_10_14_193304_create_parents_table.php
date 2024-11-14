<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    public function up(): void
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id('parentID');
            $table->string('firstname', 60);
            $table->string('lastname', 60);
            $table->string('username', 60);
            $table->string('email', 80)->unique();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('phoneNumber', 20);
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('religion')->nullable();
            $table->timestamp('creationDate')->useCurrent();
            $table->timestamp('lastLogin')->nullable();
            $table->string('password');
            $table->string('token')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
}
