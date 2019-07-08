<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik',16)->unique();
            $table->string('nama');
            $table->string('jenis_kelamin',9);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('perkawinan');
            $table->string('pekerjaan');
            $table->char('rt',2);
            $table->char('rw',2);
            $table->string('kewarganegaraan');
            $table->string('status')->default('Hidup');
            $table->boolean('deleted_at')->default(false);
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
        Schema::dropIfExists('penduduks');
    }
}
