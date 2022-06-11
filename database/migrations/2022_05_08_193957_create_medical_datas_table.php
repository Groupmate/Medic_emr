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
        Schema::create('medical_datas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospital_id');
            $table->json('symptom');
            $table->json('diagnosis_info');
            $table->json('numerical_info');
            $table->string('description');
            $table->json('picture');
            $table->json('disease');
            $table->foreignId('patient_id');  
            $table->foreignId('user_id');  
            $table->foreignId('medical_drug_id');   
            $table->timestamps();


            // $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            // $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('medical_drug_id')->references('id')->on('medical_drug')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_datas');
    }
};
