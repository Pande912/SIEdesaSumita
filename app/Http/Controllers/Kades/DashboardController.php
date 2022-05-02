<?php
namespace App\Http\Controllers\Kades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\User;

use App\Models\Data_kematian;
use App\Models\Data_kelahiran;
use App\Models\Data_kepindahan;
use App\Models\Data_kedatangan;
use App\Models\Kartu_kk;

use DB;
use Carbon\Carbon;


class DashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index() {
    $total_penduduk = Penduduk::where('status', 'aktif')->get();
    $total_penduduk_count = count($total_penduduk);

    //card kematian
    $kematian  = Data_kematian::whereYear('tgl_meninggal', Carbon::now()->format('Y'))->get();
    $total_kematian_count = count($kematian);

    //card kelahiran
    $kelahiran  = Data_kelahiran::whereYear('tgl_lahir', Carbon::now()->format('Y'))->get();
    $total_kelahiran_count = count($kelahiran);
    //card kepindahan
    $kepindahan  = Data_kepindahan::whereYear('tgl_pindah', Carbon::now()->format('Y'))->get();
    $total_kepindahan_count = count($kepindahan);
    //card kedatangan
    $kedatangan  = Data_kedatangan::whereYear('tgl_datang', Carbon::now()->format('Y'))->get();
    $total_kedatangan_count = count($kedatangan);

    //card kartu kk
    $kk = Kartu_kk::get();
    $totalKKcount = count($kk);

    // Bar chart 

    //Chart1 GRAFIK PENDUDUK kematian ,kelahiran. 
    //kematian
    $chartKematian = Data_kematian::select(DB::raw("COUNT(*) as count"))
    ->whereYear('tgl_meninggal',Carbon::now()->format('Y'))
    ->groupBy(DB::raw("Month(tgl_meninggal)"))
    ->pluck('count');
    //kelahiran
    $chartKelahiran = Data_kelahiran::select(DB::raw("COUNT(*) as count"))
    ->whereYear('tgl_lahir',Carbon::now()->format('Y'))
    ->groupBy(DB::raw("Month(tgl_lahir)"))
    ->pluck('count');
    //Kedatangan
    $chartKedatangan = Data_kedatangan::select(DB::raw("COUNT(*) as count"))
    ->whereYear('tgl_datang',Carbon::now()->format('Y'))
    ->groupBy(DB::raw("Month(tgl_datang)"))
    ->pluck('count');
    //Pindah
    $chartKepindahan = Data_kepindahan::select(DB::raw("COUNT(*) as count"))
    ->where('tgl_pindah',Carbon::now()->format('Y'))
    ->groupBy(DB::raw("Month(tgl_pindah)"))
    ->pluck('count');

    //CHART2 Grafik berdasarkan kelamin
    $PendudukLaki = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('jenis_kelamin', 'laki-laki')->pluck('count');

    $PendudukPerempuan = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('jenis_kelamin', 'perempuan')->pluck('count');

    // grafik penduduk berdasarkan banjar
    $pedudukSema =  Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '7')->pluck('count');
    $pedudukPande =  Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '1')->pluck('count');
    $pedudukTengah =  Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '3')->pluck('count');
    $pedudukSiih =  Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '5')->pluck('count');
    $pedudukMelayang =  Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '11')->pluck('count');
    $pedudukMulung =  Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '4')->pluck('count');


    //CHART Grafik KK berdasarkan banjar
    $kksema =  Kartu_kk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '7')->pluck('count');

    $kkpande =  Kartu_kk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '1')->pluck('count');

    $kktengah =  Kartu_kk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '3')->pluck('count');

    $kksiih =  Kartu_kk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '5')->pluck('count');

    $kkmelayang =  Kartu_kk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '11')->pluck('count');

    $kkmulung =  Kartu_kk::select(DB::raw("COUNT(*) as count"))
    ->where('banjar_id', '4')->pluck('count');



    return view('kades.dashboard', compact('total_penduduk_count', 'total_kematian_count', 'total_kelahiran_count','total_kepindahan_count', 'total_kedatangan_count', 'chartKematian', 'chartKelahiran', 'chartKedatangan', 'chartKepindahan', 
    //CHART2 Grafik berdasarkan kelamin
    'PendudukLaki', 'PendudukPerempuan', 'totalKKcount',
    //CHART Grafik KK berdasarkan Banjar
    'kksema','kkpande', 'kktengah', 'kksiih','kkmelayang', 'kkmulung',
    //chart penduduk berdasarkan banjar
    'pedudukSema','pedudukPande', 'pedudukTengah', 'pedudukSiih','pedudukMelayang', 'pedudukMulung'
  ));
  }
}