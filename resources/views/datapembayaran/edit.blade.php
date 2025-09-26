@extends('master')
@section('isi')

    <main>
        <div class="container-fluid px-4 mt-3">

            <form action="{{ url('/datapembayaran/update/' . $pembayaran->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $pembayaran->nama }}"
                            placeholder="Masukkan nama siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="tagihan" class="form-label">Tagihan</label>
                        <input type="text" class="form-control" name="tagihan" id="tagihan"
                            value="{{ $pembayaran->tagihan }}" placeholder="Masukkan tagihan" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                        <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar"
                            value="{{ $pembayaran->jumlah_bayar }}" placeholder="Masukkan jumlah pembayaran" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_pembayaran" class="form-label">Tanggal Bayar</label>
                        <input type="date" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran"
                            value="{{ $pembayaran->tanggal_pembayaran }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="Lunas" {{ $pembayaran->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                            <option value="Belum Lunas" {{ $pembayaran->status == 'Belum Lunas' ? 'selected' : '' }}>Belum
                                Lunas</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer justify-content-end">
                    <a href="{{ url('/datapembayaran') }}" class="btn btn-danger me-3">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>


        </div>
    </main>

@endsection