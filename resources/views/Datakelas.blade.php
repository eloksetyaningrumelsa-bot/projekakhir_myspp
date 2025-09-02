@extends ('master')
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
                                <td>
                                    <button class="btn btn-sm btn-success status-btn">Lunas</button>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SMP</td>
                                <td>
                                    <button class="btn btn-sm btn-danger status-btn">Belum Bayar</button>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>SD</td>
                                <td>
                                    <button class="btn btn-sm btn-success status-btn">Lunas</button>
                            </tr>
                            <!-- Tambah data lainnya -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection