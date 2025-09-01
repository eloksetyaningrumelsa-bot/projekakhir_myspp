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
                                            <button class="btn btn-sm btn-success status-btn">Lunas</button>
                                        </td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Della Sabrina Indah P</td>
                                        <td>Tokyo</td>
                                        <td>X AKL</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
                                        </td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Garrett Winters</td>
                                        <td>Tokyo</td>
                                        <td>X AKL</td>
                                        <td>
                                            <button class="btn btn-sm btn-success status-btn">Lunas</button>
                                        </td>
                                        <td>$170,750</td>
                                    </tr>
                                    <!-- Tambah data lainnya -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <!-- FOOTER -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; MySPP BRILLIANT 2025 RPL SMK PGRI WLINGI</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
    <script>
        // Event Delegation agar semua tombol status tetap interaktif meski tabel di-render ulang
        document.querySelector("#datatablesSimple tbody").addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("status-btn")) {
                let btn = e.target;
                if (btn.innerText.trim() === "Lunas") {
                    btn.classList.remove("btn-success");
                    btn.classList.add("btn-danger");
                    btn.innerText = "Belum Bayar";
                } else {
                    btn.classList.remove("btn-danger");
                    btn.classList.add("btn-success");
                    btn.innerText = "Lunas";
                }
            }
        });
    </script>
</body>
</html>
