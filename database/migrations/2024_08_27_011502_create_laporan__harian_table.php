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
        Schema::create('laporan_Harian', function (Blueprint $table) {
            $table->id('laporan_id');
            $table->unsignedBigInteger('karyawan_id')->index();
            $table->unsignedBigInteger('no_PK')->index();
            $table->string('masalah', 500);
            $table->string('penanganan', 500);
            $table->string('material', 500);
            $table->integer('satuan');
            $table->string('hasil_pengerjaan', 500);
            $table->string('persen')->default(' %');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_Harian');
    }
};
