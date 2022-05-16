<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('national_id')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone_no');
            $table->string('sex');
            $table->dateTime('date_of_birth');
            $table->string('profile_picture', 2048)->nullable();
            $table->string('religion')->nullable(); 
            $table->string('blood_group')->nullable(); 
            $table->string('region');
            $table->string('zone')->nullable();
            $table->string('city')->nullable();
            $table->string('woreda')->nullable();
            $table->string('kebele')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
