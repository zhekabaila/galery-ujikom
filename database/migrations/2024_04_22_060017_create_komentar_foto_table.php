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
        Schema::create('komentar_foto', function (Blueprint $table) {
            $table->id('komentar_id');
            $table->text('isi_komentar');
            $table->foreignId('foto_id')->references('foto_id')->on('foto')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignId('user_id')->nullable()->references('user_id')->on('user')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggal_komentar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_foto');
    }
};
