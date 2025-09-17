@extends('master')

@section('isi')
    <!-- konten -->
    <main>
        <div class="container-fluid px-4 mt-3">
            <!-- KARTU JUMLAH SISWA -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body text-center">
                            <h5 class="mb-2">TK</h5>
                            <h2 class="fw-bold">25 Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body text-center">
                            <h5 class="mb-2">SD</h5>
                            <h2 class="fw-bold">55 Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body text-center">
                            <h5 class="mb-2">SMP</h5>
                            <h2 class="fw-bold">60 Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body text-center">
                            <h5 class="mb-2">SMA/SMK</h5>
                            <h2 class="fw-bold">80 Siswa</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABEL -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Tagihan Terbaru
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Elsa Elok Setyaningrum</td>
                                <td>Tokyo</td>
                                <td>XI RPL 1</td>
                                <td>
                                    <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Della Sabrina Indah P</td>
                                <td>Tokyo</td>
                                <td>X AKL</td>
                                <td>
                                    <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Garrett Winters</td>
                                <td>Tokyo</td>
                                <td>X AKL</td>
                                <td>
                                    <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
                                </td>
                            </tr>
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