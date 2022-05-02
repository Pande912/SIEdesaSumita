<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/',[App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/administrator_dashboard', [App\Http\Controllers\Administrator\DashboardController::class, 'index'])->middleware('role:administrator');
Route::get('/kelian_dashboard',[App\Http\Controllers\Kelian\DashboardController::class, 'index'])->middleware('role:kelian');
Route::get('/kades_dashboard',[App\Http\Controllers\Kades\DashboardController::class, 'index'])->middleware('role:kades');
/*Administrator   
user*/
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->middleware('role:administrator');
Route::get('/user/tambah_user',[App\Http\Controllers\UserController::class, 'tambah_user'])->middleware('role:administrator');
Route::post('/user/create', [App\Http\Controllers\UserController::class, 'create'] );
Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user/{id}/update', [App\Http\Controllers\UserController::class, 'update']);
//banjar
Route::get('/banjar', [App\Http\Controllers\BanjarController::class, 'index'])->middleware('role:administrator');
Route::get('/banjar/tambah_banjar', [App\Http\Controllers\BanjarController::class, 'tambah_banjar'])->middleware('role:administrator');
Route::post('/banjar/create', [App\Http\Controllers\BanjarController::class, 'create'] );
Route::get('/banjar/{id}/edit', [App\Http\Controllers\BanjarController::class, 'edit'])->middleware('role:administrator');
Route::post('/banjar/{id}/update', [App\Http\Controllers\BanjarController::class, 'update']);

//Event-admin
Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->middleware('role:administrator');
Route::get('/acara', [App\Http\Controllers\EventController::class, 'acara'])->middleware('role:administrator');
Route::post('/event/create', [App\Http\Controllers\EventController::class, 'create'] );
Route::get('/acara/{id}/edit', [App\Http\Controllers\EventController::class, 'edit'])->middleware('role:administrator');
Route::post('/acara/{id}/update', [App\Http\Controllers\EventController::class, 'update'])->middleware('role:administrator');
Route::get('/acara/{id}/delete', [App\Http\Controllers\EventController::class, 'delete'])->middleware('role:administrator');


/* KELIAN */

//kartu_KK
Route::get('/kartu_KK', [App\Http\Controllers\Kartu_KKController::class, 'index'])->middleware('role:kelian');
Route::get('/kartu_KK/tambah_KK', [App\Http\Controllers\Kartu_KKController::class, 'tambah_KK'])->middleware('role:kelian');
Route::post('/kartu_KK/create', [App\Http\Controllers\Kartu_KKController::class, 'create'])->middleware('role:kelian');
Route::get('/kartu_KK/{id}/edit_KK', [App\Http\Controllers\Kartu_KKController::class, 'edit_KK'])->middleware('role:kelian');
Route::post('/kartu_KK/{id}/update', [App\Http\Controllers\Kartu_KKController::class, 'update'])->middleware('role:kelian');

//Penduduk
Route::get('/penduduk', [App\Http\Controllers\PendudukController::class, 'index'])->middleware('role:kelian');
Route::get('/penduduk/tambah_penduduk', [App\Http\Controllers\PendudukController::class, 'tambah_penduduk'])->middleware('role:kelian');
Route::post('/penduduk/create', [App\Http\Controllers\PendudukController::class, 'create'])->middleware('role:kelian');
Route::get('/penduduk/{id}/edit', [App\Http\Controllers\PendudukController::class, 'edit'])->middleware('role:kelian');
Route::post('/penduduk/{id}/update', [App\Http\Controllers\PendudukController::class, 'update'])->middleware('role:kelian');
Route::get('/penduduk/{id}/lihat_penduduk', [App\Http\Controllers\PendudukController::class, 'lihat'])->middleware('role:kelian');

//Data kematian 
Route::get('/data_kematian', [App\Http\Controllers\DataKematianController::class, 'index'])->middleware('role:kelian');
Route::get('/data_kematian/tambah_data', [App\Http\Controllers\DataKematianController::class, 'tambah_data'])->middleware('role:kelian');
Route::post('/data_kematian/create', [App\Http\Controllers\DataKematianController::class, 'create'])->middleware('role:kelian');
Route::get('/data_kematian/{id}/delete', [App\Http\Controllers\DataKematianController::class, 'delete'])->middleware('role:kelian');
Route::get('/data_kematian/{id}/edit_data', [App\Http\Controllers\DataKematianController::class, 'edit'])->middleware('role:kelian');
Route::post('/data_kematian/{id}/update', [App\Http\Controllers\DataKematianController::class, 'update'])->middleware('role:kelian');

//data kelahiran
Route::get('/data_kelahiran', [App\Http\Controllers\DataKelahiranController::class, 'index'])->middleware('role:kelian');
Route::get('/data_kelahiran/tambah_data', [App\Http\Controllers\DataKelahiranController::class, 'tambah_data'])->middleware('role:kelian');
Route::post('/data_kelahiran/create', [App\Http\Controllers\DataKelahiranController::class, 'create'])->middleware('role:kelian');
Route::get('/data_kelahiran/{id}/edit_data', [App\Http\Controllers\DataKelahiranController::class, 'edit_data'])->middleware('role:kelian');
Route::post('/data_kelahiran/{id}/update', [App\Http\Controllers\DataKelahiranController::class, 'update'])->middleware('role:kelian');
Route::get('/data_kelahiran/{id}/delete', [App\Http\Controllers\DataKelahiranController::class, 'delete'])->middleware('role:kelian');



//data kepindahan
Route::get('/data_kepindahan', [App\Http\Controllers\DataKepindahanController::class, 'index'])->middleware('role:kelian');
Route::get('/data_kepindahan/tambah_data', [App\Http\Controllers\DataKepindahanController::class, 'tambah_data'])->middleware('role:kelian');
Route::post('/data_kepindahan/create', [App\Http\Controllers\DataKepindahanController::class, 'create'])->middleware('role:kelian');
Route::get('/data_kepindahan/{id}/edit_data', [App\Http\Controllers\DataKepindahanController::class, 'edit'])->middleware('role:kelian');
Route::post('/data_kepindahan/{id}/update', [App\Http\Controllers\DataKepindahanController::class, 'update'])->middleware('role:kelian');
Route::get('/data_kepindahan/{id}/delete', [App\Http\Controllers\DataKepindahanController::class, 'delete'])->middleware('role:kelian');


//data kepindahan
Route::get('/data_kedatangan', [App\Http\Controllers\DataKedatanganController::class, 'index'])->middleware('role:kelian');
Route::get('/data_kedatangan/tambah_data', [App\Http\Controllers\DataKedatanganController::class, 'tambah_data'])->middleware('role:kelian');
Route::post('/data_kedatangan/create', [App\Http\Controllers\DataKedatanganController::class, 'create'])->middleware('role:kelian');
Route::get('/data_kedatangan/{id}/edit_data', [App\Http\Controllers\DataKedatanganController::class, 'edit'])->middleware('role:kelian');
Route::post('/data_kedatangan/{id}/update', [App\Http\Controllers\DataKedatanganController::class, 'update'])->middleware('role:kelian');
Route::get('/data_kedatangan/{id}/delete', [App\Http\Controllers\DataKedatanganController::class, 'delete'])->middleware('role:kelian');





//permohonan Pindah

Route::get('/permohonan_pindah', [App\Http\Controllers\PermohonanPindahController::class, 'index'])->middleware('role:kelian');
Route::get('/permohonan_Pindah/tambah_permohonan', [App\Http\Controllers\PermohonanPindahController::class, 'tambah'])->middleware('role:kelian');
Route::post('/permohonan_Pindah/create', [App\Http\Controllers\PermohonanPindahController::class, 'create'])->middleware('role:kelian');
Route::get('/permohoanan_pindah/{id}/edit_permohonan', [App\Http\Controllers\PermohonanPindahController::class, 'edit'])->middleware('role:kelian');
Route::post('/permohonan_Pindah/{id}/update', [App\Http\Controllers\PermohonanPindahController::class, 'update'])->middleware('role:kelian');
Route::get('/permohonan_pindah/{id}/detail_permohonan', [App\Http\Controllers\PermohonanPindahController::class, 'detail_permohonan'])->middleware('role:kelian');
Route::post('/permohonan_pindah/{id}/tambah_anggota', [App\Http\Controllers\PermohonanPindahController::class, 'tambah_anggota'])->middleware('role:kelian');
Route::get('/permohoanan_pindah/{id}/lihat_permohonan', [App\Http\Controllers\PermohonanPindahController::class, 'lihat_permohonan'])->middleware('role:kelian');
Route::get('/permohonan_Pindah/{id}/delete', [App\Http\Controllers\PermohonanPindahController::class, 'delete'])->middleware('role:kelian');





//permohonan KK
Route::get('/permohonan_kk', [App\Http\Controllers\PermohonanKKController::class, 'index'])->middleware('role:kelian');
Route::get('/permohonan_kk/tambah_permohonan', [App\Http\Controllers\PermohonanKKController::class, 'tambah'])->middleware('role:kelian');
Route::post('/permohonan_kk/create', [App\Http\Controllers\PermohonanKKController::class, 'create'])->middleware('role:kelian');
Route::get('/permohonan_kk/{id}/edit_permohonan', [App\Http\Controllers\PermohonanKKController::class, 'edit'])->middleware('role:kelian');
Route::post('/permohonan_kk/{id}/update', [App\Http\Controllers\PermohonanKKController::class, 'update'])->middleware('role:kelian');
Route::get('/permohonan_kk/{id}/detail_permohonan', [App\Http\Controllers\PermohonanKKController::class, 'detail_permohonan'])->middleware('role:kelian');
Route::post('/permohonan_kk/{id}/tambah_anggota', [App\Http\Controllers\PermohonanKKController::class, 'tambah_anggota'])->middleware('role:kelian');
Route::get('/permohonan_kk/{id}/lihat_permohonan', [App\Http\Controllers\PermohonanKKController::class, 'lihat'])->middleware('role:kelian');
Route::get('/permohonan_kk/{id}/delete', [App\Http\Controllers\PermohonanKKController::class, 'delete'])->middleware('role:kelian');





//permohonan KTP
Route::get('/permohonan_ktp', [App\Http\Controllers\PermohonanKTPController::class, 'index'])->middleware('role:kelian');
Route::get('/permohonan_ktp/tambah_permohonan', [App\Http\Controllers\PermohonanKTPController::class, 'tambah'])->middleware('role:kelian');
Route::post('/permohonan_ktp/create', [App\Http\Controllers\PermohonanKTPController::class, 'create'])->middleware('role:kelian');
Route::get('/permohonan_ktp/{id}/edit_permohonan', [App\Http\Controllers\PermohonanKTPController::class, 'edit'])->middleware('role:kelian');
Route::get('/permohonan_ktp/{id}/edit_permohonan', [App\Http\Controllers\PermohonanKTPController::class, 'edit'])->middleware('role:kelian');
Route::post('/permohonan_ktp/{id}/update', [App\Http\Controllers\PermohonanKTPController::class, 'update'])->middleware('role:kelian');
Route::get('/permohonan_ktp/{id}/lihat_permohonan', [App\Http\Controllers\PermohonanKTPController::class, 'lihat'])->middleware('role:kelian');
Route::get('/permohonan_ktp/{id}/lihat_permohonan', [App\Http\Controllers\PermohonanKTPController::class, 'lihat'])->middleware('role:kelian');
Route::get('/permohonan_ktp/{id}/delete', [App\Http\Controllers\PermohonanKTPController::class, 'delete'])->middleware('role:kelian');



//permohonan Lahir
Route::get('/permohonan_lahir', [App\Http\Controllers\PermohonanLahirController::class, 'index'])->middleware('role:kelian');
Route::get('/permohonan_lahir/tambah_permohonan', [App\Http\Controllers\PermohonanLahirController::class, 'tambah'])->middleware('role:kelian');
Route::post('/permohonan_lahir/create', [App\Http\Controllers\PermohonanLahirController::class, 'create'])->middleware('role:kelian');
Route::get('/permohoanan_lahir/{id}/lihat_permohonan', [App\Http\Controllers\PermohonanLahirController::class, 'lihat'])->middleware('role:kelian');
Route::get('/permohoanan_lahir/{id}/edit_permohonan', [App\Http\Controllers\PermohonanLahirController::class, 'edit'])->middleware('role:kelian');
Route::post('/permohonan_lahir/{id}/update', [App\Http\Controllers\PermohonanLahirController::class, 'update'])->middleware('role:kelian');
Route::get('/permohonan_lahir/{id}/delete', [App\Http\Controllers\PermohonanLahirController::class, 'delete'])->middleware('role:kelian');
Route::get('/permohonan_lahir/{id}/print', [App\Http\Controllers\PermohonanLahirController::class, 'print']);


//permohonan pindah
Route::get('/permohonan_Pindah', [App\Http\Controllers\PermohonanPindahController::class, 'index'])->middleware('role:kelian');




//permohonan Meninggal
Route::get('/permohonan_Meninggal', [App\Http\Controllers\PermohonanMeninggalController::class, 'index'])->middleware('role:kelian');
Route::get('/permohonan_Meninggal/tambah_permohonan', [App\Http\Controllers\PermohonanMeninggalController::class, 'tambah'])->middleware('role:kelian');
Route::post('/permohonan_Meninggal/create', [App\Http\Controllers\PermohonanMeninggalController::class, 'create'])->middleware('role:kelian');
Route::get('/permohoanan_Meninggal/{id}/edit_permohonan', [App\Http\Controllers\PermohonanMeninggalController::class, 'edit'])->middleware('role:kelian');
Route::get('/permohoanan_Meninggal/{id}/lihat_permohonan', [App\Http\Controllers\PermohonanMeninggalController::class, 'lihat'])->middleware('role:kelian');
Route::post('/permohonan_Meninggal/{id}/update', [App\Http\Controllers\PermohonanMeninggalController::class, 'update'])->middleware('role:kelian');
Route::get('/permohonan_Meninggal/{id}/delete', [App\Http\Controllers\PermohonanMeninggalController::class, 'delete'])->middleware('role:kelian');
Route::get('/permohonan_meninggal/{id}/print', [App\Http\Controllers\PermohonanMeninggalController::class, 'print']);


//Laporan kelian
Route::get('/laporan_kelian', [App\Http\Controllers\LaporanKelianController::class, 'index'])->middleware('role:kelian');




//event//
Route::get('/event_kelian', [App\Http\Controllers\EventController::class, 'event_kelian'])->middleware('role:kelian');
Route::get('/acara_kelian', [App\Http\Controllers\EventController::class, 'acara_kelian'])->middleware('role:kelian');

//change password
Route::get('/ganti_password_kelian', [App\Http\Controllers\GantiPasswordController::class, 'index_kelian'])->middleware('role:kelian');
Route::post('/update_password_kelian', [App\Http\Controllers\GantiPasswordController::class, 'update_password_kelian'])->middleware('role:kelian');



/* Kades */


//laporan surat
Route::get('/laporan_surat', [App\Http\Controllers\LaporanSuratController::class, 'laporan_surat'])->middleware('role:kades');

//laporan penduduk
Route::get('/dashboard_penduduk', [App\Http\Controllers\LaporanPendudukController::class, 'laporan_penduduk'])->middleware('role:kades');







//event
Route::get('/event_kades', [App\Http\Controllers\EventController::class, 'event_kades'])->middleware('role:kades');
Route::get('/acara_kades', [App\Http\Controllers\EventController::class, 'acara_kades'])->middleware('role:kades');


//Permohonan KK
Route::get('/permohonan_kk_kades', [App\Http\Controllers\PermohonanKKController::class, 'indexKades'])->middleware('role:kades');
Route::get('/permohonan_kk_kades/{id}/lihat_permohonan_kades', [App\Http\Controllers\PermohonanKKController::class, 'lihat_kades'])->middleware('role:kades');
Route::get('/permohonan_kk_kades/konfirmasi_setuju/{id}', [App\Http\Controllers\PermohonanKKController::class, 'konfirmasi_setuju'])->middleware('role:kades');
Route::get('/permohonan_kk_kades/konfirmasi_tolak/{id}', [App\Http\Controllers\PermohonanKKController::class, 'konfirmasi_tolak'])->middleware('role:kades');


//permohonan KTP
Route::get('/permohonan_ktp_kades', [App\Http\Controllers\PermohonanKTPController::class, 'indexKades'])->middleware('role:kades');
Route::get('/permohonan_ktp_kades/{id}/lihat_permohonan_kades', [App\Http\Controllers\PermohonanKTPController::class, 'lihat_kades'])->middleware('role:kades');
Route::get('/permohonan_ktp_kades/konfirmasi_setuju/{id}', [App\Http\Controllers\PermohonanKTPController::class, 'konfirmasi_setuju'])->middleware('role:kades');
Route::get('/permohonan_ktp_kades/konfirmasi_tolak/{id}', [App\Http\Controllers\PermohonanKTPController::class, 'konfirmasi_tolak'])->middleware('role:kades');


//permohonan Meninggal
Route::get('/permohonan_meninggal_kades', [App\Http\Controllers\PermohonanMeninggalController::class, 'indexKades'])->middleware('role:kades');
Route::get('/permohonan_meninggal_kades/{id}/lihat_permohonan_kades', [App\Http\Controllers\PermohonanMeninggalController::class, 'lihat_kades'])->middleware('role:kades');
Route::get('/permohonan_meninggal_kades/konfirmasi_setuju/{id}', [App\Http\Controllers\PermohonanMeninggalController::class, 'konfirmasi_setuju'])->middleware('role:kades');
Route::get('/permohonan_meninggal_kades/konfirmasi_tolak/{id}', [App\Http\Controllers\PermohonanMeninggalController::class, 'konfirmasi_tolak'])->middleware('role:kades');

//permohonan Pindah 
Route::get('/permohonan_pindah_kades', [App\Http\Controllers\PermohonanPindahController::class, 'indexKades'])->middleware('role:kades');
Route::get('/permohonan_pindah_kades/{id}/lihat_permohonan', [App\Http\Controllers\PermohonanPindahController::class, 'lihat_permohonan_kades'])->middleware('role:kades');
Route::get('/permohonan_pindah_kades/konfirmasi_setuju/{id}', [App\Http\Controllers\PermohonanPindahController::class, 'konfirmasi_setuju'])->middleware('role:kades');
Route::get('/permohonan_pindah_kades/konfirmasi_tolak/{id}', [App\Http\Controllers\PermohonanPindahController::class, 'konfirmasi_tolak'])->middleware('role:kades');





//permohonan Lahir Kades
Route::get('/permohonan_lahir_kades', [App\Http\Controllers\PermohonanLahirController::class, 'indexKades'])->middleware('role:kades');
Route::get('/permohoanan_lahir_kades/{id}/lihat_permohonan_kades', [App\Http\Controllers\PermohonanLahirController::class, 'lihat_kades'])->middleware('role:kades');
Route::get('/permohonan_lahir_kades/konfirmasi_setuju/{id}', [App\Http\Controllers\PermohonanLahirController::class, 'konfirmasi_setuju'])->middleware('role:kades');
Route::get('/permohonan_lahir_kades/konfirmasi_tolak/{id}', [App\Http\Controllers\PermohonanLahirController::class, 'konfirmasi_tolak'])->middleware('role:kades');


//change password
Route::get('/ganti_password', [App\Http\Controllers\GantiPasswordController::class, 'index'])->middleware('role:kades');
Route::post('/update_password', [App\Http\Controllers\GantiPasswordController::class, 'update_password'])->middleware('role:kades');

