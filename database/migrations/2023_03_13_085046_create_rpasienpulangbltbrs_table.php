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
            $table->string('nik');
            $table->string('nama_panggilan');
            $table->enum('sex',['L','P']);
            $table->string('agama');
            $table->date('tgll_ahir');
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');

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
