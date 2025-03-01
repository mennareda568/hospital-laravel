<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientbookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("doctor");
            $table->string("doctoremail");
            $table->string("department");
            $table->string('days');
            $table->string('time');
            $table->string('patientname');
            $table->string("patientemail");
            $table->string('patientphone');
            $table->string('patientage');
            $table->integer('consultancyfees');
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
        Schema::dropIfExists('patientbookings');
    }
}
