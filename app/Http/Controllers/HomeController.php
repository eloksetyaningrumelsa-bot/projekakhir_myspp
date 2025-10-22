<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;

class HomeController extends Controller
{
    public function index()
    {
        // Hitung jumlah siswa per jenjang
        $tk  = Siswa::where('kelas', 'like', '%TK%')->count();
        $sd  = Siswa::where('kelas', 'like', '%SD%')->count();
        $smp = Siswa::where('kelas', 'like', '%SMP%')->count();
        $smk = Siswa::where('kelas', 'like', '%SMK%')->count();

        // Ambil data pembayaran (nama)
        $pembayaran = Pembayaran::all();

        // Ambil data siswa (alamat & kelas)
        $siswa = Siswa::all();

        // Gabungkan data berdasarkan nama
        $dataGabung = $pembayaran->map(function ($bayar) use ($siswa) {
            $dataSiswa = $siswa->firstWhere('nama', $bayar->nama);

            return [
                'nama'   => $bayar->nama,
                'alamat' => $dataSiswa->alamat ?? '-',
                'kelas'  => $dataSiswa->kelas ?? '-',
                'status' => $bayar->status,
                'id'     => $bayar->id,
            ];
        });

        return view('dashboard', compact('tk', 'sd', 'smp', 'smk', 'dataGabung'));
    }
}
