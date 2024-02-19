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
        Schema::create('diamond', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_game')->nullable(false)->index();
            $table->integer('jumlah_diamond')->nullable(false);
            $table->integer('harga_diamond')->nullable(false);
            $table->foreign('id_game')->references('id')->on('game')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diamond');
    }
};
