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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman utama</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item active">Halaman utama</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <section class="section dashboard">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
  
              <!-- Sales Card -->
              <div class="col-lg-3 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="card-body">
                    <h5 class="card-title"> Kategori </h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      {{-- <div class="ps-3">
                          @php
                              $no1=0;
                              $no2=0;
                              $no3=0;
                              $no4=0;
                          @endphp
                          @foreach ($kategori as $kategoris)
                          @php
                              ++$no1
                          @endphp
                          @endforeach
                        <h6>{{ $no1 }}</h6> 
  
                      </div>--}}
                    </div>
                  </div>
  
                </div>
              </div><!-- End Sales Card -->
  
              <!-- Revenue Card -->
              <div class="col-lg-3 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="card-body">
                    <h5 class="card-title"> Voucher </h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                       <i class="bi bi-ticket-perforated"></i>
                      </div>
                      {{-- {{-- <div class="ps-3">
                          @foreach ($voucher as $vouchers)
                          @php
                              ++$no2
                          @endphp
                          @endforeach
                        <h6>{{ $no2 }}</h6>
  
                      </div> --}}
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
  
              <!-- Customers Card -->
              <div class="col-lg-3">
  
                <div class="card info-card sales-card">
  
                  <div class="card-body">
                    <h5 class="card-title">User </h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      {{-- <div class="ps-3">
                          @foreach ($user as $users)
                          @php
                              ++$no3
                          @endphp
                          @endforeach
                        <h6>{{ $no3 }}</h6>
  
                      </div> --}}
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->
  
              <div class="col-lg-3">
  
                <div class="card info-card sales-card">
  
                  <div class="card-body">
                    <h5 class="card-title">Toko </h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-shop"></i>
                      </div>
                      {{-- <div class="ps-3">
                          @foreach ($data as $tokos)
                          @php
                              ++$no4
                          @endphp
                          @endforeach
                        <h6>{{ $no4 }}</h6>
  
                      </div> --}}
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
                    <h5 class="card-title">Laporan</h5>
  
                    <!-- Line Chart -->
                    <div id="reportsChart"></div>
  
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                          series: [{
                            name: 'User berlangganan',
                            data: [35, 42, 55, 62, 75, 82, 95],
                          }, {
                            name: 'User tidak berlangganan',
                            data: [25, 32, 45, 52, 65, 72, 85]
                          }],
                          chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                              show: false
                            },
                          },
                          markers: {
                            size: 4
                          },
                          colors: ['#4154f1', '#2eca6a', '#ff771d'],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100]
                            }
                          },
                          dataLabels: {
                            enabled: false
                          },
                          stroke: {
                            curve: 'smooth',
                            width: 2
                          },
                          xaxis: {
                            type: 'datetime',
                            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                          },
                          tooltip: {
                            x: {
                              format: 'dd/MM/yy HH:mm'
                            },
                          }
                        }).render();
                      });
                    </script>
                    <!-- End Line Chart -->
  
                  </div>
  
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
              <div class="col-12">
              <div class="card">
  
              <div class="card-body">
                <h5 class="card-title"> Aktivitas terbaru <span>| tahun ini</span></h5>
  
                <div class="activity">
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">16-02-2023</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Mengkonfirmasi voucher baju
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">15-02-2023</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      mengpromosikan voucher hoodie kepada pelanggan
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">14-02-2023</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Mengkonfirmasi voucher baju
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">13-02-2023</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Mengpromosikan voucher celana yang telah disetujui
                    </div>
                  </div><!-- End activity item-->
                </div>
  
              </div>
            </div>
              </div>
            </div>
          </div><!-- End Left side columns -->
  
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
  
              <div class="card-body pb-0">
                <h5 class="card-title"> Kategori </h5>
  
                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
  
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'voucher',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [{
                            value: 1048,
                            name: 'Baju'
                          },
                          {
                            value: 735,
                            name: 'Celana'
                          },
                          {
                            value: 580,
                            name: 'Hoodie'
                          }
                        ]
                      }]
                    });
                  });
                </script>
  
              </div>
            </div><!-- End Website Traffic -->
  
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
  
  

</body>

</html>