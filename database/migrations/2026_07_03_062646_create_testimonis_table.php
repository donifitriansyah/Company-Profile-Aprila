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
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->string('jabatan')->nullable();
            $table->string('instansi')->nullable();

            $table->string('foto')->nullable();

            $table->text('isi_testimoni');

            $table->tinyInteger('rating')->default(5);

            $table->integer('urutan')->default(0);

            $table->boolean('is_active')->default(true);

            $table->date('tanggal_testimoni')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
