<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashbord LPM Jember</title>
  <link rel="icon" href="{{asset('img/icon-lpm.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset("/modernize/src/assets/css/styles.min.css")}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include("partial.header-admin")
      <!--  Header End -->
    <div class="container-fluid">
    <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="img-logo d-flex justify-content-center mt-5">
                        <img src="{{asset('img/logo-kab-jember.png')}}" width="140px" alt="logo-kab-jember">
                    </div>
                    <div class="text-title text-center mt-4">
                        <h3>Selamat Datang Di LPM</h3>
                        <h3>Layanan Pengaduan Masyarakat Kabupaten Jember</h3>
                        <p>Ajukan pengaduan anda melalui kami, <span style="color: #007BFF;">Wes Wayahe Jember Bangkit</span></p>
                    </div>
                {{-- <div id="chart"></div> --}}
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Total Pengaduan</h5>
                    <p>Jumlah total seluruh laporan pengaduan sampai saat ini</p>
                    <div class="d-flex align-items-center d-flex">
                        <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center me-3">
                            <i class="ti ti-arrow-up-left text-success"></i>
                        </span>
                        <h2 class="text-dark">{{$getTotalPengaduan}}</h2>
                        <p class="fs-3 mb-0 ms-3">Laporan Masyarakat</p>
                        {{-- <h2></h2> --}}
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Total Pengguna / User</h5>
                    <p>Jumlah total seluruh pengguna atau user LPM sampai saat ini</p>
                    <div class="d-flex align-items-center d-flex">
                        <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center me-3">
                            <i class="ti ti-arrow-up-left text-success"></i>
                        </span>
                        <h2 class="text-dark">{{$getTotalUsers}}</h2>
                        <p class="fs-3 mb-0 ms-3">Pengguna LPM</p>
                        {{-- <h2></h2> --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @include("partial.footer")
    </div>
    </div>
  </div>
  @include("partial.script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    @if (Session::has('message'))
        toastr.success("{{Session::get('message')}}");
    @endif
    </script>
</body>

</html>