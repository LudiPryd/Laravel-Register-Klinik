<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKliniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kliniks', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->char('No_Telepon');
            $table->string('Alamat');
            $table->string('Jenis_Peliharaan');
            $table->date('tgl_kunjungan');
            $table->string('Sesi');
            $table->string('Keluhan');
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
        Schema::dropIfExists('kliniks');
    }
}
