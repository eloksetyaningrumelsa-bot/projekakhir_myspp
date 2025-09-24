<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // mengambil seluruh data dari tb_siswa
        $pembayaran = Pembayaran::all();
        // melakukan pasing data ke view index
        return view('datapembayaran.index', ['pembayaran' => $pembayaran]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('datapembayaran.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nama'          => 'required|string|max:100',
        'tagihan'       => 'required',
        'tanggal_pembayaran'     => 'required',
        'jumlah_bayar'  => 'required',
        ]);

        // simpan ke database
         Pembayaran::create([
        'nama'          => $request->nama,
        'tagihan'       => $request->tagihan,
        'tanggal_pembayaran'     => $request->tanggal_pembayaran,
        'jumlah_bayar'  => $request->jumlah_bayar,
    ]);

         return redirect('/datapembayaran')->with('success', 'Data pembayaran berhasil ditambahkan!');
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
        $pembayaran = Pembayaran::findOrFail($id);
            return view('datapembayaran.edit',compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'nama'          => 'required|string|max:100',
        'tagihan'       => 'required',
        'tanggal_pembayaran'     => 'required',
        'jumlah_bayar'  => 'required',
    ]);

    $pembayaran = Pembayaran::findOrFail($id);
    $pembayaran->update([
        'nama'          => $request->nama,
        'tagihan'       => $request->tagihan,
        'tanggal_pembayaran'     => $request->tanggal_pembayaran,
        'jumlah_bayar'  => $request->jumlah_bayar,
    ]);
    
    return redirect('/datapembayaran')->with('success', 'Data pembayaran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $deleted = Pembayaran::where('id', $id)->delete();
        return redirect ('/datapembayaran');
    }
}
