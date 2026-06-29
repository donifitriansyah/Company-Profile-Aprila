<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeri_berita', function (Blueprint $table) {
            $table->id();

            $table->foreignId('berita_id')
                ->constrained('berita')
                ->cascadeOnDelete();

            $table->string('gambar');

            $table->string('caption')->nullable();

            $table->unsignedInteger('urutan')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri_berita');
    }
};
