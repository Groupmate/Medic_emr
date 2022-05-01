<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientsses', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middelname'); 
            $table->string('patient_id');
            $table->string('email')->unique()->nullable();
            $table ->integer('phone_no')->nullable();
            $table->string('profil_pic'); 
            $table->date('data_of_birth');
          
            $table->string('religion')->nullable(); 
            $table->string('blood_group')->nullable(); 
            $table->string('cityname')->nullable(); 
            $table->string('kebele')->nullable();
            $table->string('woreda');
            $table->string('zone')->nullable();
            $table->string('region');
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
        Schema::dropIfExists('patientsses');
    }
};
