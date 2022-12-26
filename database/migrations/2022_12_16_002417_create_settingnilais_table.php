<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingnilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settingnilais', function (Blueprint $table) {
            $table->id();

            $table->string('a1')->nullable();
            $table->string('bobot1')->nullable();
            $table->string('type1')->nullable();

            $table->string('a2')->nullable();
            $table->string('bobot2')->nullable();
            $table->string('type2')->nullable();

            $table->string('a3')->nullable();
            $table->string('bobot3')->nullable();
            $table->string('type3')->nullable();

            $table->string('a4')->nullable();
            $table->string('bobot4')->nullable();
            $table->string('type4')->nullable();

            $table->string('a5')->nullable();
            $table->string('bobot5')->nullable();
            $table->string('type5')->nullable();

            $table->string('a6')->nullable();
            $table->string('bobot6')->nullable();
            $table->string('type6')->nullable();

            $table->string('a7')->nullable();
            $table->string('bobot7')->nullable();
            $table->string('type7')->nullable();

            $table->string('a8')->nullable();
            $table->string('bobot8')->nullable();
            $table->string('type8')->nullable();

            $table->string('a9')->nullable();
            $table->string('bobot9')->nullable();
            $table->string('type9')->nullable();

            $table->string('a10')->nullable();
            $table->string('bobot10')->nullable();
            $table->string('type10')->nullable();

            $table->string('a11')->nullable();
            $table->string('bobot11')->nullable();
            $table->string('type11')->nullable();

            $table->string('a12')->nullable();
            $table->string('bobot12')->nullable();
            $table->string('type12')->nullable();

            $table->string('a13')->nullable();
            $table->string('bobot13')->nullable();
            $table->string('type13')->nullable();

            $table->string('a14')->nullable();
            $table->string('bobot14')->nullable();
            $table->string('type14')->nullable();

            $table->string('a15')->nullable();
            $table->string('bobot15')->nullable();
            $table->string('type15')->nullable();

            $table->string('a16')->nullable();
            $table->string('bobot16')->nullable();
            $table->string('type16')->nullable();

            $table->string('a17')->nullable();
            $table->string('bobot17')->nullable();
            $table->string('type17')->nullable();

            $table->string('a18')->nullable();
            $table->string('bobot18')->nullable();
            $table->string('type18')->nullable();

            $table->string('a19')->nullable();
            $table->string('bobot19')->nullable();
            $table->string('type19')->nullable();

            $table->string('a20')->nullable();
            $table->string('bobot20')->nullable();
            $table->string('type20')->nullable();

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
        Schema::dropIfExists('settingnilais');
    }
}
