<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toko</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      background: #2e282a;
      min-height: 100vh;
      font-family: sans-serif;
      color: white;
      text-align: center;
      font-size: 14px;
    }
    canvas{
      max-height: 500px;
      max-width: 500px;
    }
    .input-block{
      margin-top: 32px;
      font-size:20  px;
    }
    .input-block input{
      border: 0;
      border-radius: 5px;
      padding: 10px;
      font-size: 0.8cm;
      outline: 0;
      margin-left:16px;
    }
  </style>

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
      <a href="/toko" class="logo d-flex align-items-center">
          <img src="{{ asset('logotoko/'.Auth::user()->tokos->logo) }}" alt="">
          <span class="d-none d-lg-block">{{ Auth::user()->tokos->nama_toko }}</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
              </a>
          </li><!-- End Search Icon-->

          <li class="nav-item dropdown">

              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
              </a><!-- End Messages Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                  You have 3 new messages
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Maria Hudson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>4 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Anna Nelson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>6 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                  <a href="#">
                    <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>David Muldon</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>8 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li class="dropdown-footer">
                  <a href="#">Show all messages</a>
                </li>

              </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->


          <li class="nav-item dropdown pe-3">

              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                  data-bs-toggle="dropdown">
                  {{-- <img src="{{ asset('logotoko/'.Auth::user()->tokos->logo) }}" alt="Profile" >
                  <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->username }}</span> --}}
              </a><!-- End Profile Iamge Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                      {{-- <h6>{{ Auth::user()->username }}</h6> --}}
                      <span>Admin</span>

                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>

                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="/adminuser">
                          <i class="bi bi-person"></i>
                          <span>Profilku</span>
                      </a>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>

                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="/logout">
                          <i class="bi bi-box-arrow-right"></i>
                          <span>Logout</span>
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
                  <a href="/datavoucher">
                      <i class="bi bi-circle"></i><span>Data Voucher Dikonfirmasi</span>
                  </a>
              </li>
              <!-- <li>
      <a href="/laris">
        <i class="bi bi-circle"></i><span>Voucher Laris</span>
      </a>
    </li> -->
              <li>
                  <a href="/tolakvoucher">
                      <i class="bi bi-circle"></i><span>Data Voucher ditolak</span>
                  </a>
              </li>
          </ul>
      </li><!-- End Data Nav -->


 <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
            <!-- Sales Card -->
            <div class="col-lg-4 col-md-8">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title"> Kategori </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-lg-4 col-md-8">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title"> Voucher </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-coupon-3-line"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <div class="col-lg-4 col-md-8">

              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Pengunjung </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
          </div>
        </div>
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">


            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">Voucher</h5>

                  <!-- Pie Chart -->
                <canvas id="myChart" data-labels="{{ $dataLabel }}" data-values="{{ $dataValue   }}"></canvas>
                
                <!-- End Pie CHart -->
                

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Voucher</h5>

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
                      <tr class="text-center">
                        <th scope="row">1</th>
                        <td>Baju</td>
                        <td>534</td>
                        <td>500</td>
                      </tr>
                      <tr class="text-center">
                        <th scope="row">2</th>
                        <td>Celana</td>
                        <td>495</td>
                        <td>458</td>
                      </tr>
                      <tr class="text-center">
                        <th scope="row">3</th>
                        <td>Hoodie</td>
                        <td>356</td>
                        <td>325</td>
                      </tr>
                      <tr class="text-center">
                        <th scope="row">4</th>
                        <td>Jaket</td>
                        <td>296</td>
                        <td>264</td>
                      </tr>
                      <tr class="text-center">
                        <th scope="row">5</th>
                        <td>Tas</td>
                        <td>175</td>
                        <td>104</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Recent Sales -->

            <!-- aktivitas -->

          </div>
        </div><!-- End Left side columns -->
        </div>

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <!-- End Recent Activity -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hari</a></li>
                    <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun ini</a></li>
              </ul>
            </div>

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hari</a></li>
                    <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun ini</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title"> Voucher baru diupload</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/icon2/uniqlo1.png" alt="">
                  <h4><a href="#">Voucher Jaket</a></h4>
                  <p>Buruan serbu Voucher 30% khusus Jaket, Buruan kepoin segera. </p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/icon2/uniqlo2.png" alt="">
                  <h4><a href="#">Voucher Sweeter</a></h4>
                  <p>Kepoin dong voucher 50% dari Uniqlo khusus untuk produk Sweeter rajut, Ayo keburu hangus.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/icon2/uniqlo3.png" alt="">
                  <h4><a href="#">Voucher Hoodie</a></h4>
                  <p>ingin badan anda hangat tapi murah, milikilah voucher dari produk kami Spesial Hoodie tebal.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/icon2/uniqlo4.png" alt="">
                  <h4><a href="#">Voucher Celana Jeans</a></h4>
                  <p>ingin memiliki celana jeans yang bagus dan murah, Buruan dapatkan voucher sekarang. </p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/icon2/uniqlo5.png" alt="">
                  <h4><a href="#">Voucher Celana pendek</a></h4>
                  <p>yuk dapatkan voucher celana pendek 30%, Agar lebih hemat dan cermat.</p>
                </div>

              </div><!-- End sidebar recent posts-->
              
              
            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var labels = $('#myChart').data("labels")
    var values = $('#myChart').data("values")
    // console.log(data)
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: labels,
        datasets: [{
          data: values,
          backgroundColor: [
            'rgb(253, 138, 138)',
            'rgb(241, 247, 181)',
            'rgb(158, 161, 212)',
          ],
          borderColor: [
            'rgb(253, 138, 138)',
            'rgb(241, 247, 181)',
            'rgb(158, 161, 212)',
          ],
          borderWidth: 1
        }]
      },
      option: {
        responsive: true
      }
    });
  </script>
</body>

</html>