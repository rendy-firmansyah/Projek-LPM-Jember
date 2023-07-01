@extends('user.data-pengaduan')

@section('title', 'Tambah Pengaduan | ')

@section('content')
<h3 class="pt-3 pb-3">Tambah Pengaduan</h3>
<form action="/pengaduan" method="POST">
    @csrf
    <div class="card-body border bg-white rounded p-3 shadow">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pelapor</label>
            <input type="nama pelapor" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukan Nama Pelapor" name="nama_pelapor" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIK</label>
            <input type="nik" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukkan NIK" name="nik" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Usia</label>
            <input type="usia" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukkan Usia" name="usia" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telepon</label>
            <input type="telepon" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukkan Nomor Telepon" name="telepon" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Pengaduan</label>
            <input type="date" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Tanggal Pengaduan" name="tanggal_pengaduan" required>
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Laporan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Deskripsi Laporan" name="deskripsi_laporan" required></textarea>
        </div>
        <button type="submit" class="btn btn-success" style="width: 62.3rem">Submit Data</button>
    </div>
</form>
@include("partial.script")
@endsection