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
        Schema::create('bedassignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreignId('block_id');
            $table->foreignId('room_id');
            $table->foreignId('bed_id');
            $table->date('allotment_time');
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
        Schema::dropIfExists('bedassignments');
    }
};
