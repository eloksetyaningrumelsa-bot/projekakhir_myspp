@extends('master')

@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">

            <!-- KARTU JUMLAH SISWA -->
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-primary text-white mb-4 text-center">
                        <div class="card-body">
                            <h5>TK</h5>
                            <h2 class="fw-bold">{{ $tk }} Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-warning text-white mb-4 text-center">
                        <div class="card-body">
                            <h5>SD</h5>
                            <h2 class="fw-bold">{{ $sd }} Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-success text-white mb-4 text-center">
                        <div class="card-body">
                            <h5>SMP</h5>
                            <h2 class="fw-bold">{{ $smp }} Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-danger text-white mb-4 text-center">
                        <div class="card-body">
                            <h5>SMA/SMK</h5>
                            <h2 class="fw-bold">{{ $smk }} Siswa</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABEL DATA -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Tagihan Terbaru
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataGabung as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['alamat'] }}</td>
                                    <td>{{ $item['kelas'] }}</td>
                                    <td>
                                        <button
                                            class="btn btn-sm {{ $item['status'] == 'Lunas' ? 'btn-success' : 'btn-danger' }}">
                                            {{ $item['status'] }}
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editPembayaran{{ $item['id'] }}">
                                            <i class="fas fa-magnifying-glass-chart"></i>
                                        </button>

                                        <a href="/datapembayaran/delete/{{ $item['id'] }}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
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