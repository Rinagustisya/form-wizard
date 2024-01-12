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
            $table->string('no_paspor');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('foto');
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
