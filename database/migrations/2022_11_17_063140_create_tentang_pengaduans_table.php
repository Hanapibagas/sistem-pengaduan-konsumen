<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentangPengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentang_pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pengaduan');
            $table->date('tanggal');
            $table->time('jam')->nullable();
            $table->string('lokasi');
            $table->string('bukti_pembelian');
            $table->string('bukti_saksi');
            $table->string('barang_bukti');
            $table->string('bentuk_kerugian');
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
        Schema::dropIfExists('tentang_pengaduans');
    }
}
