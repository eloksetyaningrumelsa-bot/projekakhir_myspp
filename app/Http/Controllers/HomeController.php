<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas; // pastikan model Kelas sudah dibuat
use App\Models\Siswa;
class HomeController extends Controller
{
    public function index()
    {
        $tk  = Siswa::where('kelas', 'like', '%TK%')->count();
        $sd  = Siswa::where('kelas', 'like', '%SD%')->count();
        $smp = Siswa::where('kelas', 'like', '%SMP%')->count();
        $smk = Siswa::where('kelas', 'like', '%SMK%')->count();

        return view('dashboard', compact('tk', 'sd', 'smp', 'smk'));
    }
}
