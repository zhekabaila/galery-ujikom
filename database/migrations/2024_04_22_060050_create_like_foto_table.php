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
        Schema::create('like_foto', function (Blueprint $table) {
            $table->id('like_id');
            $table->foreignId('foto_id')->references('foto_id')->on('foto')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->references('user_id')->on('user')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggal_like');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_foto');
    }
};
