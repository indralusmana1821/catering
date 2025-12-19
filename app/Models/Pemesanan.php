<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
    'pelanggan_id',
    'tanggal_pesanan',
    'tanggal_acara',
    'total_harga',
    'status',
];

public function pelanggan()
{
    return $this->belongsTo(Pelanggan::class);
}

public function detailPemesanans()
{
    return $this->hasMany(DetailPemesanan::class);
}

}
