@extends('layouts.master_kelian')
@section('title')
<title>SIE Desa Sumita - Surat Permohonan KTP - Edit Data Surat Permohonan </title>
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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Surat Permohonan KTP - Edit Data Surat</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Edit  Data Permohonan KTP</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/permohonan_ktp/{{$permohonan_ktp->id}}/update" id="tambahUserForm" method="POST" >
                            {{ csrf_field() }}
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap Pemohon </label>
                                <input name="nama_pemohon" value="{{$permohonan_ktp->nama_pemohon}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Nama Lengkap"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">NIK</label>
                                <input name="nik" type="text" value="{{$permohonan_ktp->nik}}" class="form-control"   aria-describedby="emailHelp" required placeholder="NIK"
                                oninvalid="this.setCustomValidity('Kolom tanggal lahir Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">alamat </label>
                                <input name="alamat" type="text" value="{{$permohonan_ktp->alamat}}" class="form-control" id="text" aria-describedby="text" required placeholder="Tempat Lahir"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>

                               <div class="form-group">
                                <label for="exampleFormControlSelect">Alasan</label>
                                <select name="alasan" class="form-control" id="exampleFormControlSelect">
                               <option value="Baru" @if ($permohonan_ktp->alasan == 'Baru') selected @endif>Baru</option>
                               <option value="Hilang" @if ($permohonan_ktp->alasan == 'Hilang') selected @endif>Hilang</option>
                               <option value="Perbaikan" @if ($permohonan_ktp->alasan == 'Perbaikan') selected @endif>Perbaikan</option>
                                 </select>
                                </div>
                          <button type="submit" onclick="return confirm('Simpan Perubahan?')"  class="btn btn-success">Simpan</button>
                            <a href="/permohonan_ktp" class="btn btn-warning btn-icon-split">
                                <span class="text">Batal</span>
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