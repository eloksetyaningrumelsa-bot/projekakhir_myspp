@extends ('master')
@section('isi')
            <main>
                <div class="container-fluid px-4 mt-3">                  
                    <!-- TABEL -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Siswa
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kelas</th>
                                        <th>Orang Tua</th>
                                        <th>No.Telphone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
@endsection