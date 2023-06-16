<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->integer('nip');
            $table->integer('datangawal')->nullable();
            $table->integer('ontimemasuk')->nullable();
            $table->integer('datangtelat')->nullable();
            $table->integer('pulangawal')->nullable();
            $table->integer('ontimepulang')->nullable();
            $table->integer('pulangtelat')->nullable();
            $table->integer('sakit')->nullable();
            $table->integer('cuti')->nullable();
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
        Schema::dropIfExists('nilais');
    }
}
