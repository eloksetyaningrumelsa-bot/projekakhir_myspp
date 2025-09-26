<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'tb_pembayaran'; // sesuaikan dengan nama tabel di DB

    protected $fillable = [
        'nama',
        'tagihan',
        'tanggal_pembayaran',
        'jumlah_bayar',
        'status',
    ];

    public $timestamps = false; // agar tidak error
}
