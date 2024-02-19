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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_diamond')->nullable(false)->index();
            $table->unsignedBigInteger('id_user')->nullable(false)->index();
            $table->enum('status', ['not paid','paid','cancelled'])->nullable(false)->default('not paid');
            $table->timestamp('tanggal_pesanan')->nullable(false);
            $table->foreign('id_diamond')->references('id')->on('diamond')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
