@extends('user.data-pengaduan')

@section('title', 'Tambah Pengaduan | ')

@section('content')

<h3 class="pt-3 pb-3">Edit Data Pengaduan Anda</h3>
<form action="{{route('pengaduan.update', $pengaduan->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$pengaduan->id}}">
    <div class="card-body border bg-white rounded p-3 shadow">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pelapor</label>
            <input type="nama pelapor" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukan Nama Pelapor" name="nama_pelapor" value="{{ $pengaduan->nama_pelapor }}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIK</label>
            <input type="nik" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukkan NIK" name="nik" value="{{$pengaduan->nik}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Usia</label>
            <input type="usia" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukkan Usia" name="usia" value="{{$pengaduan->usia}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telepon</label>
            <input type="telepon" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Masukkan Nomor Telepon" name="telepon" value="{{$pengaduan->telepon}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Pengaduan</label>
            <input type="date" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Tanggal Pengaduan" name="tanggal_pengaduan" value="{{$pengaduan->tanggal_pengaduan}}" required>
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Laporan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Deskripsi Laporan" name="deskripsi_laporan" required>{{$pengaduan->deskripsi_laporan}}</textarea>
        </div>
        <button type="submit" class="btn btn-warning" style="width: 62.3rem">Update Data</button>
    </div>
</form>
@endsection