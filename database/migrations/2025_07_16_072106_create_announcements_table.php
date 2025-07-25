<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('announcements', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->date('date'); // Tanggal pengumuman
        $table->enum('status', ['draft', 'published'])->default('draft'); // Status pengumuman
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
