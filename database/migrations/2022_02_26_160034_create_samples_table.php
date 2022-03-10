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
        Schema::create('samples', function (Blueprint $table) {
            $table->string('UHID');
            $table->timestamps();
            $table->string('DATE');
            $table->string('TIME');
            $table->string('NAME');
            $table->string('GAURDIAN_NAME');
            $table->string('DOB');
            $table->string('RELIGION');
            $table->string('AGE');
            $table->string('MARTIAL_STATUS');
            $table->string('SEX');
            $table->string('ADDRESS');
            $table->string('CITY');
            $table->string('STATE');
            $table->string('PINCODE');
            $table->string('LANDMARK');
            $table->string('MOBILE');
            $table->string('ANNUAL_INCOME');
            $table->string('OCCUPATION');
            $table->string('HEIGHT');
            $table->string('WEIGHT');
            $table->string('BP');
            $table->string('PULSE');
            $table->string('TEMP');
            $table->string('SUGAR');
            $table->string('CHEIF_COMPLAINTS');
            $table->string('DEPARTMENT');
            $table->string('HOSPITAL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samples');
    }
};
