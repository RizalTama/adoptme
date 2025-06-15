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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->unsignedBigInteger('pengguna_id');  // Must match the type of id in pengguna table
            $table->foreign('pengguna_id')
                  ->references('pengguna_id')
                  ->on('pengguna')
                  ->onDelete('cascade');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['Pending', 'Selesai', 'Dibatalkan'])->default('Pending');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
