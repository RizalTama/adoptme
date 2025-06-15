<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'detail_transaksi_id';
    protected $fillable = [
        'transaksi_id',
        'hewan_id',
        'jumlah',
        'harga',
    ];
    public $timestamps = true;
}
