<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
    'nama_menu',
    'jenis',
    'harga',
];

public function detailPemesanans()
{
    return $this->hasMany(DetailPemesanan::class);
}

}
