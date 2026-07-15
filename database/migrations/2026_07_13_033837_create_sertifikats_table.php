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
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();

            $table->foreignId('peserta_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('program_pelatihan_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('nomor_sertifikat')->unique();

            $table->uuid('uuid')->unique();

            $table->date('tanggal_terbit');

            $table->string('file_pdf')->nullable();

            $table->enum('status', [
                'Aktif',
                'Dicabut'
            ])->default('Aktif');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikats');
    }
};
