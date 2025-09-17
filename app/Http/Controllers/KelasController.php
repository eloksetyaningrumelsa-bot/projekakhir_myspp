<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil seluruh data dari tb_siswa
        $kelas = Kelas ::all();
        // melakukan pasing data ke view index
        return view('datakelas.index', ['kelas' => $kelas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datakelas.tambah');
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'jenis_kelas' => 'required',
    ]);

    Kelas::create([
        'jenis_kelas' => $request->jenis_kelas,
    ]);

    return redirect('/datakelas')->with('success', 'Data kelas berhasil ditambahkan!');
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
         $kelas = Kelas::findOrFail($id);
            return view('datakelas.edit',compact('kelas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
        'jenis_kelas' => 'required|string|max:255',
    ]);

    $kelas = Kelas::findOrFail($id);
    $kelas->update([
        'jenis_kelas' => $request->jenis_kelas,
    ]);

    return redirect('/datakelas')->with('success', 'Data kelas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Kelas::where('id', $id)->delete();
        return redirect ('/datakelas');
    }
}
