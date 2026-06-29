<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('komentar_berita', function (Blueprint $table) {
            $table->id();

            $table->foreignId('berita_id')
                ->constrained('berita')
                ->cascadeOnDelete();

            $table->string('nama');

            $table->string('email')->nullable();

            $table->text('komentar');

            $table->boolean('is_approved')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('komentar_berita');
    }
};
