@extends('master')

@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">

            <!-- KARTU RINGKASAN -->
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-primary text-white mb-4 text-center shadow">
                        <div class="card-body">
                            <h5>Total Siswa</h5>
                            <h2 class="fw-bold">{{ $totalSiswa }} Siswa</h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3">
                    <div class="card bg-warning text-white mb-4 text-center shadow">
                        <div class="card-body">
                            <h5>Belum Lunas</h5>
                            <h2 class="fw-bold">{{ $jumlahBelumLunas }} Siswa</h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3">
                    <div class="card bg-success text-white mb-4 text-center shadow">
                        <div class="card-body">
                            <h5>Lunas</h5>
                            <h2 class="fw-bold">{{ $jumlahLunas }} Siswa</h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3">
                    <div class="card bg-danger text-white mb-4 text-center shadow">
                        <div class="card-body">
                            <h5>Pendapatan Bulan Ini</h5>
                            <h2 class="fw-bold">
                                Rp {{ number_format($pendapatanBulanIni, 0, ',', '.') }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABEL DATA TAGIHAN -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Tagihan Terbaru
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered text-center align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Jumlah Cicilan</th>
                                <th>Sisa Tagihan</th>
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
                                                        {{ is_numeric($item['jumlah_cicilan'])
                                ? 'Rp ' . number_format($item['jumlah_cicilan'], 0, ',', '.')
                                : $item['jumlah_cicilan'] }}
                                                    </td>
                                                    <td>
                                                        {{ is_numeric($item['sisa_tagihan'])
                                ? 'Rp ' . number_format($item['sisa_tagihan'], 0, ',', '.')
                                : $item['sisa_tagihan'] }}
                                                    </td>

                                                    <td>
                                                        <button
                                                            class="btn btn-sm {{ $item['status'] == 'Lunas' ? 'btn-success' : 'btn-danger' }}">
                                                            {{ $item['status'] }}
                                                        </button>
                                                    </td>

                                                    <td>
                                                        <!-- Tombol Detail -->
                                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#modalDetail{{ $item['id'] }}">
                                                            <i class="fas fa-magnifying-glass-chart"></i>
                                                        </button>

                                                        
                                                    </td>
                                                </tr>

                                                <!-- Modal Kosong -->
                                                <div class="modal fade" id="modalDetail{{ $item['id'] }}" tabindex="-1"
                                                    aria-labelledby="modalLabel{{ $item['id'] }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-warning text-white">
                                                                <h5 class="modal-title" id="modalLabel{{ $item['id'] }}">
                                                                    Detail Data - {{ $item['nama'] }}
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body text-center text-muted">
                                                                Belum ada isi. Tambahkan konten di sini.
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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