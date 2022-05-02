@extends('layouts.master_admin')
@section('title')
<title>SIE Desa Sumita - Data Acara - Edit Data Acara</title>
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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Acara - Edit Data Acara</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Edit  Data Acara</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/acara/{{$event->id}}/update" id="" method="POST" >
                            {{ csrf_field() }}
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Judul </label>
                              <input name="title" value="{{$event->title}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Judul"
                              oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                              oninput="this.setCustomValidity('')" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
                                <input name="start" value="{{$event->start}}" type="datetime-local" class="form-control" id="date" aria-describedby="text" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Berakhir</label>
                                <input name="end" value="{{$event->end}}" type="datetime-local" class="form-control" id="date" aria-describedby="text" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input name="keterangan" value="{{$event->keterangan}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Keterangan"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <button type="submit" onclick="return confirm('Simpan Perubahan?')" id="tambahUserButton" class="btn btn-success" >Simpan</button>
                            <a href="/acara" class="btn btn-warning btn-icon-split">
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
