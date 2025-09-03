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
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahSiswaModal">
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
                            <tr>
                                <td>1</td>
                                <td>Della Sabrina Indah P</td>
                                <td>Tokyo</td>
                                <td>SMP</td>
                                <td>Delli</td>
                                <td>081234567890</td>
                                <td>
                                    <!-- tombol ubah -->
                                    <button class="btn btn-link text-warning p-0 me-2" title="Ubah">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </button>
                                    <!-- tombol hapus -->
                                    <button class="btn btn-link text-danger p-0 ms-2" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash fa-2x"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Della Sabrina Indah P</td>
                                <td>Tokyo</td>
                                <td>X AKL</td>
                                <td>Orang Tua Della</td>
                                <td>081234567890</td>
                                <td>
                                    <!-- tombol ubah -->
                                    <button class="btn btn-link text-warning p-0 me-2" title="Ubah">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </button>
                                    <!-- tombol hapus -->
                                    <button class="btn btn-link text-danger p-0 ms-2" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash fa-2x"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Tambah data lainnya -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- MODAL TAMBAH SISWA -->
        <div class="modal fade" id="tambahSiswaModal" tabindex="-1" aria-labelledby="tambahSiswaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="tambahSiswaModalLabel">
                            <i class="fas fa-user-plus"></i> Tambah Siswa
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/siswa/store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama siswa" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Masukkan alamat siswa" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas siswa" required>
                            </div>
                            <div class="mb-3">
                                <label for="orangtua" class="form-label">Orang Tua</label>
                                <input type="text" class="form-control" id="orangtua" name="orangtua" placeholder="Masukkan nama orang tua" required>
                            </div>
                            <div class="mb-3">
                                <label for="notelp" class="form-label">No. Telepon</label>
                                <input type="tel" class="form-control" id="notelp" name="notelp" placeholder="Masukkan nomor telepon" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
