@extends ('master')
@section('isi')
<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-3">                  
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
@endsection