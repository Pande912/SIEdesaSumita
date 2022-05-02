@extends('layouts.master_kades')
@section('title')
<title>SIE Desa Sumita - Surat Permohonan KK - Lihat Data Surat Permhohonan </title>
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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Surat Permohonan KK - Lihat Data Surat</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Lihat  Data Permohonan KK</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/permohonan_kk/{{$permohonan_kk->id}}/update" id="tambahUserForm" method="POST" >
                            {{ csrf_field() }}
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap Pemohon </label>
                                <input name="nama" type="text" readonly value="{{$permohonan_kk->nama}}" class="form-control" id="text" aria-describedby="text" required placeholder="Nama Lengkap"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">NIK</label>
                                <input name="nik" type="text" readonly value="{{$permohonan_kk->nik}}" class="form-control"   aria-describedby="emailHelp" required placeholder="NIK"
                                oninvalid="this.setCustomValidity('Kolom tanggal lahir Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Nomer KK Lama</label>
                                <input name="no_kk_lama" type="text" readonly value="{{$permohonan_kk->no_kk_lama}}" class="form-control"   aria-describedby="emailHelp" required placeholder="Nomer KK Lama"
                                oninvalid="this.setCustomValidity('Kolom tanggal lahir Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">alamat </label>
                                <input name="alamat" type="text" readonly value="{{$permohonan_kk->alamat}}" class="form-control" id="text" aria-describedby="text" required placeholder="Alamat"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="mb-5">
                              <label for="exampleInputEmail1" class="form-label">Alasan Permohonan </label>
                              <input name="alasan" type="text" readonly value="{{$permohonan_kk->alasan}}" class="form-control" id="text" aria-describedby="text" required placeholder="Alasan Permohonan"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <label for="exampleInputEmail1" class="form-label">Daftar Keluarga Yang ikut </label>
                              <div class="table-responsive">
                                <table class="table table-hover table-sm table-borderless mb-5"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>Masa Berlaku KTP</th>
                                            <th>Shdk</th>
                                        </tr>
                                    </thead>
                                    @foreach ($permohonan_kk->detail_permohonan_kk as $no => $KK_item)
                                    <tbody>
                                        <tr>
                                            <td>{{ ++$no }}</td> 
                                            <td>{{$KK_item->nik}}</td>
                                            <td>{{$KK_item->nama}}</td>
                                            <td>{{$KK_item->masa_berlaku_ktp}}</td>
                                            <td>{{$KK_item->shdk}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                               
                            </div>
                            <a onclick="return confirm('Yakin Menyetujui Permohonan ini?')" href="{{url('permohonan_kk_kades/konfirmasi_setuju/'.$permohonan_kk->id, [])}}" class="btn btn-success btn-icon-split">
                                <span class="text">Setuju</span>
                            </a>
                            <a onclick="return confirm('Yakin Menolak Permohonan ini?')" href="{{url('permohonan_kk_kades/konfirmasi_tolak/'.$permohonan_kk->id, [])}}" class="btn btn-danger btn-icon-split">
                                <span class="text">Tolak</span>
                            </a>
                            <a href="/permohonan_kk_kades" class="btn btn-secondary btn-icon-split">
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

