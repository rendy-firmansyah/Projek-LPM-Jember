@extends("admin.data-respon")

@section('title', 'Data Laporan | ')

@section('content')
<h3 class="mb-3">Data Laporan</h3>
<div class="card shadow">
    <div class="card-header">
        Cari Berdasarkan Tanggal
    </div>
    <div class="card-body">
        <form action="/data-laporan" method="POST">
            @csrf
            <div class="form-group mb-2">
                <input type="text" name="from" class="form-control" placeholder="Tanggal Awal" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="to" class="form-control" placeholder="Tanggal Akhir" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%">Cari Laporan</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Data Laporan Berdasarkan Tanggal
        <div class="float-end">
            @if ($pengaduan ?? '')
                <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to]) }}" class="btn btn-danger"><i class="fa-solid fa-print me-2"></i>Cetak PDF</a>
            @endif
        </div>
    </div>
    <div class="card-body">
        @if ($pengaduan ?? '')
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Tanggal Pengaduan</td>
                        <td>Nama Pelapor</td>
                        <td>Isi Laporan</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengaduan as $item)
                        <tr>
                            <td>{{$loop-> iteration}}</td>
                            <td>{{$item-> tanggal_pengaduan}}</td>
                            <td>{{$item-> nama_pelapor}}</td>
                            <td>{{$item-> deskripsi_laporan}}</td>
                            <td class="">
                                @if ($item->status == 'pending')
                                    <a href="" class="badge bg-danger text-white">Pending</a>
                                @elseif ($item->status == 'diproses')
                                    <a href="" class="badge bg-warning text-white">Diproses</a>
                                @else
                                    <a href="" class="badge bg-success text-white">Selesai</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="text-center">
                Tidak ada data laporan
            </div>
        @endif
    </div>
</div>
@endsection