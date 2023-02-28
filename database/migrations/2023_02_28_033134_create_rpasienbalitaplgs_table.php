<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpasienbalitaplgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpasienbalitaplgs', function (Blueprint $table) {
            $table->id();
            $table->integer('no_rm');
            $table->string('nama');
            $table->string('tgllahir');
            $table->enum('jeniskelamin',['L','P']);
            $table->string('ruang');
            $table->string('kelas');
            $table->string('tglmasuk');
            $table->string('tglkeluar');
            $table->string('doktermerawat');
            $table->string('diagnosamasuk');
            $table->string('indikasirawat');
            $table->string('diagnosakeluar');
            $table->string('kodeicd_10');
            $table->string('komplikasi');
            $table->string('komorbid');
            $table->string('tindakan');
            $table->string('tgldilakukan');
            $table->string('kodeicd_9cm');
            $table->string('keluhanutama');
            $table->string('gejalapenyerta');
            $table->string('penyakitdahulu');
            $table->string('pemeriksaanfisik');
            $table->string('pemeriksaanpenunjang');
            $table->string('laboratorium');
            $table->string('pencintraandiagnostik');
            $table->string('lainnya');
            $table->string('konsultasi');
            $table->string('obatselamarawat');
            $table->string('kondisisaatpulang');
            $table->string('obatpulang');
            $table->string('kontrolulang');
            $table->string('bawarsbila');
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
        Schema::dropIfExists('rpasienbalitaplgs');
    }
}
