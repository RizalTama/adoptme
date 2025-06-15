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
        Schema::create('adopsi', function (Blueprint $table) {
            $table->id('adopsi_id');
            $table->unsignedBigInteger('hewan_id');  // Must match type of hewan_id in hewan table
            $table->foreign('hewan_id')
                  ->references('hewan_id')
                  ->on('hewan')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('pengguna_id');
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->enum('status', ['Menunggu Konfirmasi', 'Disetujui', 'Ditolak'])->nullable();
            $table->timestamps();  // Laravel secara otomatis menambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopsi');
    }
};
