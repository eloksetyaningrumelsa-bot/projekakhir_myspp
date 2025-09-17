@extends ('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">
            <!-- TABEL -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
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
                    <table id="datatablesSimple" class="table table-bordered">
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
                                            <a href="/datasiswa/edit/{{ $item->id }}" class="btn btn-warning btn-sm"
                                                title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- tombol hapus -->
                                            <a href="/datasiswa/delete/{{$item->id}}" class=" btn btn-link text-danger p-0"
                                                title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash fa-2x"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Tambah data lainnya -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    @include('datasiswa.tambah')

@endsection