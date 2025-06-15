<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adopsi extends Model
{
    protected $table = 'adopsi';
    protected $primaryKey = 'adopsi_id';
    protected $fillable = [
        'pengguna_id',
        'hewan_id',
        'alamat',
        'status',
    ];
    public function pengguna()
{
    return $this->belongsTo(Pengguna::class, 'pengguna_id', 'pengguna_id');
}

public function hewan()
{
    return $this->belongsTo(Hewan::class, 'hewan_id', 'hewan_id');
}
}
