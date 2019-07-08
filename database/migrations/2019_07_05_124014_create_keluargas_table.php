<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('no_kk', 16);
            $table->bigInteger('id_penduduk')->unsigned()->unique();
            $table->string('hubungan_kelurga');
            $table->boolean('deleted_at')->default(false);
            $table->timestamps();

            $table->foreign('id_penduduk')->references('id')->on('penduduks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluargas');
    }
}
