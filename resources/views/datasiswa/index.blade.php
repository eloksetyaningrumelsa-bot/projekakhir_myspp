@extends ('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">
            <!-- TABEL -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center bg-secondary text-white">
                    <div>
                        <i class="fas fa-table me-1"></i>
                        Data Siswa
                    </div>
                    <!-- Tombol Tambah Siswa -->
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahSiswa">
                        <i class="fas fa-plus"></i> Tambah Siswa
                    </button>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Orang Tua</th>
                                <th>No.Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->kelas }}</td>
                                    <td>{{ $item->orang_tua }}</td>
                                    <td>{{ $item->no_telepon }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <!-- tombol ubah -->
                                            <button class="btn btn-warning btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editSiswa{{ $item->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <!-- tombol hapus -->
                                            <a href="/datasiswa/delete/{{ $item->id }}" 
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Edit Siswa -->
                                <div class="modal fade" id="editSiswa{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Header -->
                                            <div class="modal-header bg-warning text-white">
                                                <h5 class="modal-title">Edit Data Siswa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Body -->
                                            <form action="{{ url('/datasiswa/update/' . $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Lengkap</label>
                                                        <input type="text" name="nama_lengkap" class="form-control" value="{{ $item->nama }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control" value="{{ $item->alamat }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kelas</label>
                                                        <input type="text" name="kelas" class="form-control" value="{{ $item->kelas }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Orang Tua</label>
                                                        <input type="text" name="ortu" class="form-control" value="{{ $item->orang_tua }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">No.Telepon</label>
                                                        <input type="number" name="no_tlpn" class="form-control" value="{{ $item->no_telepon }}">
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    {{-- Modal Tambah --}}
    @include('datasiswa.tambah')
@endsection
