@extends('master')
@section('isi')

    <main>
        <div class="container-fluid px-4 mt-3">

            <form action="{{ url('/datakelas/update/' . $kelas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="jenis_kelas" class="form-label">Jenis Kelas</label>
                        <select class="form-control" name="jenis_kelas" id="jenis_kelas" required>
                            <option value="" disabled>Pilih Jenis Kelas</option>
                            <option value="TK"  {{ $kelas->jenis_kelas == 'TK' ? 'selected' : '' }}>TK</option>
                            <option value="SD"  {{ $kelas->jenis_kelas == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ $kelas->jenis_kelas == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMK" {{ $kelas->jenis_kelas == 'SMK' ? 'selected' : '' }}>SMK</option>
                        </select>
                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer justify-content-end">
                    <a href="{{ url('/datakelas') }}" class="btn btn-danger me-3">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>

        </div>
    </main>

@endsection
