@extends("user.data-respon")

@section('title', 'Respon | ')

@section('content')
<h3 class="pt-4 ps-2 pb-2">Respon Layanan Pengaduan</h3>
<div class="card-body border rounded shadow-sm justify-content-">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>NIK</th>
                <th>Tanggal Pengaduan</th>
                <th>Tanggal Ditanggapi</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row-> nama_pelapor}}</td>
                    <td>{{$row-> nik}}</td>
                    <td>{{$row-> tanggal_pengaduan}}</td>
                    <td>{{$row-> tanggal_ditanggapi}}</td>
                    <td class="text-center">
                        @if ($row->status == 'pending')
                            <span class="badge bg-danger text-white">Pending</span>
                        @elseif ($row->status == 'diproses')
                            <span class="badge bg-warning text-white">Diproses</span>
                        @else
                            <span class="badge bg-success text-white">Selesai</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{url("/pengaduan/detail-respon-lpm/".$row->id)}}" class="btn btn-info">
                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection