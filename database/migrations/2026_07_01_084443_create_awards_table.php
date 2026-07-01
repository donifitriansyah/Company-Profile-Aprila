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
        Schema::create('awards', function (Blueprint $table) {
            $table->id();

            // Judul prestasi
            $table->string('title');

            // Nama lembaga / penyelenggara
            $table->string('institution')->nullable();

            // Deskripsi tambahan (opsional)
            $table->text('description')->nullable();

            // Gambar sertifikat / penghargaan
            $table->string('image')->nullable();

            // Urutan tampil di carousel
            $table->integer('order')->default(0);

            // Status tampil atau tidak
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awards');
    }
};
