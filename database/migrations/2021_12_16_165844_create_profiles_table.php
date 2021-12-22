<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('nama_ktp');
            $table->text('nama_absen');
            $table->integer('nip')->unique();
            $table->integer('pin')->unique();
            $table->bigInteger('no_ktp')->unique();
            $table->date('ttl');
            $table->text('agama');
            $table->text('alamat');
            $table->text('referensi');
            $table->date('aktiv_mulai');
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
        Schema::dropIfExists('profiles');
    }
}
