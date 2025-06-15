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
        Schema::create('hewan', function (Blueprint $table) {
            $table->id('hewan_id');  // Use the same type as foreign key
            $table->string('nama', 100);
            $table->string('jenis', 50);
            $table->integer('usia');
            $table->enum('jenis_kelamin', ['Jantan', 'Betina']);
            $table->text('deskripsi')->nullable();
            $table->string('gambar', 255)->nullable();
            $table->enum('status', ['Tersedia', 'Diadopsi'])->default('Tersedia');
            $table->timestamps();  // Laravel secara otomatis menambahkan created_at dan updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewan');
    }
};
