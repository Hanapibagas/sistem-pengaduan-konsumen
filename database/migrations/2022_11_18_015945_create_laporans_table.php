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
            $table->foreignId('pengadu_id')->constrained('pengadus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('diadukan_id')->constrained('diadukans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tentang_diadukan_id')->constrained('tentang_pengaduans')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status')->default('Sedang Di Periksa');
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
