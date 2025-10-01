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
                                <th>Status</th>
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
                                    <td>Rp {{ number_format($item->jumlah_bayar, 0, ',', '.') }}</td>
                                    <td>
                                        @if($item->status == 'Lunas')
                                            <span class="badge bg-success">{{ $item->status }}</span>
                                        @elseif($item->status == 'Belum Lunas')
                                            <span class="badge bg-danger">{{ $item->status }}</span>
                                        @else
                                            <span class="badge bg-secondary">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- tombol ubah -->
                                        <button class="btn btn-warning btn-sm" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editPembayaran{{ $item->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <!-- tombol hapus -->
                                        <a href="/datapembayaran/delete/{{ $item->id }}" 
                                           class="btn btn-danger btn-sm" 
                                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal Edit Pembayaran -->
                                <div class="modal fade" id="editPembayaran{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Header -->
                                            <div class="modal-header bg-warning text-white">
                                                <h5 class="modal-title">Edit Pembayaran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Body -->
                                            <form action="{{ url('/datapembayaran/update/' . $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="nama" class="form-control" value="{{ $item->nama }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Tagihan</label>
                                                        <input type="text" name="tagihan" class="form-control" value="{{ $item->tagihan }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Tanggal Bayar</label>
                                                        <input type="date" name="tanggal_pembayaran" class="form-control" value="{{ $item->tanggal_pembayaran }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Bayar</label>
                                                        <input type="number" name="jumlah_bayar" class="form-control" value="{{ $item->jumlah_bayar }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" class="form-control">
                                                            <option value="Lunas" {{ $item->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                                            <option value="Belum Lunas" {{ $item->status == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data pembayaran belum tersedia</td>
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
