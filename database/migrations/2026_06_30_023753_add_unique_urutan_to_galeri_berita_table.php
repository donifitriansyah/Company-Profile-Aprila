<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('galeri_berita', function (Blueprint $table) {
            $table->unique(['berita_id', 'urutan']);
        });
    }

    public function down(): void
    {
        Schema::table('galeri_berita', function (Blueprint $table) {
            $table->dropUnique(['berita_id', 'urutan']);
        });
    }
};
