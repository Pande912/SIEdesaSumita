@extends('layouts.master_kades')
@section('title')
<title>SIE Desa Sumita - Dashboard Surat</title>
@endsection
@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
            
                
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->username }}</span>
                        <img class=" img fluid img-profile rounded-circle"
                            src="{{url('storage/images/'.Auth::user()->avatar)}}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="/ganti_password">
                            <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                            Ganti Password
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                         Logout
                        <form id="logout-form" class="dropdown-item" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                    </div>
                </li>
            </ul>
        </nav>
         <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard  Surat Permohonan</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Permohonan KK</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$KKcount}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bell fa-2x text-gray-300"></i>
                                </div>
                              
                            </div>
                            <div style="margin-top: 30px" class="row no-gutters align-items-center">
                            <a href="/permohonan_kk_kades" class="card-box-footer "><i class="fa fa-arrow-circle-right fa-2x"></i></a>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Permohonan KTP</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$KTPcount}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bell fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <div style="margin-top: 30px" class="row no-gutters align-items-center">
                                <a href="/permohonan_ktp_kades" class="card-box-footer "><i class="fa fa-arrow-circle-right fa-2x"></i></a>
                             </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Permohonan Lahir</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$lahir_count}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bell fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <div style="margin-top: 30px" class="row no-gutters align-items-center">
                                <a href="/permohonan_lahir_kades" class="card-box-footer "><i class="fa fa-arrow-circle-right fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Permohonan Pindah Datang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pindah_count}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bell fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <div style="margin-top: 30px" class="row no-gutters align-items-center">
                                <a href="/permohonan_pindah_kades" class="card-box-footer "><i class="fa fa-arrow-circle-right fa-2x"></i></a>
                                </div>
                             </div>
                    </div>
                </div>
                
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                        Permohonan Meninggal</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$meninggal_count}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bell fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <div style="margin-top: 30px" class="row no-gutters align-items-center">
                                <a href="/permohonan_meninggal_kades" class="card-box-footer "><i class="fa fa-arrow-circle-right fa-2x"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">


                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Permohonan KK</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="chartKK"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Permohonan KTP</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="chartKTP"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Permohonan Lahir</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myDonutChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Permohonan Pindah Datang</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="chartPindah"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Permohonan Meninggal </h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="chartMeninggal"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; 2021</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- End of Main Content -->
    </div>
</div>
@endsection


@section('script')

<script>
    var donutKK = $('#chartKK');

var dataKK = {
    labels: ["Banjar Mulung ", "Banjar Sema", "Banjar Pande", "Banjar Tengah", "Banjar Siih", "Banjar Melayang"],
    datasets: [
      {
        label: "diagram surat Lahir",
        data:[ {{$KKmulung_count}},
              {{$KKsema_count}},
               {{$KKpande_count}},
                {{$KKtengah_count}},
                {{$KKsiih_count}},
                {{$KKmelayang_count}}

                ],
                
        backgroundColor: [
          "#4e73df",
          "#1cc88a",
          "#36b9cc",
          "#f6c23e",
          "#2E8B57",
          "#01FFFF"
        ],
        borderWidth: [1, 1, 1, 1, 1],
      }
    ]
  }; 

  var options = {
    responsive: true,
    maintainAspectRatio: false,
    cutoutPercentage: 70,
    legend: {
      display: true,
      position: 'bottom',
      labels: {
        fontColor: "#333",
        fontSize: 9,
        boxWidth: 10,
        padding: 12
      }
    }
  };

  var chartKK1 = new Chart(donutKK, {
    type: "doughnut",
    data: dataKK,
    options: options
  });
</script>

<script>
var donutKTP = $('#chartKTP');

var dataKTP = {
    labels: ["Banjar Mulung ", "Banjar Sema", "Banjar Pande", "Banjar Tengah", "Banjar Siih", "Banjar Melayang"],
    datasets: [
      {
        label: "diagram surat Lahir",
        data:[ {{$KTPmulung_count}},
              {{$KTPsema_count}},
               {{$KTPpande_count}},
                {{$KTPtengah_count}},
                {{$KTPsiih_count}},
                {{$KTPmelayang_count}}

                ],
                
        backgroundColor: [
          "#4e73df",
          "#1cc88a",
          "#36b9cc",
          "#f6c23e",
          "#2E8B57",
          "#01FFFF"
        ],
        borderWidth: [1, 1, 1, 1, 1],
      }
    ]
  }; 

  var options = {
    responsive: true,
    maintainAspectRatio: false,
    cutoutPercentage: 70,
    legend: {
      display: true,
      position: 'bottom',
      labels: {
        fontColor: "#333",
        fontSize: 9,
        boxWidth: 10,
        padding: 12
      }
    }
  };

  var chartKTP1 = new Chart(donutKTP, {
    type: "doughnut",
    data: dataKTP,
    options: options
  });
</script>

<script>
var donutLahir = $('#myDonutChart');

var dataLahir = {
    labels: ["Banjar Mulung ", "Banjar Sema", "Banjar Pande", "Banjar Tengah", "Banjar Siih", "Banjar Melayang"],
    datasets: [
      {
        label: "diagram surat Lahir",
        data:[ {{$mulung_count}},
              {{$sema_count}},
               {{$pande_count}},
                {{$tengah_count}},
                {{$siih_count}},
                {{$melayang_count}}

                ],
        backgroundColor: [
          "#4e73df",
          "#1cc88a",
          "#36b9cc",
          "#f6c23e",
          "#2E8B57",
          "#01FFFF"
        ],
        borderWidth: [1, 1, 1, 1, 1],
      }
    ]
  }; 

  var options = {
    responsive: true,
    maintainAspectRatio: false,
    cutoutPercentage: 70,
    legend: {
      display: true,
      position: 'bottom',
      labels: {
        fontColor: "#333",
        fontSize: 9,
        boxWidth: 10,
        padding: 12
      }
    }
  };

  var chart1 = new Chart(donutLahir, {
    type: "doughnut",
    data: dataLahir,
    options: options
  });

</script>

<script>
    var donutPindah = $('#chartPindah');
    
    var dataPindah = {
        labels: ["Banjar Mulung ", "Banjar Sema", "Banjar Pande", "Banjar Tengah", "Banjar Siih", "Banjar Melayang"],
        datasets: [
          {
            label: "diagram surat Lahir",
            data:[ {{$Pindah_mulung_count}},
                  {{$Pindah_sema_count}},
                   {{$Pindah_pande_count}},
                    {{$Pindah_tengah_count}},
                    {{$Pindah_siih_count}},
                    {{$Pindah_melayang_count}}
    
                    ],
                    
            backgroundColor: [
              "#4e73df",
              "#1cc88a",
              "#36b9cc",
              "#f6c23e",
              "#2E8B57",
              "#01FFFF"
            ],
            borderWidth: [1, 1, 1, 1, 1],
          }
        ]
      }; 
    
      var options = {
        responsive: true,
        maintainAspectRatio: false,
        cutoutPercentage: 70,
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            fontColor: "#333",
            fontSize: 9,
            boxWidth: 10,
            padding: 12
          }
        }
      };
    
      var chartPindah1 = new Chart(donutPindah, {
        type: "doughnut",
        data: dataPindah,
        options: options
      });
    </script>

<script>
    var donutMeninggal = $('#chartMeninggal');
    
    var dataMeninggal = {
        labels: ["Banjar Mulung ", "Banjar Sema", "Banjar Pande", "Banjar Tengah", "Banjar Siih", "Banjar Melayang"],
        datasets: [
          {
            label: "diagram surat Lahir",
            data:[ {{$Meninggal_mulung_count}},
                  {{$Meninggal_sema_count}},
                   {{$Meninggal_pande_count}},
                    {{$Meninggal_tengah_count}},
                    {{$Meninggal_siih_count}},
                    {{$Meninggal_melayang_count}}
    
                    ],
                    
            backgroundColor: [
              "#4e73df",
              "#1cc88a",
              "#36b9cc",
              "#f6c23e",
              "#2E8B57",
              "#01FFFF"
            ],
            borderWidth: [1, 1, 1, 1, 1],
          }
        ]
      }; 
    
      var options = {
        responsive: true,
        maintainAspectRatio: false,
        cutoutPercentage: 70,
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            fontColor: "#333",
            fontSize: 9,
            boxWidth: 10,
            padding: 12
          }
        }
      };
    
      var chartMeninggal1 = new Chart(donutMeninggal, {
        type: "doughnut",
        data: dataMeninggal,
        options: options
      });
    </script>
    
    
@endsection