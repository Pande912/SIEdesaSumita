@extends('layouts.master_admin')
@section('title')
<title>SIE Desa Sumita - Data Acara</title>
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
                        <img class=" img fluid img-profile rounded-circle"
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
            <h1 class="h3 mb-2 text-gray-800">Event</h1>
            <h6 class="h6 mb-3 text-gray-800">Event - Data Acara</h6>          
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/event" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-calendar"></i>
                        </span>
                        <span class="text">Agenda</span>
                    </a>  
                    <a href="/acara" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="text">Data Acara</span>
                    </a>          
                </div>
                
                <div class="card-body">
                    <div class="my-2">
                        <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#exampleModal">
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
                    
                    <div class="table-responsive" style="margin-top: 15px">
                        <table class="table table-hover table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width:5px" scope="col">NO</th>
                                    <th>JUDUL</th>
                                    <th>TANGGAL MULAI</th>
                                    <th>TANGGAL BERAKHIR</th>
                                    <th>KETERANGAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            @foreach ($event as $index => $eventItem)
                            <tbody>
                                <tr>
                                    <?php $no=1;?>
                                    <th scope="row">{{ $index + $event->firstItem() }}</th>
                                    <td>{{$eventItem->title}}</td>
                                    <td>{{$eventItem->start}}</td>
                                    <td>{{$eventItem->end}}</td>
                                    <td>{{$eventItem->keterangan}}</td>
                                    <td> <a href="/acara/{{$eventItem->id}}/edit"  class="btn btn-info btn-square btn-sm">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                    <a href="#" class="btn btn-danger btn-square btn-sm delete"  eventItem-id="{{$eventItem->id}}" >
                                        <i class="fas fa-trash"></i>
                                    </a>
                                   </td>
                                   <?php $no++ ;?>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div style="float-right">
                        {{$event->links()}}
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Tambah Data Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/event/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Judul</label>
                  <input name="title" type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required placeholder="Judul"
                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                  oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
                    <input name="start" type="datetime-local" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required placeholder=""
                    oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                    oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Berakhir</label>
                    <input name="end" type="datetime-local" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required placeholder=""
                    oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                    oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" required placeholder="keterangan"
                    oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                    oninput="this.setCustomValidity('')"></textarea>
                </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div> 
    </div> 
    </div> 
@endsection

@section('sweetalert')
<script>
    $('.delete').click(function(){
        var eventItem_id = $(this).attr('eventItem-id');
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
                window.location = "/acara/"+ eventItem_id +"/delete";
            }
            });
        });
</script>
@endsection
