<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'pengguna_id';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'alamat',
        'telepon',
        'role', // admin, pengguna
    ];
    public $timestamps = true;

    public function adopsi()
    {
        return $this->hasMany(Adopsi::class, 'pengguna_id', 'pengguna_id');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'pengguna_id', 'pengguna_id');
    }
    public function hewan()
    {
        return $this->hasMany(Hewan::class, 'pengguna_id', 'pengguna_id');
    }
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'pengguna_id', 'pengguna_id');
    }
}
