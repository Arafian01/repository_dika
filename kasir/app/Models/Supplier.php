<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_konsinyasi',
        'supplier',
        'no_hp',
        'alamat'
    ];

    protected $table = 'supplier';
}
