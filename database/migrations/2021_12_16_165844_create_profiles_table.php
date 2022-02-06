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
            $table->integer('pin')->unique();
            $table->text('no_ktp');
            $table->text('alamat_ktp');
            $table->text('tgl_lahir');
            $table->text('agama');
            $table->text('alamat');
            $table->text('referensi');
            $table->text('aktiv_mulai');
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
