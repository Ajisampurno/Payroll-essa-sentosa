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
            $table->text('nama_ktp');
            $table->text('bagian');
            $table->integer('p1');
            $table->integer('p2');
            $table->integer('p3');
            $table->integer('p4');
            $table->integer('p5');
            $table->integer('p6');
            $table->integer('p7');
            $table->integer('p8');
            $table->integer('p9');
            $table->integer('p10');
            $table->integer('terlambat');
            $table->integer('izin');
            $table->integer('bolos');
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
