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
        Schema::create('ik', function (Blueprint $table) {
            $table->id('ik_id');
            $table->string('no_PK', 20)->unique();
            // $table->unsignedBigInteger('karyawan_id')->index();
            $table->string('daftar_pekerjaan', 500);
            $table->date('tanggal');
            $table->timestamps();
            $table->foreignId('karyawan_id')->constrained();
            // $table->foreign('karyawan_id')->references('karyawan_id')->on('karyawan')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ik');
    }
};
