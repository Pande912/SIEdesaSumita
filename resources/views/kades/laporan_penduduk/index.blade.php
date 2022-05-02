@extends('layouts.master_kades')
@section('title')
<title>SIE Desa Sumita - Dahboard Penduduk</title>
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
            <h1 class="h3 mb-5 text-gray-800">Dashboard Penduduk</h1>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                
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
            
                                <div id="grafikPendidikan" ></div>                           
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
            
                                <div id="grafikPekerjaan" ></div>                           
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
            
                                <div id="grafikJenisKelamin" ></div>                           
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
    
    var PendudukHindu = <?php echo json_encode($PendudukHindu)?>;
    var PendudukIslam = <?php echo json_encode($PendudukIslam)?>;
    var PendudukKristen = <?php echo json_encode($PendudukKristen)?>;
    var PendudukBuddha = <?php echo json_encode($PendudukBuddha)?>;
    var PendudukKatolik = <?php echo json_encode($PendudukKatolik)?>;
    var PendudukKonghucu = <?php echo json_encode($PendudukKonghucu)?>;

    
    Highcharts.chart('container', {

        chart: {
                type: 'column'
            },
        title: {
            text: 'Grafik  Penduduk yang dikelompokan Berdasarkan Agama'
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
            name: 'Hindu',
            data: PendudukHindu, 
        },
        {
            name: 'Islam',
            data: PendudukIslam
        },
        {
            name: 'Kristen',
            data: PendudukKristen, 
        },
        {
            name: 'Buddha',
            data: PendudukBuddha, 
        },
        {
            name: 'Katolik',
            data: PendudukKatolik, 
        },
        {
            name: 'Konghucu',
            data: PendudukKonghucu, 
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

<script type="text/javascript">
    var sd = <?php echo json_encode($sd)?>;
    var smp = <?php echo json_encode($smp)?>;
    var sma = <?php echo json_encode($sma)?>;
    var diploma = <?php echo json_encode($diploma)?>;
    var s1 = <?php echo json_encode($s1)?>;
    var s2 = <?php echo json_encode($s2)?>;
    var s3 = <?php echo json_encode($s3)?>;
    var tidakBersekolah = <?php echo json_encode($tidakBersekolah)?>;

    
    Highcharts.chart('grafikPendidikan', {

        chart: {
                type: 'column'
            },
        title: {
            text: 'Grafik  Penduduk yang dikelompokan Berdasarkan Jenjang Pendidikan'
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
            name: 'SD',
            data: sd, 
        },
        {
            name: 'SMP',
            data: smp
        },
        {
            name: 'SMA',
            data: sma, 
        },
        {
            name: 'Diploma',
            data: diploma, 
        },
        {
            name: 'S-1',
            data: s1, 
        },
        {
            name: 'S-2',
            data: s2, 
        }
        ,
        {
            name: 'S-3',
            data: s3, 
        }
        ,
        {
            name: 'Tidak Bersekolah',
            data: tidakBersekolah, 
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

<script type="text/javascript">
    var petani = <?php echo json_encode($petani)?>;
    var pelajar = <?php echo json_encode($pelajar)?>;
    var pegawaiSwasta = <?php echo json_encode($pegawaiSwasta)?>;
    var wiraswasta = <?php echo json_encode($wiraswasta)?>;
    var pns = <?php echo json_encode($pns)?>;
    var pedagang = <?php echo json_encode($pedagang)?>;
    var polisi = <?php echo json_encode($polisi)?>;
    var tni = <?php echo json_encode($tni)?>;
    var dokter = <?php echo json_encode($dokter)?>;
    var lainya = <?php echo json_encode($lainya)?>;
    var belumBekerja = <?php echo json_encode($belumBekerja)?>;


    Highcharts.chart('grafikPekerjaan', {

        chart: {
                type: 'column'
            },
        title: {
            text: 'Grafik  Penduduk yang dikelompokan Berdasarkan Jenis Pekerjaan'
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
            name: 'Petani',
            data: petani, 
        },
        {
            name: 'Pelajar/Mahasiswa',
            data: pelajar
        },
        {
            name: 'Pegawai Swasta',
            data: pegawaiSwasta, 
        },
        {
            name: 'Wiraswasta',
            data: wiraswasta, 
        },
        {
            name: 'PNS',
            data: pns, 
        },
        {
            name: 'Pedagang',
            data: pedagang, 
        }
        ,
        {
            name: 'Polisi',
            data: polisi, 
        }
        ,
        {
            name: 'TNI',
            data: tni, 
        }
        ,
        {
            name: 'Dokter',
            data: dokter, 
        }
        ,
        {
            name: 'Lainya',
            data: lainya, 
        }
        ,
        {
            name: 'Belum Bekerja',
            data: belumBekerja, 
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

<script type="text/javascript">
    var lakiPande = <?php echo json_encode($lakiPande)?>;
    var perempuanPande = <?php echo json_encode($perempuanPande)?>;
    var perempuanSema = <?php echo json_encode($perempuanSema)?>;
    var lakiSema = <?php echo json_encode($lakiSema)?>;
    var perempuanTengah = <?php echo json_encode($perempuanTengah)?>;
    var lakiTengah = <?php echo json_encode($lakiTengah)?>;
    var perempuanSiih = <?php echo json_encode($perempuanSiih)?>;
    var lakiSiih = <?php echo json_encode($lakiSiih)?>;
    var lakiMelayang = <?php echo json_encode($lakiMelayang)?>;
    var perempuanMelayang = <?php echo json_encode($perempuanMelayang)?>;
    var lakiMulung = <?php echo json_encode($lakiMulung)?>;
    var perempuanMulung = <?php echo json_encode($perempuanMulung)?>;
    
    
    Highcharts.chart('grafikJenisKelamin', {

        chart: {
                type: 'column'
            },
        title: {
            text: 'Grafik  Penduduk Berdasarkan Jenis Kelamin per banjar'
        },
        subtitle: {
            text: 'Tahun 2022'
        }
        ,
        
        xAxis: {
            categories: ['Pande', 'Sema', 'Tengah', 'Siih', 'Melayang', 'Mulung'
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
            name: 'Laki-Laki',
            data: [lakiPande, lakiSema, lakiTengah, lakiSiih, lakiMelayang, lakiMulung] 
        },
        {
            name: 'Perempuan',
            data: [perempuanPande, perempuanSema, perempuanTengah, perempuanSiih, perempuanMelayang, perempuanMulung]
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