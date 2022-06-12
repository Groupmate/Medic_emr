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
            $table->json('symptom')->nullable();
            $table->json('diagnosis_info')->nullable();
            $table->json('numerical_info')->nullable();
            $table->string('description')->nullable();
            $table->json('picture')->nullable();
            $table->json('disease')->nullable();
            $table->foreignId('patient_id')->nullable();  
            $table->foreignId('user_id');     
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
        Schema::dropIfExists('medical_datas');
    }
};
