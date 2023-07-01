@extends('user.data-pengaduan')

@section('title', 'Detail Laporan | ')

@section('content')
    <h3 class="pt-3 pb-3">Detail Respon Pengaduan Masyarakat</h3>
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <table class="table">
                    <tr>
                        <td>Nama Pelapor</td>
                        <td>:</td>
                        <td>{{ $pengaduan->nama_pelapor }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $pengaduan->nik }}</td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td>:</td>
                        <td>{{ $pengaduan->usia }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td>{{ $pengaduan->telepon }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengaduan</td>
                        <td>:</td>
                        <td>{{ $pengaduan->tanggal_pengaduan }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Laporan</td>
                        <td>:</td>
                        <td>{{ $pengaduan->deskripsi_laporan }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card">
                <table class="table">
                    <tr>
                        <td>Tanggal Ditanggapi</td>
                        <td>:</td>
                        <td>{{ $pengaduan->tanggal_ditanggapi }}</td>
                    </tr>
                    <tr>
                        <td>Tanggapan Admin</td>
                        <td>:</td>
                        <td>{{ $pengaduan->tanggapan }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            @if ($pengaduan->status == 'pending')
                                <span class="badge bg-danger">Pending</span>
                            @elseif ($pengaduan->status == 'diproses')
                                <span class="badge bg-warning">Diproses</span>
                            @else
                                <span class="badge bg-success">Selesai</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
