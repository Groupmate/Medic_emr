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
        Schema::create('referals', function (Blueprint $table) {
            $table->id(); 	
            $table->bigInteger('patient_id')->unsigned(); 
            $table->date('date');   
            $table->string('diagnosis');	
            $table->bigInteger('refered_by')->unsigned();
            $table->bigInteger('refered_to')->unsigned();  	 
            $table->timestamps();

            $table->foreign('refered_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('refered_to')->references('id')->on('hospitals')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referals');
    }
};
