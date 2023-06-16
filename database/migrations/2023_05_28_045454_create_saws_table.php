<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saws', function (Blueprint $table) {
            $table->id();
            $table->integer('nip');
            $table->float('datangawal')->nullable();
            $table->float('ontimemasuk')->nullable();
            $table->float('datangtelat')->nullable();
            $table->float('pulangawal')->nullable();
            $table->float('ontimepulang')->nullable();
            $table->float('pulangtelat')->nullable();
            $table->float('sakit')->nullable();
            $table->float('cuti')->nullable();
            $table->float('nilai1')->nullable();
            $table->float('nilai2')->nullable();
            $table->float('nilai3')->nullable();
            $table->float('nilai4')->nullable();
            $table->float('nilai5')->nullable();
            $table->float('nilai6')->nullable();
            $table->float('nilai7')->nullable();
            $table->float('nilai8')->nullable();
            $table->float('nilai9')->nullable();
            $table->float('nilai10')->nullable();
            $table->float('nilai11')->nullable();
            $table->float('nilai12')->nullable();
            $table->float('nilai13')->nullable();
            $table->float('nilai14')->nullable();
            $table->float('nilai15')->nullable();
            $table->float('nilai16')->nullable();
            $table->float('nilai17')->nullable();
            $table->float('nilai18')->nullable();
            $table->float('nilai19')->nullable();
            $table->float('nilai20')->nullable();
            $table->float('skor')->nullable();
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
        Schema::dropIfExists('saws');
    }
}
