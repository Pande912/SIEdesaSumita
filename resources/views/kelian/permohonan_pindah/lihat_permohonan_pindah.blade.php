@extends('layouts.master_kelian')
@section('title')
<title>SIE Desa Sumita - Surat Permohonan Pindah - Lihat Data Surat Permohonan </title>
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
            <h6 class="h6 mb-5 text-gray-800">Manajemen Data Surat Permohonan Pindah - Lihat Data Surat</h6>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Lihat  Data Permohonan Pindah</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="/permohonan_Pindah/{{$permohonan_pindah->id}}/update" id="tambahUserForm" method="POST" >
                            {{ csrf_field() }}
                            <div class="row"  style="margin-bottom: 50px">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Surat</label>
                              <input type="text" value="{{$permohonan_pindah->jenis_surat}}" readonly name="kk_lama" class="form-control form-control-sm" required placeholder="Nomor KK"
                              oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                              oninput="this.setCustomValidity('')">
                                </div>
                              </div>
                              <div class="row"  style="margin-bottom: 50px">
                              
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Keterangan Surat</label>
                              <input type="text" value="{{$permohonan_pindah->keterangan_surat}}" readonly name="kk_lama" class="form-control form-control-sm" required placeholder="Nomor KK"
                              oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                              oninput="this.setCustomValidity('')">
                                </div>

                              </div>

                              <div class="row"  style="margin-bottom: 3px">
                              
                                <div class="col">
                                   <p><strong>DATA DAERAH ASAL</strong> </p>
                                </div>

                              </div>


                            <div class="row" style="margin-bottom: 15px">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nomor KK</label>
                                  <input type="text" value="{{$permohonan_pindah->kk_lama}}" readonly name="kk_lama" class="form-control form-control-sm" required placeholder="Nomor KK"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nama Kepala Keluarga</label>
                                  <input type="text" name="kepala_keluarga_lama" readonly value="{{$permohonan_pindah->kepala_keluarga_lama}}" class="form-control form-control-sm" required placeholder="Nama Kepala Keluarga"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input type="text" name="alamat_lama" readonly value="{{$permohonan_pindah->alamat_lama}}" class="form-control form-control-sm" required placeholder="Alamat"
                                    oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                    oninput="this.setCustomValidity('')">
                                  </div>
                              </div>

                              <div class="row" style="margin-bottom: 15px">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Banjar</label>
                                  <input type="text" name="banjar_lama" readonly value="{{$permohonan_pindah->banjar_lama}}" class="form-control form-control-sm" required placeholder="Banjar"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                                  <input type="text" name="kelurahan_lama" readonly value="{{$permohonan_pindah->kelurahan_lama}}" class="form-control form-control-sm" required placeholder="Kelurahan"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">NIK Pemohon</label>
                                    <input type="text" name="nik_pemohon" readonly value="{{$permohonan_pindah->nik_pemohon}}" class="form-control form-control-sm" required placeholder="NIK Pemohon"
                                    oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                    oninput="this.setCustomValidity('')">
                                  </div>
                              </div>

                              <div class="row" style="margin-bottom: 50px">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                  <input type="text" name="nama_pemohon" readonly value="{{$permohonan_pindah->nama_pemohon}}" class="form-control form-control-sm" required placeholder="Nama Lengkap"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Telepon</label>
                                  <input type="text" name="telepon" readonly value="{{$permohonan_pindah->telepon}}" class="form-control form-control-sm" required placeholder="Telepon"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                                  <input type="text" name="kode_pos" readonly value="{{$permohonan_pindah->kode_pos}}" class="form-control form-control-sm" required placeholder="Kode Pos"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                            </div>

                            <div class="row"  style="margin-bottom: 3px">
                              
                                <div class="col">
                                   <p><strong>DATA DAERAH TUJUAN</strong> </p>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: 15px">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Status Nomor KK</label>
                                  <input type="text" name="kode_pos" readonly value="{{$permohonan_pindah->status_kk}}" class="form-control form-control-sm" required placeholder="Kode Pos"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nomor KK</label>
                                  <input type="text" name="kk_baru" readonly value="{{$permohonan_pindah->kk_baru}}" class="form-control form-control-sm" required placeholder="Nomor KK"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">NIK Kepala Keluarga</label>
                                    <input type="text" name="nik_kepala_keluarga_baru" readonly value="{{$permohonan_pindah->nik_kepala_keluarga_baru}}" class="form-control form-control-sm" required placeholder="NIK Kepala Keluarga"
                                    oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                    oninput="this.setCustomValidity('')">
                                  </div>
                              </div>
                              <div class="row" style="margin-bottom: 15px">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nama Kepala Keluarga </label>
                                  <input type="text" name="kepala_keluarga_baru" readonly value="{{$permohonan_pindah->kepala_keluarga_baru}}" class="form-control form-control-sm" required placeholder="Nama Kepala Keluarga"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Kedatangan</label>
                                  <input type="date" name="tgl_kedatangan" readonly value="{{$permohonan_pindah->tgl_kedatangan}}" class="form-control form-control-sm" required placeholder="Tanggal Kedatangan"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input type="text" name="alamat_baru" readonly value="{{$permohonan_pindah->alamat_baru}}" class="form-control form-control-sm" required placeholder="Alamat"
                                    oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                    oninput="this.setCustomValidity('')">
                                  </div>
                              </div>
                              <div class="row" style="margin-bottom: 50px">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Banjar</label>
                                  <input type="text" name="banjar_baru" readonly value="{{$permohonan_pindah->banjar_baru}}" class="form-control form-control-sm" required placeholder="Banjar"
                                  oninvalid="this.setCustomValiditybanjar_baru('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                                  <input type="text" name="kelurahan_baru" readonly value="{{$permohonan_pindah->kelurahan_baru}}" class="form-control form-control-sm" required placeholder="Kelurahan"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Telepon</label>
                                  <input type="text" name="telepon_baru" readonly value="{{$permohonan_pindah->telepon_baru}}" class="form-control form-control-sm" required placeholder="Telepon"
                                  oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')"
                                  oninput="this.setCustomValidity('')">
                                </div>

                            </div>

                            <label for="exampleInputEmail1" class="form-label"> <strong>Daftar Keluarga Yang Ikut</strong>  </label>
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
                                @foreach ($permohonan_pindah->detail_permohonan_pindah as $no => $KK_item)
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
                            <a href="/permohonan_pindah" class="btn btn-success btn-icon-split">
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

@section('select_picker_script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pd').select2();
    });
</script>

@endsection