<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsinyasiProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_konsinyasi',
        'id_produk',
        'stok',
        'tgl_konsinyasi'
    ];

    protected $table = 'konsinyasiproduk';
}
