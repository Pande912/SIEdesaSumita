<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use DB;

class LaporanPendudukController extends Controller
{
    public function laporan_penduduk(){
        //Grafik Berdasarkan Agama
        $PendudukHindu = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('agama', 'Hindu')->pluck('count');
    $PendudukIslam = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('agama', 'Islam')->pluck('count');
    $PendudukKristen = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('agama', 'Kristen')->pluck('count');
    $PendudukBuddha = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('agama', 'Buddha')->pluck('count');
    $PendudukKatolik = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('agama', 'Katolik')->pluck('count');
    $PendudukKonghucu = Penduduk::select(DB::raw("COUNT(*) as count"))
    ->where('agama', 'Konghucu')->pluck('count');

        //Grafik Berdasarkan Pendidikan
        $sd = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'SD')->pluck('count');
        $smp = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'SMP')->pluck('count');
        $sma = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'SMA/SMK')->pluck('count');
        $diploma = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'Diploma')->pluck('count');
        $s1 = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'S-1')->pluck('count');
        $s2 = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'S-2')->pluck('count');
        $s3 = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'S-3')->pluck('count');
        $tidakBersekolah = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pendidikan', 'Tidak Bersekolah')->pluck('count');

        //Grafik berdasarkan pekerjaan
        $petani = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Petani')->pluck('count');
        $pelajar = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Pelajar/Mahasiswa')->pluck('count');
        $pegawaiSwasta = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Pegawai Swasta')->pluck('count');
        $wiraswasta = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Wiraswasta')->pluck('count');
        $pns = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'PNS')->pluck('count');
        $pedagang = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Pedagang')->pluck('count');
        $polisi = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Polisi')->pluck('count');
        $tni = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'TNI')->pluck('count');
        $dokter = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Dokter')->pluck('count');
        $lainya = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Lainya')->pluck('count');
        $belumBekerja = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('pekerjaan', 'Belum Bekerja')->pluck('count');

        //grafik berasarkan jenis kelamin per banjar
        $lakiPande = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'laki-laki')->where('banjar_id', '1' )->pluck('count');
        $perempuanPande = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'perempuan')->where('banjar_id', '1' )->pluck('count');
        $lakiSema = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'laki-laki')->where('banjar_id', '7' )->pluck('count');
        $perempuanSema = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'perempuan')->where('banjar_id', '7' )->pluck('count');
        $lakiTengah = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'laki-laki')->where('banjar_id', '3' )->pluck('count');
        $perempuanTengah = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'perempuan')->where('banjar_id', '3' )->pluck('count');
        $lakiSiih = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'laki-laki')->where('banjar_id', '5' )->pluck('count');
        $perempuanSiih = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'perempuan')->where('banjar_id', '5' )->pluck('count');
        $lakiMelayang = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'laki-laki')->where('banjar_id', '11' )->pluck('count');
        $perempuanMelayang = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'perempuan')->where('banjar_id', '11' )->pluck('count');
        $lakiMulung = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'laki-laki')->where('banjar_id', '4' )->pluck('count');
        $perempuanMulung = Penduduk::select(DB::raw("COUNT(*) as count"))
        ->where('jenis_kelamin', 'perempuan')->where('banjar_id', '4' )->pluck('count');

        return view('kades.laporan_penduduk.index', compact('PendudukHindu', 'PendudukIslam', 'PendudukKristen', 'PendudukBuddha', 'PendudukKatolik', 'PendudukKonghucu', 
        //grafik berdasarkan  pendidikan
        'sd', 'smp', 'sma', 'diploma', 's1', 's2', 's3', 'tidakBersekolah'
        //grafik berdasarkan pekerjaan
        , 'petani', 'pelajar', 'pegawaiSwasta', 'wiraswasta', 'pns', 'pedagang', 'polisi', 'tni', 'dokter', 'lainya', 'belumBekerja', 
        'lakiPande', 'perempuanPande', 'lakiSema', 'perempuanSema','lakiTengah', 'perempuanTengah', 'lakiSiih', 'perempuanSiih', 'lakiMelayang', 'perempuanMelayang', 'lakiMulung', 'perempuanMulung'
    ));
    
    }
}
