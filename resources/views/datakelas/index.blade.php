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
                                    <td>{{ $item->jenis_kelas}}</td> {{-- kalau di tabel DB kolomnya nama_kelas --}}
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <!-- tombol ubah -->
                                            <a href="/datakelas/edit/{{ $item->id }}" class="btn btn-warning btn-sm"
                                                title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- tombol hapus -->
                                            <a href="/datakelas/delete/{{$item->id}}" class=" btn btn-link text-danger p-0"
                                                title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash fa-2x"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        @include('datakelas.tambah')
@endsection