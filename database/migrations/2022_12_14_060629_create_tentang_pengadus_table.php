<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentangPengadusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentang_pengadus', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_produk');
            $table->string('merek_dagang');
            $table->string('type');
            $table->string('jenis_pengaduan');
            $table->string('saksi');
            $table->date('tanggal');
            $table->time('jam')->nullable();
            $table->string('lokasi');
            $table->string('bukti_bukti');
            $table->string('bukti_pembelian');
            $table->string('material')->nullable();
            $table->string('fisik')->nullable();
            $table->string('psikis')->nullable();
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
        Schema::dropIfExists('tentang_pengadus');
    }
}
