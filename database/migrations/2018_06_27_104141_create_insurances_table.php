<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nameCreator');
            $table->string('familyCreator');
            $table->string('typeCar');
            $table->string('nameCar');
            $table->string('modelCar');
            $table->integer('createdYear');
            $table->integer('number');
            $table->integer('VIN');
            $table->date('startInsurance');
            $table->date('endInsurance');
            $table->integer('price');
            $table->timestamps();
        });

        Schema::create('insurance_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('insurance_id')->unsigned();
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('cascade');

            $table->primary(['user_id' , 'insurance_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurances');
    }
}
