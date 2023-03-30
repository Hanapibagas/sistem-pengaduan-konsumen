<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('pengadu_id');
            $table->foreignId('diadukan_id');
            $table->foreignId('tentang_diadukan_id');
            $table->foreignId('kronologis_id');
            $table->foreignId('jenis_tuntutan_id');
            $table->foreignId('permintaan_id');
            $table->string('status')->default('Sedang Di Proses');
            $table->longText('keterangan')->default(null);
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
        Schema::dropIfExists('laporans');
    }
}
