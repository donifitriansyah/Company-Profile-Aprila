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
        Schema::create('jasas', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->string('slug')->unique();

            $table->text('deskripsi_singkat')->nullable();
            $table->longText('deskripsi');

            $table->string('gambar')->nullable();

            $table->decimal('harga_mulai', 12, 2)->nullable();
            $table->string('satuan_harga')->nullable();

            $table->string('estimasi_pengerjaan')->nullable();
            $table->string('kategori')->nullable();

            $table->string('whatsapp')->nullable();

            $table->boolean('unggulan')->default(false);
            $table->boolean('is_active')->default(true);

            $table->integer('urutan')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasas');
    }
};
