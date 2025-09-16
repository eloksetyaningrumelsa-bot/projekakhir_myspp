<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil seluruh data dari tb_siswa
        $siswa = Siswa ::all();
        // melakukan pasing data ke view index
        return view('datasiswa.index', ['siswa' => $siswa]);
    }

    public function create()
    {
        return view('datasiswa.tambah');
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nama_lengkap' => 'required|string|max:100',
        'alamat'       => 'required',
        'kelas'        => 'required',
        'ortu'         => 'required',
        'no_tlpn'      => 'required',
    ]);

        // simpan ke database
         Siswa::create([
        'nama'       => $request->nama_lengkap,
        'alamat'     => $request->alamat,
        'kelas'      => $request->kelas,
        'orang_tua'  => $request->ortu,
        'no_telepon' => $request->no_tlpn,
    ]);

         return redirect('/datasiswa')->with('success', 'Data siswa berhasil ditambahkan!');
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
          $siswa = Siswa::findOrFail($id);
            return view('datasiswa.edit',compact('siswa'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
        'nama_lengkap' => 'required|string|max:100',
        'alamat'       => 'required',
        'kelas'        => 'required',
        'ortu'         => 'required',
        'no_tlpn'      => 'required',
    ]);

    $siswa = Siswa::findOrFail($id);
    $siswa->update([
        'nama'       => $request->nama_lengkap,
        'alamat'     => $request->alamat,
        'kelas'      => $request->kelas,
        'orang_tua'  => $request->ortu,
        'no_telepon' => $request->no_tlpn,
    ]);
    
    return redirect('/datasiswa')->with('success', 'Data siswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $deleted = Siswa::where('id', $id)->delete();
        return redirect ('/siswa');
    }
}
