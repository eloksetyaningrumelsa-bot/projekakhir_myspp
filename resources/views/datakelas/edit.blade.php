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
                        <input type="text" class="form-control" name="jenis_kelas" id="jenis_kelas"
                            value="{{ $kelas->jenis_kelas ?? '' }}" placeholder="Masukkan Jenis Kelas" required>
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