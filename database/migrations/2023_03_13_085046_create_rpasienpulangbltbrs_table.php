<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpasienpulangbltbrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpasienpulangbltbrs', function (Blueprint $table) {
            $table->id();
            $table->integer('no_rm');
            $table->string('nama');
            $table->date('tgllahir');
            $table->enum('jeniskelamin',['L','P']);
            $table->string('ruang');
            $table->string('kelas');
            $table->date('tglmasuk');
            $table->date('tglkeluar');
            $table->enum('doktermerawat',['Ratna Kartini','Rr Noverita','Ahmad Zakky']);
            $table->text('diagnosamasuk');
            $table->text('indikasirawat');
            $table->text('diagnosakeluar');
            $table->text('kodeicd_10');
            $table->text('komplikasi');
            $table->text('komorbid');
            $table->enum('tindakan',['O2 Nasal','O2 JR','NCO PUFF','Transfusi','Foto Therapi']);
            $table->date('tgldilakukan');
            $table->text('kodeicd_9cm');
            $table->text('keluhanutama')->nullable();
            $table->text('gejalapenyerta')->nullable();
            $table->text('penyakitdahulu');
            $table->text('bb');
            $table->text('tb');
            $table->enum('as1',['1','2','3','4','5','6','7','8','9','10']);
            $table->enum('as5',['1','2','3','4','5','6','7','8','9','10']);
            $table->enum('ds',['0','1','2','3','4','5','6','7','8']);
            $table->enum('anus',['Ada','Tidak Ada']);
            $table->text('cacat');
            $table->enum('kreamer',['I','II','III','IV','V']);
            $table->enum('talipusar',['Segar','Layu','Lepas Pusar']);
            $table->enum('ketuban',['Jernih','Keruh','Darah','Meconceal']);
            $table->enum('lahir',['SC','Spontan','VE','Forceps']);
            $table->enum('rujukan',['Datang Sendiri','RS Lain','BPS','Puskesmas Setempat']);
            $table->text('pemeriksaanpenunjang')->nullable();
            $table->text('laboratorium')->nullable();
            $table->text('pencintraandiagnostik')->nullable();
            $table->text('lainnya')->nullable();
            $table->text('konsultasi')->nullable();
            $table->text('obatselamarawat');
            $table->text('kondisisaatpulang');
            $table->text('obatpulang')->nullable();
            $table->enum('kontrolulang',['Poli Anak RSUD Tuban','Puskesmas Setempat','Dokter Spesialis Setempat']);
            $table->date('tglkontrol');
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
        Schema::dropIfExists('rpasienpulangbltbrs');
    }
}
