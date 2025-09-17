
    <!-- MODAL TAMBAH KELAS -->
    <div class="modal fade" id="tambahKelas" tabindex="-1" aria-labelledby="tambahKelasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="tambahKelasLabel">Tambah Data Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Body -->
                <form action="{{ url('/datakelas') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="jenis_kelas" class="form-label">Jenis Kelas</label>
                            <input type="text" class="form-control" name="jenis_kelas" id="jenis_kelas"
                                placeholder="Masukkan kelas" required>
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
