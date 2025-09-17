@extends('master')
@section('isi')

    <main>
        <div class="container-fluid px-4 mt-3">

            <form action="{{ url('/datasiswa/update/' . $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                            value="{{ $siswa->nama }}" placeholder="Masukkan Nama Siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $siswa->alamat }}"
                            placeholder="Masukkan alamat">
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $siswa->kelas }}"
                            placeholder="Masukkan kelas">
                    </div>

                    <div class="mb-3">
                        <label for="ortu" class="form-label">Orang Tua</label>
                        <input type="text" class="form-control" name="ortu" id="ortu" value="{{ $siswa->orang_tua }}"
                            placeholder="Masukkan nama orang tua">
                    </div>

                    <div class="mb-3">
                        <label for="no_tlpn" class="form-label">No. Telepon</label>
                        <input type="number" class="form-control" name="no_tlpn" id="no_tlpn"
                            value="{{ $siswa->no_telepon }}" placeholder="Masukkan nomor telepon yang aktif">
                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger me-6" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>

        </div>
    </main>

@endsection