@extends('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">                  
            <!-- TABEL PEMBAYARAN -->
            <div class="card mb-4">
                <div class="card-header text-center fw-bold">
                    TABEL PEMBAYARAN
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tagihan</th>
                                <th>Tgl Bayar</th>
                                <th>Jumlah Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Della Sabrina Indah P</td>
                                <td>SPP Bulan Agustus</td>
                                <td>02-09-2025</td>
                                <td>Rp 350.000</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Lunas</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Garrett Winters</td>
                                <td>SPP Bulan Agustus</td>
                                <td>-</td>
                                <td>Rp 350.000</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Belum Bayar</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <!-- Tambahkan data lainnya -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
