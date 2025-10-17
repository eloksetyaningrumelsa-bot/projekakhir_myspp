<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'tb_kelas';
    protected $fillable = ['jenis_kelas', 'jumlah_siswa'];
    public $timestamps = false;
}
