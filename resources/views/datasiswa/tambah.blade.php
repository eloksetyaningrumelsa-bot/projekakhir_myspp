<!-- MODAL TAMBAH SISWA -->
<div class="modal fade" id="tambahSiswa" tabindex="-1" aria-labelledby="tambahSiswaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="tambahSiswaLabel">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form action="{{ url('/datasiswa') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                            placeholder="Masukkan Nama Siswa" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" name="kelas" id="kelas" required>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item->jenis_kelas }}">{{ $item->jenis_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ortu" class="form-label">Orang Tua</label>
                        <input type="text" class="form-control" name="ortu" id="ortu"
                            placeholder="Masukkan nama orang tua">
                    </div>
                    <div class="mb-3">
                        <label for="no_tlpn" class="form-label">No.Telepon</label>
                        <input type="number" class="form-control" name="no_tlpn" id="no_tlpn"
                            placeholder="Masukkan nomor telepon yang aktif">
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const table = document.querySelector("#datatablesSimple tbody");

        if (table) {
            table.addEventListener("click", function (e) {
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
        }
    });
</script>