@extends("user.data-pengaduan")

@section('title', 'Data Pengaduan | ')

@section('content')
<div class="title d-flex justify-content-lg-between mb-3 pt-3">
    <h3 class="">Data Pengaduan Masyarakat</h3>
    <button class="btn btn-primary" onclick="window.location='{{ url('/pengaduan/insert') }}'">
        <i class="fa-solid fa-circle-plus me-2"></i> Ajukan Pengaduan
    </button>
</div>
<div class="card-body border rounded shadow-sm justify-content-">
    @if ($pengaduan ?? '')
        <table class="table table-striped" id="pengaduanTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelapor</th>
                    <th>NIK</th>
                    <th>Usia</th>
                    <th>Telepon</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row-> nama_pelapor}}</td>
                        <td>{{$row-> usia}}</td>
                        <td>{{$row-> nik}}</td>
                        <td>{{$row-> telepon}}</td>
                        <td>{{$row-> tanggal_pengaduan}}</td>
                        <td class="text-center">
                            <a href="{{url("/pengaduan/detail/".$row->id)}}" class="btn btn-info">
                                <i class="fa-sharp fa-solid fa-circle-info"></i>
                            </a>
                            <a href="{{url("/pengaduan/update/".$row->id)}}" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="text-center">
            Tidak ada data pengajuan
        </div>
    @endif
</div>
@endsection