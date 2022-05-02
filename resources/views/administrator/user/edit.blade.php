@extends('layouts.master_admin')
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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Pengguna - Edit Data Pengguna</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Edit  Data Pengguna</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/user/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama </label>
                              <input name="nama" value="{{$user->nama}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Nama"
                              oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                              oninput="this.setCustomValidity('')" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input name="username" value="{{$user->username}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Username"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect">Banjar/Dusun</label>
                                <select name="banjar_id" class="form-control" id="banjar_id">
                                    @foreach ($ban as $item)
                                    <option value="{{$item->id}}">{{$item->nama_banjar}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect">Password</label>
                                <input name="password"  type="password" class="form-control" id="" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input name="alamat" value="{{$user->alamat}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Alamat"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                                <input name="no_HP" value="{{$user->no_HP}}" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Nomor HP"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect">
                               <option value="laki-laki" @if ($user->jenis_kelamin == 'laki-laki') selected @endif>laki-laki</option>
                               <option value="perempuan" @if ($user->jenis_kelamin == 'perempuan') selected @endif>perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect">Pilih Peran pengguna</label>
                                <select name="role" class="form-control" id="exampleFormControlSelect">
                               <option value="kelian"  @if ($user->role == 'kelian') selected @endif>kelian</option>
                               <option value="kades"  @if ($user->role == 'kades') selected @endif>kades</option>
                               <option value="administrator" @if ($user->administrator == 'administrator') selected @endif>administrator</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Pilih Avatar</label>
                                <input name="avatar" type="file" class="form-control" id="avatar" required>
                            </div>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Simpan Perubahan?')"> Simpan</button>
                            <a href="/user" class="btn btn-warning btn-icon-split">
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

