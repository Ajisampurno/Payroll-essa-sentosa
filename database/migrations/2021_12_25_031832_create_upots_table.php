<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upots', function (Blueprint $table) {
            $table->id();
            $table->string('periode_dr');
            $table->string('periode_sampai');
            $table->string('nama_ktp');
            $table->string('status');
            $table->integer('saldo_tab')->nullable();
            $table->integer('jml_hadir')->nullable();
            $table->integer('jepret')->nullable();
            $table->integer('harga_karton')->nullable();
            $table->integer('upah');
            $table->integer('pot_jam')->nullable();
            $table->integer('lembur')->nullable();
            $table->integer('tabungan')->nullable();
            $table->integer('asuransi')->nullable();
            $table->integer('antigen')->nullable();
            $table->integer('gembok')->nullable();
            $table->integer('kaos')->nullable();
            $table->integer('kasbon')->nullable();
            $table->integer('bpjskes')->nullable();
            $table->integer('pultok')->nullable();
            $table->integer('abl_tabungan')->nullable();
            $table->integer('total_upah');
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
        Schema::dropIfExists('upots');
    }
}
