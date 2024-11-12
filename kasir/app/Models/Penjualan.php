<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_penjualan',
        'tgl_penjualan',
        'id_konsumen',
        'status_pembelian',
        'user'
    ];

    protected $table = 'penjualan';
}
