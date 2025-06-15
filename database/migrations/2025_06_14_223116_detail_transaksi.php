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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('detail_transaksi_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('hewan_id');
            $table->integer('jumlah');
            $table->decimal('harga', 10, 2);
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi')->onDelete('cascade');
            $table->foreign('hewan_id')->references('hewan_id')->on('hewan')->onDelete('cascade');
            $table->timestamps();  
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
