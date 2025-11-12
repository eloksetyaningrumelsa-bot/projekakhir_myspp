@extends ('master')
@section('isi')
    <main>
        <div class="container-fluid px-4 mt-3">
            <!-- TABEL -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center bg-secondary text-white">
                    <div>
                        <i class="fas fa-table me-1"></i>
                        Laporan Data SPP
                    </div>
                    <!-- Tempat tombol export -->
                    <div id="exportButtons" class="d-flex gap-2"></div>
                </div>

                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tagihan</th>
                                <th>Jumlah Bayar</th>
                                <th>Sisa Uang Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laporan as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['alamat'] }}</td>
                                    <td>Rp {{ number_format($item['tagihan'], 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($item['jumlah_bayar'], 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($item['sisa_tagihan'], 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        <style>
            /* Styling tambahan untuk DataTables */
            div.dataTables_filter,
            div.dataTables_info,
            div.dataTables_paginate,
            div.dataTables_length {
                padding: 0.75rem 1rem;
            }

            /* Biar tombol export rapi */
            #exportButtons .btn {
                color: #fff;
                font-weight: 500;
            }

            /* Sedikit margin antar tombol */
            #exportButtons .btn + .btn {
                margin-left: 0.5rem;
            }
        </style>

        <script>
            $(document).ready(function () {
                let table = $('#datatablesSimple').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excel',
                            text: '<i class="fas fa-file-excel me-1"></i> Excel',
                            className: 'btn btn-sm btn-success'
                        },
                        {
                            extend: 'pdf',
                            text: '<i class="fas fa-file-pdf me-1"></i> PDF',
                            className: 'btn btn-sm btn-danger'
                        },
                    ],
                    order: [[0, 'asc']],
                    pageLength: 10,
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
                    searching: false
                });

                // Pindahkan tombol export ke kanan di header card
                table.buttons().container().appendTo('#exportButtons');
            });
        </script>
    @endpush
@endsection
