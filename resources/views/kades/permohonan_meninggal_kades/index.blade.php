@extends('layouts.master_kades')
@section('title')
<title>SIE Desa Sumita - Surat Permohonan Meninggal</title>
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

                <!-- Nav Item - User Information  -->
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
            <h1 class="h3 mb-5 text-gray-800">Surat Permohonan Meninggal</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Surat Permohonan Meninggal</h5>
                </div>
                <div class="card-body">
                    <div class="my-2">
                        <div style="float: right; margin-bottom: 10px">
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
                        <table class="table table-hover table-sm table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width:5px" scope="col">NO</th>
                                    <th>PENDUDUK</th>
                                    <th>TANGGAL MENINGGAL</th>
                                    <th>TEMPAT MENINGGAL</th>
                                    <th>KETERANGAN</th>
                                    <th>DARI BANJAR</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            @foreach ($permohonan_meninggal as $index => $item)
                            
                            <tbody >
                                <?php $no=1;?>
                                <tr>
                                    <th scope="row">{{ $index + $permohonan_meninggal->firstItem() }}</th>
                                    <td>{{$item->penduduk->nama}}</td>
                                    <td>{{$item->tgl_meninggal}}</td>
                                    <td>{{$item->tempat_meninggal}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td><strong>{{$item->user->banjar->nama_banjar}}</strong></td>

                                    <td>
                                        @if($item->status == 'proses')
                                       <h5><span class="badge badge-warning">DALAM PROSES</span></h5> 
                                        @elseif($item->status == 'disetujui')
                                        <h5><span class="badge badge-success">DISETUJUI</span></h5>
                                        @elseif($item->status == 'ditolak')
                                       <h5><span class="badge badge-danger">DITOLAK</span></h5>
                                       @endif                                    
                                    </td>

                                    <td> 
                                        @if ($item->status == 'proses')
                                        <a href="/permohonan_meninggal_kades/{{$item->id}}/lihat_permohonan_kades" class="btn btn-secondary btn-square btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        @elseif($item->status == 'disetujui')
                                        <a href="/permohonan_meninggal/{{$item->id}}/print" target="_blank"  class="btn btn-success btn-square btn-sm">
                                           <span>Cetak</span> <i class="fas fa-print"></i>
                                            </a>
                                        <a href="/permohonan_meninggal_kades/{{$item->id}}/lihat_permohonan_kades" class="btn btn-secondary btn-square btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @elseif($item->status == 'ditolak')
                                        <a href="/permohonan_meninggal_kades/{{$item->id}}/lihat_permohonan_kades" class="btn btn-secondary btn-square btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                <?php $no++ ;?>
                            </tbody>
                            @endforeach
                        </table>
                       
                    </div>
                   {{$permohonan_meninggal->links()}}
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

