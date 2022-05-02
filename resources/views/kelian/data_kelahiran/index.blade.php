@extends('layouts.master_kelian')
@section('title')
<title>SIE Desa Sumita -Data Kelahiran</title>
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
                        <a class="dropdown-item" href="/ganti_password_kelian">
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
            <h1 class="h3 mb-5 text-gray-800">Manajemen Data Kelahiran</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Kelahiran</h5>
                </div>
                <div class="card-body">
                    <div class="my-2">
                        <a href="/data_kelahiran/tambah_data" class="btn btn-success btn-icon-split">
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
                        <table class="table table-hover table-sm table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width:5px" scope="col">NO</th>
                                    <th>NOMOR SURAT</th>
                                    <th>TANGGAL SURAT</th>
                                    <th>NAMA</th>
                                    <th>ANAK KE</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>NAMA AYAH</th>
                                    <th>NAMA IBU</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            @foreach ($data_kelahiran as $index => $item)
                            <tbody >
                                <?php $no=1;?>
                                <tr>
                                    <th scope="row">{{ $index + $data_kelahiran->firstItem() }}</th>
                                    <td>{{$item->no_surat}}</td>
                                    <td>{{$item->tgl_surat}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->anak_ke}}</td>
                                    <td>{{$item->tgl_lahir}}</td>
                                    <td>{{$item->tempat_lahir}}</td>
                                    <td>{{$item->jenis_kelamin}}</td>
                                    <td>{{$item->nama_ayah}}</td>
                                    <td>{{$item->nama_ibu}}</td>
                                    <td> 
                                        <a href="/data_kelahiran/{{$item->id}}/edit_data" class="btn btn-info btn-square btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-square btn-sm delete"  permohonanItem-id="{{$item->id}}" >
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $no++ ;?>
                            </tbody>
                            @endforeach
                        </table>
                       
                    </div>
                   {{$data_kelahiran->links()}}
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

@section('sweetalert')
<script>
    $('.delete').click(function(){
        var permohonanItem_id = $(this).attr('permohonanItem-id');
            Swal.fire({
            title: 'Yakin ingin menghapus data?',
            text: "Data yang telah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya,hapus',
            cancelButtonText: 'Batal'

            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/data_kelahiran/"+ permohonanItem_id +"/delete";
            }
            });
        });
</script>
@endsection