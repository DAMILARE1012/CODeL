<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olevels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('exam')->nullable();
            $table->string('exam2')->nullable();
            $table->text('subjects');
            $table->text('grades');
            $table->string('exam_number');
            $table->string('exam_year');
            $table->string('exam_number2')->nullable();
            $table->string('exam_year2')->nullable();
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
        Schema::dropIfExists('olevels');
    }
}
