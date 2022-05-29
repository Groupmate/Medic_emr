<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('middelname');
            $table->string('doctor_id');             //fk
            $table->string('orgn_id')->nullable();   //fk 1 - M
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('sex');
            $table->string('phone');
            $table->string('date_of_birth')->nullable();
            $table->string('profile_pic', 2048)->nullable();
            $table->string('role')->nullable();         //fk manytomany
            $table->string('department')->nullable();
            $table->string('address');
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
        Schema::dropIfExists('staff');
    }
}


