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
            $table->date('tgllahir');
            $table->enum('jeniskelamin',['L','P']);
            $table->string('ruang');
            $table->string('kelas');
            $table->date('tglmasuk');
            $table->date('tglkeluar');
            $table->text('doktermerawat');
            $table->text('diagnosamasuk');
            $table->text('indikasirawat');
            $table->text('diagnosakeluar');
            $table->text('kodeicd_10');
            $table->text('komplikasi');
            $table->text('komorbid');
            $table->text('tindakan');
            $table->date('tgldilakukan');
            $table->text('kodeicd_9cm');
            $table->text('keluhanutama');
            $table->text('gejalapenyerta');
            $table->text('penyakitdahulu');
            $table->text('pemeriksaanfisik');
            $table->text('pemeriksaanpenunjang');
            $table->text('laboratorium');
            $table->text('pencintraandiagnostik');
            $table->text('lainnya');
            $table->text('konsultasi');
            $table->text('obatselamarawat');
            $table->text('kondisisaatpulang');
            $table->text('obatpulang');
            $table->text('kontrolulang');
            $table->text('bawarsbila');
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
