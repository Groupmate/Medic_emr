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
        Schema::defaultStringLength(191);
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('firstname');
            $table->string('lastname');
            $table->boolean('status');
            $table->string('email')->unique();
            $table ->integer('phone_no');
            $table ->integer('age');
            $table->char('sex',10);
            $table->dateTime('dbirth'); 
            $table->string('profile_photo', 2048)->nullable();
            $table->string('cityname'); 
            $table->string('woreda')->nullable();
            $table->string('zone')->nullable();
            $table->string('region');
            //$table->boolean('active'); 	
            $table->timestamps(); //App\Models\Patient::factory()-> count(2)->create(['user_id =>1']); cl
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
}
