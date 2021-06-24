<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->default(1);
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('dob');
            $table->string('country');
            $table->string('state');
            $table->string('program');
            $table->string('phone');
            $table->string('count');
            $table->boolean('admission_accepted')->nullable();
            $table->boolean('admission_status')->default(0);
            $table->string('academic_session')->nullable();
            $table->timestamp('admission_date')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
