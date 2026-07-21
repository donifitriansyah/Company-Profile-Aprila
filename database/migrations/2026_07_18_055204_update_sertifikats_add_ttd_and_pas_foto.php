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
        Schema::table('sertifikats', function (Blueprint $table) {

            // Hapus kolom file_pdf
            $table->dropColumn('file_pdf');

            // Tambah kolom tanda tangan
            $table->string('ttd')->nullable()->after('tanggal_terbit');

            // Tambah kolom pas foto peserta
            $table->string('pas_foto')->nullable()->after('ttd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sertifikats', function (Blueprint $table) {

            // Hapus kolom yang ditambahkan
            $table->dropColumn([
                'ttd',
                'pas_foto'
            ]);

            // Kembalikan kolom file_pdf
            $table->string('file_pdf')->nullable()->after('tanggal_terbit');
        });
    }
};
