<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\AcademicSession;

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

            $academicSession = AcademicSession::where('active', 1)->first();

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
            $table->string('admission_session')->default($academicSession->session);
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
