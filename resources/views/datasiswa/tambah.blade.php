<!-- MODAL TAMBAH SISWA -->
        <div class="modal fade" id="tambahSiswaModal" tabindex="-1" aria-labelledby="tambahSiswaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="tambahSiswaModalLabel">
                            <i class="fas fa-user-plus"></i> Tambah Siswa
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/datasiswa') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan nama siswa" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="2"
                                    placeholder="Masukkan alamat siswa" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas"
                                    placeholder="Masukkan kelas siswa" required>
                            </div>
                            <div class="mb-3">
                                <label for="orangtua" class="form-label">Orang Tua</label>
                                <input type="text" class="form-control" id="orangtua" name="orangtua"
                                    placeholder="Masukkan nama orang tua" required>
                            </div>
                            <div class="mb-3">
                                <label for="notelp" class="form-label">No. Telepon</label>
                                <input type="tel" class="form-control" id="notelp" name="notelp"
                                    placeholder="Masukkan nomor telepon" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>