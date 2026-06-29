<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();

            $table->foreignId('kategori_id')
                ->constrained('kategori_berita')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('judul');
            $table->string('slug')->unique();

            $table->string('thumbnail')->nullable();

            $table->text('ringkasan')->nullable();

            $table->longText('isi');

            $table->unsignedInteger('views')->default(0);

            $table->boolean('is_featured')->default(false);

            $table->enum('status', ['draft', 'publish'])->default('draft');

            $table->timestamp('published_at')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
