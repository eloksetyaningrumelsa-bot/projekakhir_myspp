@extends('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">
            <!-- TABEL -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-table me-1"></i>
                        Data Kelas
                    </div>
                    <!-- Tombol Tambah Kelas -->
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahKelasModal">
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
                            <tr>
                                <td>1</td>
                                <td>SMP</td>
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
                                <td>SMA</td>
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
                                <td>3</td>
                                <td>SD</td>
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

        <!-- MODAL TAMBAH KELAS -->
        <div class="modal fade" id="tambahKelasModal" tabindex="-1" aria-labelledby="tambahKelasLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Header -->
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="tambahKelasLabel">Tambah Data Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Body -->
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="jenis_kelas" class="form-label">Jenis Kelas</label>
                            <input type="text" class="form-control" id="jenis_kelas" placeholder="Masukkan kelas">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat">
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas </label>
                            <input type="text" class="form-control" id="kelas" placeholder="Masukkan kelas">
                        </div>
                        <div class="mb-3">
                            <label for="ortu" class="form-label">Orang Tua</label>
                            <input type="text" class="form-control" id="ortu" placeholder="Masukkan nama orang tua">
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pakai event delegation di tbody
            const tbody = document.querySelector("#datatablesSimple tbody");

            tbody.addEventListener("click", function (e) {
                if (e.target && e.target.classList.contains("status-btn")) {
                    let btn = e.target;
                    if (btn.classList.contains("btn-success")) {
                        btn.classList.remove("btn-success");
                        btn.classList.add("btn-danger");
                        btn.textContent = "Belum Bayar";
                    } else {
                        btn.classList.remove("btn-danger");
                        btn.classList.add("btn-success");
                        btn.textContent = "Lunas";
                    }
                }
            });
        });
    </script>
@endsection