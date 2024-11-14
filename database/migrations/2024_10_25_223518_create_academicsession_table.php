<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicsession', function (Blueprint $table) {
            $table->increments('academicID'); // Primary key
            $table->string('academicyear');   // Academic year
            $table->string('term');           // Term
            $table->integer('status')->default(1); // Status, default 1
            $table->timestamp('date')->useCurrent(); // Default timestamp for date

            // You can add indexes or foreign keys here if needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academicsession');
    }
}

