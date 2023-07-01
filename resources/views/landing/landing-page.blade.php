<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPM Jember</title>
  <link rel="icon" href="{{asset('img/icon-lpm.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
      <div class="container-lg">
        <a class="navbar-brand" href="#">LPM Jember</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Infografis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tatacara">Tata Cara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary btn-daftar" href="{{ route('register') }}" style="color: white;">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary btn-masuk" href="{{ route('login') }}" style="color: white;">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="hero" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Layanan Pengaduan<br>Masyarakat Jember</h1>
          <p>Laporkan masalah anda disini, Kami akan memproses pengaduan anda secara cepat.</p>
          <a href="{{ route('login') }}" class="btn btn-primary btn-ajuan">Laporkan Disini</a>
        </div>
        <div class="col-md-6">
          <div class="img-logo">
            <img src="{{asset('img/people.png')}}" alt="Gambar" class="img-fluid" style="width: 90%">
          </div>
          <div class="img-pattern">
            <img src="{{asset('img/pattern-oval.png')}}" alt="Gambar" class="img-fluid" style="width: 90%">
          </div>
        </div>
      </div>
    </div>
  </section>  

  <section class="features" id="features">
    <div class="container-fluid">
      <h2 class="mt-5">Infografis</h2>
      <div class="row d-flex justify-content-center">
        <div class="col-md-2">
          <img src="{{asset('img/produk-hukum.png')}}" alt="" style="width: 200px;" class="mb-5">
        </div>
        <div class="col-md-2">
          <img src="{{asset('img/lapor.png')}}" alt="" style="width: 200px;" class="mb-5">
        </div>
        <div class="col-md-2">
          <img src="{{asset('img/logo-kab-jember.png')}}" alt="" style="width: 100px;" class="mb-5">
        </div>
        <div class="col-md-2">
          <img src="{{asset('img/jember-wisata.png')}}" alt="" style="width: 200px;" class="mb-5">
        </div>
        <div class="col-md-2">
          <img src="{{asset('img/pojok.png')}}" alt="" style="width: 200px" class="mb-5">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="feature">
            <h3>Luas Wilayah</h3>
            <h2>3,293,34 km2</h2>
          </div>
        </div>
        <div class="col-md-3">
          <div class="feature">
            <h3>Kecamatan</h3>
            <h2>31</h2>
          </div>
        </div>
        <div class="col-md-3">
          <div class="feature">
            <h3>Jumlah Penduduk</h3>
            <h2>2.801.149</h2>
          </div>
        </div>
        <div class="col-md-3">
          <div class="feature">
            <h3>Kelurahan dan Desa</h3>
            <h2>248</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tatacara" id="tatacara">
    <div class="container-lg">
      <h2>Tata Cara Pengaduan</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card shadow" style="width: 15rem;">
            <div class="card-body">
              <img src="{{asset('img/icon1.png')}}" alt="" style="width: 140px">
              <p class="card-text">Tulis laporan pengaduan anda secara jelas.</p> 
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow" style="width: 15rem;">
            <div class="card-body">
              <img src="{{asset('img/icon2.png')}}" alt="" style="width: 163px">
              <p class="card-text">Tunggu laporan anda hingga diverifikasi.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow" style="width: 15rem;">
            <div class="card-body">
              <img src="{{asset('img/icon3.png')}}" alt="" style="width: 186px">
              <p class="card-text">Laporan anda sedang ditindak lanjuti.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow" style="width: 15rem;">
            <div class="card-body">
              <img src="{{asset('img/icon4.png')}}" alt="" style="width: 201px">
              <p class="card-text">Laporan pengaduan anda selesai ditindak.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 LPM Jember - Layanan Pengaduan Masyarakat. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
