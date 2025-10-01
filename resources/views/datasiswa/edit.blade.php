<!-- MODAL EDIT SISWA -->
<div class="modal fade" id="editSiswa{{ $siswa->id }}" tabindex="-1" aria-labelledby="editSiswaLabel{{ $siswa->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editSiswaLabel{{ $siswa->id }}">Edit Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form action="{{ url('/datasiswa/update/' . $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nama_lengkap{{ $siswa->id }}" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap{{ $siswa->id }}"
                            value="{{ $siswa->nama }}" placeholder="Masukkan Nama Siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat{{ $siswa->id }}" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat{{ $siswa->id }}"
                            value="{{ $siswa->alamat }}" placeholder="Masukkan alamat">
                    </div>

                    <div class="mb-3">
                        <label for="kelas{{ $siswa->id }}" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas{{ $siswa->id }}"
                            value="{{ $siswa->kelas }}" placeholder="Masukkan kelas">
                    </div>

                    <div class="mb-3">
                        <label for="ortu{{ $siswa->id }}" class="form-label">Orang Tua</label>
                        <input type="text" class="form-control" name="ortu" id="ortu{{ $siswa->id }}"
                            value="{{ $siswa->orang_tua }}" placeholder="Masukkan nama orang tua">
                    </div>

                    <div class="mb-3">
                        <label for="no_tlpn{{ $siswa->id }}" class="form-label">No. Telepon</label>
                        <input type="number" class="form-control" name="no_tlpn" id="no_tlpn{{ $siswa->id }}"
                            value="{{ $siswa->no_telepon }}" placeholder="Masukkan nomor telepon yang aktif">
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
