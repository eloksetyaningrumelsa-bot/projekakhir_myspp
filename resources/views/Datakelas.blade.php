@extends('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">
            <!-- TABEL -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Kelas
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
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
<<<<<<< HEAD
                                <td>
                                    <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
=======
                                 <td>
                                    <!-- tombol ubah -->
                                    <button class="btn btn-link text-warning p-0 me-3 ms-3" title="Ubah">
                                        <i class="fas fa-edit fa-lg fa-2x"></i>
                                    </button>
                                    <!-- tombol hapus -->
                                    <button class="btn btn-link text-danger p-0" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash fa-lg fa-2x"></i>
                                    </button>
>>>>>>> 3ea6aad57a6905698ec32cd7bf37cdcadb3d8ca0
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SMP</td>
<<<<<<< HEAD
                                <td>
                                    <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
=======
                                 <td>
                                    <!-- tombol ubah -->
                                    <button class="btn btn-link text-warning p-0 me-3 ms-3" title="Ubah">
                                        <i class="fas fa-edit fa-lg fa-2x"></i>
                                    </button>
                                    <!-- tombol hapus -->
                                    <button class="btn btn-link text-danger p-0" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash fa-lg fa-2x"></i>
                                    </button>
>>>>>>> 3ea6aad57a6905698ec32cd7bf37cdcadb3d8ca0
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
<<<<<<< HEAD
                                <td>SMP</td>
                                <td>
                                    <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
=======
                                <td>SD</td>
                                 <td>
                                    <!-- tombol ubah -->
                                    <button class="btn btn-link text-warning p-0 me-3 ms-3" title="Ubah">
                                        <i class="fas fa-edit fa-lg fa-2x"></i>
                                    </button>
                                    <!-- tombol hapus -->
                                    <button class="btn btn-link text-danger p-0" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash fa-lg fa-2x"></i>
                                    </button>
>>>>>>> 3ea6aad57a6905698ec32cd7bf37cdcadb3d8ca0
                                </td>
                            </tr>
                            <!-- Tambah data lainnya -->
                        </tbody>
                    </table>
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
