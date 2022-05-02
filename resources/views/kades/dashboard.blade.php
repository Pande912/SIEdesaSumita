@extends('layouts.master_kades')
@section('title')
<title>SIE Desa Sumita - Dashboard Kades</title>
@endsection
@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->username }}</span>
                        <img class="img-profile rounded-circle"
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
        <div class="container-fluid">
            <h1 class="h3 mb-5 text-gray-800">Dashboard</h1>
            <h5 class="m-0 font-weight-bold text-primary mb-4"> Selamat Datang, {{ Auth::user()->nama }} </h5>

            <div class="row">
                

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Jumlah  Penduduk Terkini</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_penduduk_count}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Jumlah  Kepala Keluarga</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalKKcount}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file fa-2x text-gray-300"></i>
                                </div>
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
                                        Total Kematian</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_kematian_count}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
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
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Kelahiran
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$total_kelahiran_count}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-heart fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                        Total Penduduk Pindah</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_kepindahan_count}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa- fa-angle-double-right fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Total Penduduk Datang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_kedatangan_count}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa- fa-angle-double-left fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik Penduduk</h6>
                           
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
            
                                <div id="container" ></div>                           
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik Penduduk </h6>
                           
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
            
                                <div id="grafik_penduduk" ></div>                           
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik Penduduk </h6>
                           
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
            
                                <div id="grafikKK" ></div>                           
                        </div>
                    </div>
                </div>

                

                <!-- Pie Chart -->
               
            </div>


       
    </div>
</div>
@endsection

@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

    var chartKematian = <?php echo json_encode($chartKematian)?>;
    var chartKelahiran = <?php echo json_encode($chartKelahiran)?>; 
    var chartKedatangan = <?php echo json_encode($chartKedatangan)?>;
    var chartKepindahan = <?php echo json_encode($chartKepindahan)?>;

    

    Highcharts.chart('container', {
        title: {
            text: 'Grafik Kematian, Kelahiran, Kedatangan dan Kepindahan Penduduk Desa Sumita'
        },

        subtitle: {
            text: 'Tahun 2022'
        }
        ,
        
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: ' '
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Meninggal',
            data: chartKematian
        }, 
        {  
            name: 'Lahir',
             data: chartKelahiran
        }, 
        
        {
            name: 'Datang',
            data: chartKedatangan

        },
        {
            name: 'Pindah',
            data: chartKepindahan

        }
        
         ],  
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>

<script>
    
    var PendudukLaki = <?php echo json_encode($PendudukLaki)?>;
    var PendudukPerempuan = <?php echo json_encode($PendudukPerempuan)?>;

    
    Highcharts.chart('chart1', {

        chart: {
                type: 'column'
            },
        title: {
            text: 'Grafik Penduduk Berdasarkan Jenis Kelamin'
        },
        subtitle: {
            text: 'Tahun 2022'
        }
        ,
        
        xAxis: {
            categories: [''
            ]
        },
        yAxis: {
            title: {
                text: ' '
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Laki-laki',
            data: PendudukLaki, 
        },
        {
            name: 'Perempuan',
            data: PendudukPerempuan
        }

        
         ],  
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>


<script>
    
    var kksema = <?php echo json_encode($kksema)?>;
    var kkpande = <?php echo json_encode($kkpande)?>;
    var kktengah = <?php echo json_encode($kktengah)?>;
    var kksiih = <?php echo json_encode($kksiih)?>;
    var kkmelayang = <?php echo json_encode($kkmelayang)?>;
    var kkmulung = <?php echo json_encode($kkmulung)?>;

    
    Highcharts.chart('grafikKK', {

        chart: {
                type: 'column'
            },
        title: {
            text: 'Grafik  Keluarga (KK) Berdasarkan Banjar'
        },
        subtitle: {
            text: 'Tahun 2022'
        }
        ,
        
        xAxis: {
            categories: [''
            ]
        },
        yAxis: {
            title: {
                text: ' '
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Sema',
            data: kksema, 
        },
        {
            name: 'Pande',
            data: kkpande
        },
        {
            name: 'Tengah',
            data: kktengah, 
        },
        {
            name: 'Siih',
            data: kksiih, 
        },
        {
            name: 'Melayang',
            data: kkmelayang, 
        },
        {
            name: 'Mulung',
            data: kkmulung, 
        }
         ],  
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>

<script>
    
    var pedudukSema = <?php echo json_encode($pedudukSema)?>;
    var pedudukPande = <?php echo json_encode($pedudukPande)?>;
    var pedudukTengah = <?php echo json_encode($pedudukTengah)?>;
    var pedudukSiih = <?php echo json_encode($pedudukSiih)?>;
    var pedudukMelayang = <?php echo json_encode($pedudukMelayang)?>;
    var pedudukMulung = <?php echo json_encode($pedudukMulung)?>;

    
    Highcharts.chart('grafik_penduduk', {

        chart: {
                type: 'column'
            },
        title: {
            text: 'Grafik  Penduduk Desa Sumita  Berdasarkan Banjar'
        },
        subtitle: {
            text: 'Tahun 2022'
        }
        ,
        
        xAxis: {
            categories: [''
            ]
        },
        yAxis: {
            title: {
                text: ' '
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Sema',
            data: pedudukSema, 
        },
        {
            name: 'Pande',
            data: pedudukPande,
        },
        {
            name: 'Tengah',
            data: pedudukTengah, 
        },
        {
            name: 'Siih',
            data: pedudukSiih, 
        },
        {
            name: 'Melayang',
            data: pedudukMelayang, 
        },
        {
            name: 'Mulung',
            data: pedudukMulung, 
        }
         ],  
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
@endsection