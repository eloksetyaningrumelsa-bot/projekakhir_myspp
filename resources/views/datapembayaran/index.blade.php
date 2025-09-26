@extends('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">                  
            <!-- TABEL PEMBAYARAN -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center bg-secondary text-white">
                    <div>
                        <i class="fas fa-table me-1"></i>
                        Data Pembayaran
                    </div>
                    <!-- Tombol Tambah Pembayaran -->
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahPembayaran">
                        <i class="fas fa-plus"></i> Tambah Pembayaran
                    </button>
                </div>

                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tagihan</th>
                                <th>Tgl Bayar</th>
                                <th>Jumlah Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pembayaran as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tagihan }}</td>
                                    <td>{{ $item->tanggal_pembayaran }}</td>
                                    <td>Rp {{$item->jumlah_bayar }}</td>
                                    <td>
                                        <!-- tombol ubah -->
                                        <a href="/datapembayaran/edit/{{ $item->id }}" 
                                           class="btn btn-warning btn-sm" 
                                           title="Ubah">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- tombol hapus -->
                                        <a href="/datapembayaran/delete/{{ $item->id }}" 
                                           class="btn btn-danger btn-sm" 
                                           title="Hapus"
                                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data pembayaran belum tersedia</td>
                                </tr>
                            @endforelse
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </main>

    @include('datapembayaran.tambah')
@endsection
