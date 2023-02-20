<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputtypes', function (Blueprint $table) {
            $table->id();
            $table->string('inputtype1')->nullable();
            $table->string('inputtype2')->nullable();
            $table->string('inputtype3')->nullable();
            $table->string('inputtype4')->nullable();
            $table->string('inputtype5')->nullable();
            $table->string('inputtype6')->nullable();
            $table->string('inputtype7')->nullable();
            $table->string('inputtype8')->nullable();
            $table->string('inputtype9')->nullable();
            $table->string('inputtype10')->nullable();
            $table->string('inputtype11')->nullable();
            $table->string('inputtype12')->nullable();
            $table->string('inputtype13')->nullable();
            $table->string('inputtype14')->nullable();
            $table->string('inputtype15')->nullable();
            $table->string('inputtype16')->nullable();
            $table->string('inputtype17')->nullable();
            $table->string('inputtype18')->nullable();
            $table->string('inputtype19')->nullable();
            $table->string('inputtype20')->nullable();
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
        Schema::dropIfExists('inputtypes');
    }
}
