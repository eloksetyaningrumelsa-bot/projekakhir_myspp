@foreach ($pembayaran as $pembayaran)
<!-- MODAL EDIT PEMBAYARAN -->
<div class="modal fade" id="editPembayaran{{ $pembayaran->id }}" tabindex="-1" aria-labelledby="editPembayaranLabel{{ $pembayaran->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editPembayaranLabel{{ $pembayaran->id }}">Edit Data Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form action="{{ url('/datapembayaran/update/' . $pembayaran->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama{{ $pembayaran->id }}" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" id="nama{{ $pembayaran->id }}"
                            value="{{ $pembayaran->nama }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="tagihan{{ $pembayaran->id }}" class="form-label">Tagihan</label>
                        <input type="number" class="form-control" name="tagihan" id="tagihan{{ $pembayaran->id }}"
                            value="{{ $pembayaran->tagihan }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_pembayaran{{ $pembayaran->id }}" class="form-label">Tanggal Pembayaran</label>
                        <input type="date" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran{{ $pembayaran->id }}"
                            value="{{ $pembayaran->tanggal_pembayaran }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_bayar{{ $pembayaran->id }}" class="form-label">Jumlah Bayar</label>
                        <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar{{ $pembayaran->id }}"
                            value="{{ $pembayaran->jumlah_bayar }}" required>
                    </div>
                </div>

                <!-- Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
