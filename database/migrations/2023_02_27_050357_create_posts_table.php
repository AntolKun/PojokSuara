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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('subjudul');
            $table->date('tanggal');
            $table->string('kategori');
            $table->string('isiartikel');
            $table->boolean('status')->default(true);
            $table->string('staff');
            $table->string('gambar');
            $table->string('tag1');
            $table->string('tag2');
            $table->string('tag3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
