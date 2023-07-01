<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="text-center">
        <h5>Laporan Pengaduan Masyarakat</h5>
        <h6>layanan_pengaduan_kabupaten_jember</h6>
    </div>
    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Nama Pelapor</th>
                    <th>NIK</th>
                    <th>Telepon</th>
                    <th>Deskrispi Laporan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $item)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> tanggal_pengaduan}}</td>
                    <td>{{$item -> nama_pelapor}}</td>
                    <td>{{$item -> nik}}</td>
                    <td>{{$item -> telepon}}</td>
                    <td>{{$item -> deskripsi_laporan}}</td>
                    <td>{{$item -> status == 'pending' ? 'Pending' : ucwords($item -> status)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>