@extends('master')
@section('isi')
<div class="container-fluid">
    <h2 class="mb-4">Kartu Pembayaran Bimbel</h2>

    <!-- Form Kartu Pembayaran -->
    <form>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas :</label>
            <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas">
        </div>

        <!-- Tabel Pembayaran -->
        <h5 class="mt-4">Data Pembayaran</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Bulan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tgl</th>
                    <th scope="col">Paraf</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="bulan" placeholder="Masukkan Bulan"></td>
                    <td><input type="text" class="form-control" name="jumlah" placeholder="Masukkan Jumlah"></td>
                    <td><input type="date" class="form-control" name="tgl"></td>
                    <td><input type="text" class="form-control" name="paraf" placeholder="Paraf"></td>
                </tr>
                
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
