@extends('master')
@section('isi')

<main>
    <div class="container-fluid px-4 mt-3">

        <form action="{{ url('/datapembayaran/update/' . $pembayaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">

                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa"
                        value="{{ $pembayaran->nama_siswa }}" placeholder="Masukkan nama siswa" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                    <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar"
                        value="{{ $pembayaran->jumlah_bayar }}" placeholder="Masukkan jumlah pembayaran" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_bayar" class="form-label">Tanggal Bayar</label>
                    <input type="date" class="form-control" name="tanggal_bayar" id="tanggal_bayar"
                        value="{{ $pembayaran->tanggal_bayar }}" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="Lunas" {{ $pembayaran->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                        <option value="Belum Lunas" {{ $pembayaran->status == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                    </select>
                </div>

            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <a href="{{ url('/datapembayaran') }}" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>

    </div>
</main>

@endsection
