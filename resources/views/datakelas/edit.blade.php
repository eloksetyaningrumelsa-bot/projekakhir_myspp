<!-- MODAL EDIT KELAS -->
<div class="modal fade" id="editKelas{{ $kelas->id }}" tabindex="-1" aria-labelledby="editKelasLabel{{ $kelas->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editKelasLabel{{ $kelas->id }}">Edit Data Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form action="{{ url('/datakelas/update/' . $kelas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="jenis_kelas{{ $kelas->id }}" class="form-label">Jenis Kelas</label>
                        <select class="form-control" name="jenis_kelas" id="jenis_kelas{{ $kelas->id }}" required>
                            <option value="" disabled>Pilih Jenis Kelas</option>
                            <option value="TK"  {{ $kelas->jenis_kelas == 'TK' ? 'selected' : '' }}>TK</option>
                            <option value="SD"  {{ $kelas->jenis_kelas == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ $kelas->jenis_kelas == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMK" {{ $kelas->jenis_kelas == 'SMK' ? 'selected' : '' }}>SMK</option>
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
