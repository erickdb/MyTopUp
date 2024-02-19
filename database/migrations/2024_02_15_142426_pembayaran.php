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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pesanan')->nullable(false)->index();
            $table->enum('status', ['pending','succes','failed','cancelled'])->nullable(false)->default('pending');
            $table->timestamp('tanggal_pembayaran')->nullable(false);
            $table->foreign('id_pesanan')->references('id')->on('pesanan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
