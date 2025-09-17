<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'tb_kelas';
    protected $fillable = ['jenis_kelas']; // bukan 'jenis_kelas'

    // ini untuk menyambungkan ke table
    public $timestamps = false; // agar tidak error

}
