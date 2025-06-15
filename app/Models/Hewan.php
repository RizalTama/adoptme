<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    // Tentukan tabel yang digunakan
    protected $table = 'hewan';
    
    // Tentukan primary key jika tidak menggunakan default 'id'
    protected $primaryKey = 'hewan_id';  // Pastikan primary key sesuai dengan yang ada di migrasi
    
    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'jenis',
        'usia',
        'jenis_kelamin',
        'deskripsi',
        'gambar',
        'status'
    ];

    // Tentukan tipe data untuk beberapa kolom
    protected $casts = [
        'jenis_kelamin' => 'string',  // Pastikan 'jenis_kelamin' adalah string
        'status' => 'string',         // Pastikan 'status' adalah string
        'usia' => 'integer',         // Pastikan 'usia' adalah integer
    ];

    // Optional: Menambahkan jika kamu menggunakan timestamps otomatis
    public $timestamps = true;
}
