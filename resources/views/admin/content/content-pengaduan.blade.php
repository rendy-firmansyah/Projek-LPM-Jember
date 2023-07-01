@extends("admin.data-pengaduan")

@section('title', 'Data Pengaduan | ')

@section('content')
<h3 class="pt-4 ps-2 pb-2">Data Pengaduan Masyarakat</h3>
<div class="card-body border rounded shadow-sm justify-content-">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>NIK</th>
                <th>Usia</th>
                <th>Telepon</th>
                <th>Tanggal Pengaduan</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $row)
                <tr>
                    <td>{{$loop-> iteration}}</td>
                    <td>{{$row-> nama_pelapor}}</td>
                    <td>{{$row-> usia}}</td>
                    <td>{{$row-> nik}}</td>
                    <td>{{$row-> telepon}}</td>
                    <td>{{$row-> tanggal_pengaduan}}</td>
                    <td class="">
                        @if ($row->status == 'pending')
                            <a href="" class="badge bg-danger text-white">Pending</a>
                        @elseif ($row->status == 'diproses')
                            <a href="" class="badge bg-warning text-white">Diproses</a>
                        @else
                            <a href="" class="badge bg-success text-white">Selesai</a>
                        @endif
                    </td>
                    <td class="text-center">
                        {{-- <a href="{{url("/pengaduan/detail/".$row->id)}}" class="btn btn-info">Detail</a> --}}
                        <a href="{{url("/data-pengaduan/insert/".$row->id)}}" class="btn btn-warning">
                            <i class="fa-solid fa-reply"></i>
                        </a>
                        <form action="{{url("/pengaduan/delete")}}" method="post" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{$row->id}}">
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

