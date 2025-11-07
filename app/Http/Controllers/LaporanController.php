<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswaList = Siswa::all();
        $laporan = [];

        foreach ($siswaList as $siswa) {
            // Ambil semua pembayaran berdasarkan nama siswa
            $pembayaranSiswa = Pembayaran::where('nama', $siswa->nama)->get();

            $totalTagihan = (float) $pembayaranSiswa->sum('tagihan');
            $totalBayar = (float) $pembayaranSiswa->sum('jumlah_bayar');
            $sisaTagihan = max($totalTagihan - $totalBayar, 0);

            $laporan[] = [
                'nama' => $siswa->nama,
                'alamat' => $siswa->alamat,
                'tagihan' => $totalTagihan,
                'jumlah_bayar' => $totalBayar,
                'sisa_tagihan' => $sisaTagihan,
            ];
        }

        return view('laporan.index', compact('laporan'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
