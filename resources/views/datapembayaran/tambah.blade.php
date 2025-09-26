<!-- MODAL TAMBAH PEMBAYARAN -->
<div class="modal fade" id="tambahPembayaran" tabindex="-1" aria-labelledby="tambahPembayaranLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="tambahPembayaranLabel">Tambah Data Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form action="{{ url('/datapembayaran') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            placeholder="Masukkan nama siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="tagihan" class="form-label">Tagihan</label>
                        <input type="text" class="form-control" name="tagihan" id="tagihan"
                            placeholder="Masukkan tagihan " required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
                        <input type="date" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                        <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar"
                            placeholder="Masukkan jumlah bayar" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="" disabled selected>Pilih status pembayaran</option>
                            <option value="Lunas">Lunas</option>
                            <option value="Belum Lunas">Belum Lunas</option>
                        </select>
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
