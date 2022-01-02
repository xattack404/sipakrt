<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengaduan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('pelapor_id')->index();
            $table->foreignId('kategori_id')->index();
            $table->string('judul', 30);
            $table->string('lokasi', 100);
            $table->longText('deskripsi');
            $table->text('gambar');
            $table->string('status', 10);
            $table->longText('jawaban');
            $table->foreignId('rating_id')->index();
            $table->longText('komentar');
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
        Schema::dropIfExists('pengaduan');
    }
}
