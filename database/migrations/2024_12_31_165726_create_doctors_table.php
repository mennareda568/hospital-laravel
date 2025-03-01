<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doc_image')->default("null");
            $table->string('name');
            $table->string('email');
            $table->string('department')->default("null");
            $table->enum('gender',['female','male'])->default("male");
            $table->string('phone')->default("null");
            $table->string('address')->default("cairo");
            $table->integer('age')->default("30");
            $table->string('days')->default("null");
            $table->string('time')->default("null");
            $table->integer('Consultancyfees')->default("300");
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
        Schema::dropIfExists('doctors');
    }
}
