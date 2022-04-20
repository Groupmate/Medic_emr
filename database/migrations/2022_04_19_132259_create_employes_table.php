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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middel_name');
            $table->string('last_name');
            $table->string('user_id');
            $table->string('organization_id');
            $table->string('email');
            $table->string('password');
            $table->string('age');
            $table->string('sex');
            $table->string('phone');
            $table->string('address');
            $table->date('birth_date');
            $table->string('image');
            $table->string('type');

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
        Schema::dropIfExists('employes');
    }
};
