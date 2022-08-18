<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->integer('nip')->unique();
            $table->text('nama_ktp');
            $table->integer('s1')->required();
            $table->integer('s2')->required();
            $table->integer('s3')->required();
            $table->integer('s4')->required();
            $table->integer('s5')->required();
            $table->integer('s6')->required();
            $table->integer('s7')->required();
            $table->integer('s8')->required();
            $table->integer('s9')->required();
            $table->integer('s10')->required();
            $table->integer('s11')->required();
            $table->integer('s12')->required();
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
        Schema::dropIfExists('penilaians');
    }
}
