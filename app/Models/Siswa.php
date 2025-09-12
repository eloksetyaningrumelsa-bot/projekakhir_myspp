<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'tb_siswa';

    // Tambahkan ini
    protected $fillable = ['nama','alamat','kelas','orang_tua','no_telepon'];
    // ini untuk menyambungkan ke table
    public $timestamps = false; // agar tidak error
}
