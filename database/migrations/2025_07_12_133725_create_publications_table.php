<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author')->nullable();       // ✅ Kolom penulis
            $table->string('file_path');
            $table->string('isbn')->nullable();         // ✅ ISBN (untuk buku)
            $table->string('issn')->nullable();         // ✅ ISSN (untuk jurnal)
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->date('published_at');
            $table->text('description')->nullable();    // ✅ Deskripsi karya
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
