<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $pembayaran = Pembayaran::all();

        // Total siswa langsung dari tabel siswa
        $totalSiswa = $siswa->count();

        // Gabungkan data siswa dan pembayaran
        $dataGabung = $siswa->filter(function ($s) use ($pembayaran) {
            // Cek apakah siswa ini punya pembayaran
            return $pembayaran->where('nama', $s->nama)->count() > 0;
        })->map(function ($s) use ($pembayaran) {
            // Total tagihan
            $totalTagihan = (float) $pembayaran->where('nama', $s->nama)->sum('tagihan');

            // Total yang sudah dibayar
            $totalBayar = (float) $pembayaran->where('nama', $s->nama)->sum('jumlah_bayar');

            // Sisa tagihan
            $sisaTagihan = max($totalTagihan - $totalBayar, 0);

            // Status
            $status = ($totalTagihan > 0 && $sisaTagihan == 0) ? 'Lunas' : 'Belum Lunas';

            return [
                'id'             => $s->id,
                'nama'           => $s->nama,
                'alamat'         => $s->alamat,
                'kelas'          => $s->kelas,
                'jumlah_cicilan' => $totalBayar,
                'sisa_tagihan'   => $sisaTagihan,
                'status'         => $status,
            ];
        });


        // Hitung jumlah siswa lunas dan belum lunas
        $jumlahLunas = $dataGabung->where('status', 'Lunas')->count();
        $jumlahBelumLunas = $dataGabung->where('status', 'Belum Lunas')->count();

        // Pendapatan bulan ini
        $now = Carbon::now();
        $pendapatanBulanIni = Pembayaran::whereYear('tanggal_pembayaran', $now->year)
            ->whereMonth('tanggal_pembayaran', $now->month)
            ->sum('jumlah_bayar');

        // Kirim ke view
        return view('dashboard', compact(
            'totalSiswa',
            'jumlahLunas',
            'jumlahBelumLunas',
            'pendapatanBulanIni',
            'dataGabung'
        ));
    }
}
