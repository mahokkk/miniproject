<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toko</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon2/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/icon2/logo.png" alt="">
        <span class="d-none d-lg-block">UNIQLO</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profilku</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Pengaturan akun</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>butuh bantuan?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-login.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>keluar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
        <span>Halaman Utama</span>
      </a>
    </li><!-- End Dashboard Nav -->
    
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#data-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard-data"></i><span>Voucher</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="data-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/voucher">
              <i class="bi bi-circle"></i><span>Data Voucher</span>
            </a>
          </li>
          <!-- <li>
            <a href="/laris">
              <i class="bi bi-circle"></i><span>Voucher Laris</span>
            </a>
          </li> -->
          <li>
            <a href="/konfirmasi">
              <i class="bi bi-circle"></i><span>Voucher dikonfirmasi</span>
            </a>
          </li>
          <li>
            <a href="/tolak">
              <i class="bi bi-circle"></i><span>Voucher ditolak</span>
            </a>
          </li>
        </ul>
      </li><!-- End Data Nav -->

      <li class="nav-item">
        <a href="/kategori" class="nav-link collapsed" data-bs-toggle="collapse">
          <i class="bi bi-layout-text-window-reverse"></i><span>Kategori</span>
        </a>
        </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/login">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Masuk akun</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Voucher Konfirmasi</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Halaman utama</a></li>
            <li class="breadcrumb-item active">Voucher</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
          <div class="col-lg-6  w-100">
            <div class="card shadow mb-4">
              <div class="card-body">
                <h5 class="card-title">Voucher Konfirmasi</h5>
              <div class="row">
              @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
               {{$message}}
            </div>
            @endif
              
              <div class="card-body">
                  <div class="table-responsive text-center">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Gambar Voucher</th>
                                  <th scope="col">Nama Voucher</th>
                                  <th scope="col">Keterangan</th>
                                  <th scope="col">Kategori</th>
                                  <th scope="col">Stok</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Masa Berlaku</th>
                              </tr>
                          </thead>
                          <tbody>
                            @php 
                            $no = 0;
                            @endphp

                            @foreach ($data as $index=>$row)
                            <tr>
                                <th scope="col">{{ ++$no}}</th>
                                <td>
                                    <img src="{{ asset('gambarvoucher/'.$row->gambar) }}" alt="" style="width: 100px; height: 100px;">
                                </td>
                                <td>{{ $row->nama_voucher }}</td>
                                <td style="max-width: 150px;">{{ $row->keterangan }}</td>
                                <td>{{ $row->kategori }}</td>
                                <td>{{ $row->stok }}</td>
                                <td><span class="badge text-bg-success">{{ $row->status }}</span></td>
                                <td>{{ $row->masa_berlaku }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                          </table>
                      </table>
                  </div>
              </div>
              </div>
          </div>
      </div>
          </div>
        </div>
  
      </section>
  
    </main><!-- End #main -->

    <!-- <main id="main" class="main">

<div class="pagetitle">
  <h1>Voucher dikonfirmasi</h1>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-6  w-100">

      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Voucher terlaris</h5>
            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Jumlah voucher</th>
                  <th scope="col">Total voucher yang digunakan</th>
                </tr>
              </thead>
              <tbody>
               @php
               $no = 0;
               @endphp

               @foreach ($data as $row)
               <tr>
                <th scope="col">{{ ++$no }}</th>
                <td>{{ $row->kategori }}</td>
                <td>{{ $row->jumlah_voucher }}</td>
                <td>{{ $row->voucher_digunakan }}</td>
               </tr>
               @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>

</section>

</main> -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $('.delete').click( function(){
        var vaoucherid = $(this).attr('data-id');
        swal({
  title: "Anda Yakin Ingin Menghapus Ini?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/delete/"+vaoucherid+""
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
});
  </script>
  <script>
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
  </script>

</body>

</html>