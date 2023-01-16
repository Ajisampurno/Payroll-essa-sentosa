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
            $table->integer('s1')->nullable()->default(0);
            $table->integer('s2')->nullable()->default(0);
            $table->integer('s3')->nullable()->default(0);
            $table->integer('s4')->nullable()->default(0);
            $table->integer('s5')->nullable()->default(0);
            $table->integer('s6')->nullable()->default(0);
            $table->integer('s7')->nullable()->default(0);
            $table->integer('s8')->nullable()->default(0);
            $table->integer('s9')->nullable()->default(0);
            $table->integer('s10')->nullable()->default(0);
            $table->integer('s11')->nullable()->default(0);
            $table->integer('s12')->nullable()->default(0);
            $table->integer('s13')->nullable()->default(0);
            $table->integer('s14')->nullable()->default(0);
            $table->integer('s15')->nullable()->default(0);
            $table->integer('s16')->nullable()->default(0);
            $table->integer('s17')->nullable()->default(0);
            $table->integer('s18')->nullable()->default(0);
            $table->integer('s19')->nullable()->default(0);
            $table->integer('s20')->nullable()->default(0);
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
