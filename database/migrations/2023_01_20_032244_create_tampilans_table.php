<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampilans', function (Blueprint $table) {
            $table->id();
            $table->string('beranda_judul')->nullable();
            $table->string('jdl_beranda_color')->default('#000000');
            $table->string('beranda_kalimat')->nullable();
            $table->string('klmt_beranda_color')->default('#000000');
            $table->string('beranda_gambar')->nullable();
            $table->string('mitra_judul')->nullable();
            $table->string('jdl_mitra_color')->default('#000000');
            $table->string('mitra_kalimat')->nullable();
            $table->string('klmt_mitra_color')->default('#000000');
            $table->string('mitra_gambar')->nullable();
            $table->string('galeri_judul')->nullable();
            $table->string('jdl_galeri_color')->default('#000000');
            $table->string('galeri_kalimat')->nullable();
            $table->string('klmt_galeri_color')->default('#000000');
            $table->string('galeri_gambar')->nullable();
            $table->string('kontak_judul')->nullable();
            $table->string('jdl_kontak_color')->default('#000000');
            $table->string('kontak_kalimat')->nullable();
            $table->string('klmt_kontak_color')->default('#000000');
            $table->string('kontak_gambar')->nullable();
            $table->string('tentang_judul')->nullable();
            $table->string('jdl_tentang_color')->default('#000000');
            $table->string('tentang_kalimat')->nullable();
            $table->string('klmt_tentang_color')->default('#000000');
            $table->string('bg_tentang_color')->default('#000000');
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
        Schema::dropIfExists('tampilans');
    }
}
