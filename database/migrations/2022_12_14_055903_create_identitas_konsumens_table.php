<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasKonsumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_konsumens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('umur');
            $table->bigInteger('no_identitas');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('email');
            $table->bigInteger('telpon');
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
        Schema::dropIfExists('identitas_konsumens');
    }
}
