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
        Schema::create('medical_drugs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('hospital_id');
            $table->string('type');
            $table->string('department');
            $table->string('quantity');
            $table->dateTime('expired_date');
            $table->string('photo');
            $table->string('description');
            $table->string('price');
            $table->timestamps();
             
            // $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_drugs');
    }
};
