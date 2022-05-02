@extends('layouts.master_kelian')
@section('title')
<title>SIE Desa Sumita - Surat Permohonan Meninggal - Lihat Data Surat Permohonan </title>
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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Surat Permohonan Meninggal - Lihat Data Surat</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Lihat  Data Permohonan Meninggal</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/permohonan_Meninggal/{{$permohonan_meninggal->id}}/update" id="EditForm" method="POST" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                
                                <label for="exampleInputEmail1" class="form-label">Penduduk</label>
                                <input name="penduduk_id" disabled id="disabledTextInput" value="{{$permohonan_meninggal->penduduk->nama}}" type="text" class="form-control"   aria-describedby="emailHelp" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom tanggal lahir Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Meninggal</label>
                                <input name="tgl_meninggal" disabled value="{{$permohonan_meninggal->tgl_meninggal}}" type="date" class="form-control"   aria-describedby="emailHelp" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom tanggal lahir Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tempat Meninggal</label>
                                <input  name="tempat_meninggal" disabled value="{{$permohonan_meninggal->tempat_meninggal}}"  class="form-control" id="exampleFormControlTextarea1" rows="3" required placeholder="Keterangan"
                                oninvalid="this.setCustomValidity('Kolom ingTidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <input  name="keterangan" disabled value="{{$permohonan_meninggal->keterangan}}"  class="form-control" id="exampleFormControlTextarea1" rows="3" required placeholder="Keterangan"
                                oninvalid="this.setCustomValidity('Kolom ingTidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Status Permohonan</label>
                                <input  name="status" disabled value="{{$permohonan_meninggal->status}}"  class="form-control" id="exampleFormControlTextarea1" rows="3" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom ingTidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                              </div>

                            
                            
                            <a href="/permohonan_Meninggal" class="btn btn-success btn-icon-split">
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

