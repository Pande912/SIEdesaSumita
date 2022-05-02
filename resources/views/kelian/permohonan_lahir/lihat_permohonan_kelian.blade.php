@extends('layouts.master_kelian')
@section('title')
<title>SIE Desa Sumita - Surat Permohonan Lahir - Lihat Data Surat Permohonan </title>
@endsection
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
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
                        <img class="img-profile rounded-circle"
                            src="{{url('storage/images/'.Auth::user()->avatar)}}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>

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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Surat Permohonan Lahir - Lihat Data Surat</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Lihat  Data Permohonan Lahir</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/permohonan_lahir/create" id="tambahUserForm" method="POST" >
                            {{ csrf_field() }}
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama </label>
                                <input name="nama" disabled value="{{$permohonan_lahir->nama}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Nama"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input name="tgl_lahir" disabled value="{{$permohonan_lahir->tgl_lahir}}" type="date" class="form-control"   aria-describedby="emailHelp" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom tanggal lahir Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tempat Lahir </label>
                                <input name="tempat_lahir" disabled value="{{$permohonan_lahir->tempat_lahir}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Tempat Lahir"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat </label>
                                <input name="alamat" type="text" disabled value="{{$permohonan_lahir->alamat}}" class="form-control" id="text" aria-describedby="text" required placeholder="Alamat"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin </label>
                                <input name="jenis_kelamin" type="text"  disabled value="{{$permohonan_lahir->jenis_kelamin}}" class="form-control" id="text" aria-describedby="text" required placeholder="jenis_kelamin"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama  Ayah </label>
                                <input name="nama_ayah" type="text"  disabled value="{{$permohonan_lahir->nama_ayah}}" class="form-control" id="text" aria-describedby="text" required placeholder="jenis_kelamin"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama  Ibu </label>
                                <input name="nama_ibu" type="text"  disabled value="{{$permohonan_lahir->nama_ibu}}" class="form-control" id="text" aria-describedby="text" required placeholder="jenis_kelamin"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Anak ke- </label>
                                <input name="anak_ke" type="text"  disabled value="{{$permohonan_lahir->anak_ke}}" class="form-control" id="text" aria-describedby="text" required placeholder="Anak ke-"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Saksi 1 </label>
                                <input name="nama_saksi_1" type="text"  disabled value="{{$permohonan_lahir->nama_saksi_1}}" class="form-control" id="text" aria-describedby="text" required placeholder="Nama Saksi 1"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat Saksi 1 </label>
                                <input name="alamat_saksi_1" type="text"  disabled value="{{$permohonan_lahir->alamat_saksi_1}}" class="form-control" id="text" aria-describedby="text" required placeholder="Alamat Saksi 1"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pekerjaan Saksi 1 </label>
                                <input name="pekerjaan_saksi_1" disabled value="{{$permohonan_lahir->pekerjaan_saksi_1}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Pekerjaan Saksi 1"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Saksi 2 </label>
                                <input name="nama_saksi_2" type="text" disabled value="{{$permohonan_lahir->nama_saksi_2}}" class="form-control" id="text" aria-describedby="text" required placeholder="Nama Saksi 2"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat Saksi 2 </label>
                                <input name="alamat_saksi_2" type="text" disabled value="{{$permohonan_lahir->alamat_saksi_2}}" class="form-control" id="text" aria-describedby="text" required placeholder="Alamat Saksi 2"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pekerjaan Saksi 2 </label>
                                <input name="pekerjaan_saksi_2" type="text" disabled value="{{$permohonan_lahir->pekerjaan_saksi_2}}" class="form-control" id="text" aria-describedby="text" required placeholder="Pekerjaan Saksi 2"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>

                              <a href="/permohonan_lahir" class="btn btn-success btn-icon-split">
                                <span class="text">Kembali</span>
                            </a>
                        </form>
                       
                    </div>
                    
                </div>
            </div>
        
        </div>
               
            <footer class="sticky-footer bg-white">


                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2021</span>
                    </div>
                </div>
            </footer>
    </div>
</div>


  

@endsection
 <!-- Footer -->

<!-- End of Footer -->

@section('select_picker_script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pd').select2();
    });
</script>
<script>
    $(document).ready(function() {
        $('#pdi').select2();
    });
</script>

@endsection