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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->index()->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('sex');
            $table->string('date_of_birth')->nullable();
            $table->string('profile_pic', 2048)->nullable();
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
};
