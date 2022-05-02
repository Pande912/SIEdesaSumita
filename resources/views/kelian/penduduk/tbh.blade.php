@extends('layouts.master_kelian')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@section('title')
<title>SIE Desa Sumita -Data Penduduk-Tambah Data Penduduk</title>
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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Penduduk - Tambah Penduduk</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Tambah  Data Penduduk</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/penduduk/create" id="tambahUserForm" method="POST" >
                            {{ csrf_field() }}
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Penduduk </label>
                              <input name="nama" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Nama Penduduk"
                              oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                              oninput="this.setCustomValidity('')" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect">Nomer KK</label>
                                <select name="kartu_kk_id" class="form-control" id="kk">
                                    @foreach ($noKK as $item)
                                    <option value="{{$item->id}}">{{$item->nomer_KK}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIK </label>
                                <input name="nik" type="text" class="form-control" id="text" aria-describedby="text" required placeholder=" NIK"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                             
                              <div class="form-group">
                                <label for="exampleFormControlSelect">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect">
                               <option value="laki-laki">laki-laki</option>
                               <option value="perempuan">perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Hubungan Keluarga</label>
                                <input name="hubungan_keluarga" type="text" class="form-control" id="text" aria-describedby="text" required placeholder=" Hubungan keluarga"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect">Pilih Agama </label>
                                <select name="agama" class="form-control" id="exampleFormControlSelect"required placeholder="Agama"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                               <option value="Hindu">Hindu</option>
                               <option value="Islam">Islam</option>
                               <option value="Kristen">Kristen</option>
                               <option value="Buddha">Buddha</option>
                               <option value="Katolik">Katolik</option>
                               <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat </label>
                                <input name="alamat" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Alamat"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect">Pilih Jenjang Pendidikan</label>
                                <select name="pendidikan" class="form-control" id="exampleFormControlSelect"required placeholder="Pendidikan"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                               <option value="SD">SD</option>
                               <option value="SMP">SMP</option>
                               <option value="SMA/SMK">SMA/SMK</option>
                               <option value="Diploma">Diploma</option>
                               <option value="S-1">S-1</option>
                               <option value="S-2">S-2</option>
                               <option value="S-3">S-3</option>
                               <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect">Pilih Pekerjaan</label>
                                <select name="pekerjaan" class="form-control" id="exampleFormControlSelect"required placeholder="Pekerjaan"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                               <option value="Petani">Petani</option>
                               <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                               <option value="Pegawai Swasta">Pegawai Swasta</option>
                               <option value="Wiraswasta">Wiraswasta</option>
                               <option value="PNS">PNS</option>
                               <option value="Pedagang">Pedagang</option>
                               <option value="Polisi">Polisi</option>
                               <option value="TNI">TNI</option>
                               <option value="Dokter">Dokter</option>
                               <option value="Lainya">Lainya</option>
                               <option value="Belum Bekerja">Belum Bekerja</option>
                                </select>
                            </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Ayah </label>
                                <input name="nama_ayah" type="text" class="form-control" id="text" aria-describedby="text" required placeholder=" Nama ayah"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Ibu</label>
                                <input name="nama_ibu" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Nama ibu"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom tanggal lahir Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Tempat Lahir</label>
                                <input name="tempat_lahir" type="text" class="form-control" id="text" aria-describedby="text" required placeholder="Tempat lahir"
                                oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')" >
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Terdaftar</label>
                                <input name="tgl_terdaftar" type="date" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required placeholder=""
                                oninvalid="this.setCustomValidity('Kolom  Tidak Boleh Kosong')"
                                oninput="this.setCustomValidity('')">
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Meninggal</label>
                                <input name="tgl_meninggal" type="date" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" >
                            </div>
                            <div class="form-group mb-5">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Pindah</label>
                                <input name="tgl_pindah" type="date" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" >
                            </div>
                            <div class="form-group">
                                <p> Status Kepala Keluarga</p>
                                  <input type="radio" id="html" name="sts_kpl_keluarga" value="0">
                                  <label for="html">Iya</label>
                                  <input type="radio" id="css" name="sts_kpl_keluarga" value="1">
                                  <label for="css">Bukan</label>
                            </div>
                            <button type="submit"  class="btn btn-success">Tambah Data</button>
                            <a href="/penduduk" class="btn btn-warning btn-icon-split">
                                <span class="text">Batal</span>
                            </a>
                        </form>
                       
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

@section('select_picker_script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#kk').select2();
    });
</script>

@endsection

