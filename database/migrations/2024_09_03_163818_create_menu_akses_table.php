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
        Schema::create('menu_akses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_menu')->constrained('menu');
            $table->foreignId('id_karyawan')->constrained('karyawans');
            $table->boolean('create');
            $table->boolean('read');
            $table->boolean('update');
            $table->boolean('delete');
            $table->boolean('etc');
            $table->foreignId('created_by')->constrained('karyawans');
            $table->foreignId('updated_by')->constrained('karyawans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_akses');
    }
};
