@extends('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">
            <!-- TABEL -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center bg-secondary">
                    <div>
                        <i class="fas fa-table me-1"></i>
                        Data Kelas
                    </div>
                    <!-- Tombol Tambah Kelas -->
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahKelas">
                        <i class="fas fa-plus"></i> Tambah Kelas
                    </button>
                </div>

                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Jenis Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->jenis_kelas }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <!-- Tombol ubah (buka modal) -->
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editKelas{{ $item->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>

                                            <!-- Tombol hapus -->
                                            <a href="/datakelas/delete/{{ $item->id }}" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Edit untuk setiap kelas -->
                                <div class="modal fade" id="editKelas{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="editKelasLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Header -->
                                            <div class="modal-header bg-warning text-white">
                                                <h5 class="modal-title" id="editKelasLabel{{ $item->id }}">
                                                    Edit Data Kelas
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <!-- Body -->
                                            <form action="{{ url('/datakelas/update/' . $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Jenis Kelas</label>
                                                        <select class="form-control" name="jenis_kelas" required>
                                                            <option value="TK"  {{ $item->jenis_kelas == 'TK' ? 'selected' : '' }}>TK</option>
                                                            <option value="SD"  {{ $item->jenis_kelas == 'SD' ? 'selected' : '' }}>SD</option>
                                                            <option value="SMP" {{ $item->jenis_kelas == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                            <option value="SMK" {{ $item->jenis_kelas == 'SMK' ? 'selected' : '' }}>SMK</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Batal</button>
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

        <!-- Modal Tambah -->
        @include('datakelas.tambah')
    </main>
@endsection
