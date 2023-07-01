@extends('admin.data-pengaduan')

@section('title', 'Detail Pengaduan | ')

@section('content')
    <h3 class="pt-3 pb-3">Detail Data Pengaduan Anda!</h3>
    <div class="card-body border bg-white rounded p-3 shadow ">
        <table class="table">
            <tr>
                <td class="text-black">Nama Pelapor</td>
                <td class="text-black">:</td>
                <td class="text-black">{{ $pengaduan->nama_pelapor }}</td>
            </tr>
            <tr>
                <td class="text-black">NIK</td>
                <td class="text-black">:</td>
                <td class="text-black">{{ $pengaduan->nik }}</td>
            </tr>
            <tr>
                <td class="text-black">Usia</td>
                <td class="text-black">:</td>
                <td class="text-black">{{ $pengaduan->usia }}</td>
            </tr>
            <tr>
                <td class="text-black">Telepon</td>
                <td class="text-black">:</td>
                <td class="text-black">{{ $pengaduan->telepon }}</td>
            </tr>
            <tr>
                <td class="text-black">Tanggal Pengaduan</td>
                <td class="text-black">:</td>
                <td class="text-black">{{ $pengaduan->tanggal_pengaduan }}</td>
            </tr>
            <tr>
                <td class="text-black">Status</td>
                <td class="text-black">:</td>
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
            <tr>
                <td class="text-black">Deskripsi Laporan</td>
                <td class="text-black">:</td>
                <td class="text-black">{{ $pengaduan->deskripsi_laporan }}</td>
            </tr>
        </table>
    </div>

    <h3 class="mt-4 mb-4">Tanggapi Pengaduan Masyarakat!</h3>
    <div class="card shadow-lg">
        <div class="card-header">
            Berikan tanggapan
        </div>
        <div class="card-body">
            <form action="{{route('pengaduan.tanggapan', $pengaduan->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Ditanggapi</label>
                    <input type="date" class="form-control col-md-4" id="exampleFormControlInput1" placeholder="Tanggal Pengaduan" name="tanggal_ditanggapi" value="{{$pengaduan->tanggal_ditanggapi}}" required>
                </div>
                <input type="hidden" name="id_pengaduan" value="">
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <div class="input-group mb-3">
                        <select name="status" id="status" class="form-select" aria-label="Default select example">
                            @if ($pengaduan->status == 'pending')
                                <option selected value="pending">Pending</option>
                                <option value="diproses">Diproses</option>
                                <option value="selesai">Selesai</option>
                            @elseif ($pengaduan->status == 'diproses')
                                <option value="pending">Pending</option>
                                <option selected value="diproses">Diproses</option>
                                <option value="selesai">Selesai</option>
                            @elseif ($pengaduan->status == 'selesai')
                                <option value="pending">Pending</option>
                                <option value="diproses">Diproses</option>
                                <option selected value="selesai">Selesai</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggapan Kami</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Berikan tanggapan" name="tanggapan" required>{{$pengaduan->tanggapan}}</textarea>
                </div>
                <button type="submit" class="btn btn-info" style="width: 62.3rem">Submit Respon</button>
            </form>
        </div>
    </div>
@endsection
