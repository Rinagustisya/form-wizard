<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_paspor');
            $table->string('no_telp');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('email');
            $table->string('username');
            $table->string('foto');
            $table->string('kode_ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penduduks');
    }
};
