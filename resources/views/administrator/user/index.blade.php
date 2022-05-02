@extends('layouts.master_admin')
@section('title')
<title>SIE Desa Sumita - Data Pengguna</title>
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
                        <img class=" fluid img-profile rounded-circle"
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
            <h1 class="h3 mb-5 text-gray-800">Pengguna</h1>
           
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Data Pengguna</h4>
                </div>
                <div class="card-body">
                    <div class="my-2">
                        <a href="/user/tambah_user" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                        <div style="float: right">
                            <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
                            <div class="input-group " >
                                <form action="/user" method="GET">
                                 <input type="search" name="search" class="form-control bg-light border-2 small" placeholder="Masukan Pencarian ..."
                                aria-label="Search" aria-describedby="basic-addon2">
                                </form>
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>                       
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>AVATAR</th>
                                    <th>NAMA</th>
                                    <th>USERNAME</th>
                                    <th>BANJAR</th>
                                    <th>ALAMAT</th>
                                    <th>NOMOR HP</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>PERAN</th>
                                    <th>AKSI</th>

                                </tr>
                            </thead>
                            @foreach ($users as $datauser)
                            <tbody>
                                <tr>
                                    <td><img src="storage/images/{{$datauser->avatar}}" width="50" class="img-thumbnail rounded-circle img-fluid"  ></td>
                                    <td>{{$datauser->nama}}</td>
                                    <td>{{$datauser->username}}</td>
                                    <td>{{$datauser->banjar->nama_banjar}}</td>
                                    <td>{{$datauser->alamat}}</td>
                                    <td>{{$datauser->no_HP}}</td>
                                    <td>{{$datauser->jenis_kelamin}}</td>
                                    <td>
                                        @if($datauser->role == 'administrator')
                                       <h5><span class="badge badge-primary">Administrator</span></h5> 
                                        @elseif($datauser->role == 'kelian')
                                        <h5><span class="badge badge-success">Kelian</span></h5>
                                        @elseif($datauser->role == 'kades')
                                       <h5><span class="badge badge-warning">Kades</span></h5>
                                       @endif                                    
                                    </td>
                                    <td> <a href="/user/{{$datauser->id}}/edit" class="btn btn-info btn-square btn-sm">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                       
                    </div>
                    <div style="float-right">
                        {{$users->links()}}
                    </div>
                </div>
            </div>

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
