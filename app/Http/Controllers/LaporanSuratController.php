<?php

namespace App\Http\Controllers;
use App\Models\Permohonan_pindah;
use App\Models\Permohonan_lahir;
use App\Models\Permohonan_kk;
use App\Models\Permohonan_ktp;
use App\Models\Permohonan_meninggal;




use Illuminate\Http\Request;

class LaporanSuratController extends Controller
{
    public function laporan_surat(){
        //card surat
        $KK = Permohonan_kk::where('status', 'proses')->get();
        $KKcount = count($KK);
        $KTP = Permohonan_ktp::where('status', 'proses')->get();
        $KTPcount = count($KTP);
        $lahir = Permohonan_lahir::where('status', 'proses')->get();
        $lahir_count = count($lahir);
        $pindah = Permohonan_pindah::where('status', 'proses')->get();
        $pindah_count = count($pindah);
        $meninggal = Permohonan_meninggal::where('status', 'proses')->get();
        $meninggal_count = count($meninggal);


        
        //donat permohonan KK
        $KKpande = Permohonan_kk::where('banjar_id', '1')->get();
        $KKmulung = Permohonan_kk::where('banjar_id', '4')->get();
        $KKsema = Permohonan_kk::where('banjar_id', '7')->get();
        $KKsiih = Permohonan_kk::where('banjar_id', '5')->get();
        $KKtengah = Permohonan_kk::where('banjar_id', '3')->get();
        $KKmelayang = Permohonan_kk::where('banjar_id', '11')->get();

        $KKpande_count = count($KKpande);    	
    	$KKmulung_count = count($KKmulung);    	
    	$KKsema_count = count($KKsema);   
        $KKsiih_count = count($KKsiih);    	
        $KKtengah_count = count($KKtengah);    	
        $KKmelayang_count = count($KKmelayang); 

        // donat permohonan KTP
        $KTPpande = Permohonan_ktp::where('banjar_id', '1')->get();
        $KTPmulung = Permohonan_ktp::where('banjar_id', '4')->get();
        $KTPsema = Permohonan_ktp::where('banjar_id', '7')->get();
        $KTPsiih = Permohonan_ktp::where('banjar_id', '5')->get();
        $KTPtengah = Permohonan_ktp::where('banjar_id', '3')->get();
        $KTPmelayang = Permohonan_ktp::where('banjar_id', '11')->get();

    	$KTPpande_count = count($KTPpande);    	
    	$KTPmulung_count = count($KTPmulung);    	
    	$KTPsema_count = count($KTPsema);   
        $KTPsiih_count = count($KTPsiih);    	
        $KTPtengah_count = count($KTPtengah);    	
        $KTPmelayang_count = count($KTPmelayang);   


        // donat permohoan Lahir
        $pande = Permohonan_lahir::where('banjar_id', '1')->get();
        $mulung = Permohonan_lahir::where('banjar_id', '4')->get();
        $sema = Permohonan_lahir::where('banjar_id', '7')->get();
        $siih = Permohonan_lahir::where('banjar_id', '5')->get();
        $tengah = Permohonan_lahir::where('banjar_id', '3')->get();
        $melayang = Permohonan_lahir::where('banjar_id', '11')->get();

    	$pande_count = count($pande);    	
    	$mulung_count = count($mulung);    	
    	$sema_count = count($sema);   
        $siih_count = count($siih);    	
        $tengah_count = count($tengah);    	
        $melayang_count = count($melayang); 
        
        //permohonan pindah
        $Pindah_pande = Permohonan_pindah::where('banjar_id', '1')->get();
        $Pindah_mulung = Permohonan_pindah::where('banjar_id', '4')->get();
        $Pindah_sema = Permohonan_pindah::where('banjar_id', '7')->get();
        $Pindah_siih = Permohonan_pindah::where('banjar_id', '5')->get();
        $Pindah_tengah = Permohonan_pindah::where('banjar_id', '3')->get();
        $Pindah_melayang = Permohonan_pindah::where('banjar_id', '11')->get();

    	$Pindah_pande_count = count($Pindah_pande);    	
    	$Pindah_mulung_count = count($Pindah_mulung);    	
    	$Pindah_sema_count = count($Pindah_sema);   
        $Pindah_siih_count = count($Pindah_siih);    	
        $Pindah_tengah_count = count($Pindah_tengah);    	
        $Pindah_melayang_count = count($Pindah_melayang); 

        //permohonan meninggal
        $Meninggal_pande = Permohonan_meninggal::where('banjar_id', '1')->get();
        $Meninggal_mulung = Permohonan_meninggal::where('banjar_id', '4')->get();
        $Meninggal_sema = Permohonan_meninggal::where('banjar_id', '7')->get();
        $Meninggal_siih = Permohonan_meninggal::where('banjar_id', '5')->get();
        $Meninggal_tengah = Permohonan_meninggal::where('banjar_id', '3')->get();
        $Meninggal_melayang = Permohonan_meninggal::where('banjar_id', '11')->get();

    	$Meninggal_pande_count = count($Meninggal_pande);    	
    	$Meninggal_mulung_count = count($Meninggal_mulung);    	
    	$Meninggal_sema_count = count($Meninggal_sema);   
        $Meninggal_siih_count = count($Meninggal_siih);    	
        $Meninggal_tengah_count = count($Meninggal_tengah);    	
        $Meninggal_melayang_count = count($Meninggal_melayang); 

        return view('kades.laporan_surat.index', compact(
            //card surat
            'KKcount', 'KTPcount','lahir_count','pindah_count','meninggal_count',
            //permohonan kk
            'KKpande_count','KKmulung_count','KKsema_count','KKsiih_count','KKtengah_count', 'KKmelayang_count',
            //permohonan KTP
            'KTPpande_count','KTPmulung_count', 'KTPsema_count', 'KTPsiih_count', 'KTPtengah_count', 'KTPmelayang_count',
            // permohonan lahir
            'pande_count','mulung_count', 'sema_count', 'siih_count', 'tengah_count', 'melayang_count',
            //permohonan pindah
            'Pindah_pande_count','Pindah_mulung_count', 'Pindah_sema_count', 'Pindah_siih_count', 'Pindah_tengah_count', 'Pindah_melayang_count',
            //permohonan meninggal
            'Meninggal_pande_count','Meninggal_mulung_count', 'Meninggal_sema_count', 'Meninggal_siih_count', 'Meninggal_tengah_count', 'Meninggal_melayang_count',

            ) );
    }

    /*public function la(Request $request)
    {
    	$fruit = Product::where('product_type','fruit')->get();
    	$veg = Product::where('product_type','vegitable')->get();
    	$grains = Product::where('product_type','grains')->get();
    	$fruit_count = count($fruit);    	
    	$veg_count = count($veg);
    	$grains_count = count($grains);
    	return view('echart',compact('fruit_count','veg_count','grains_count'));
    }
    */


}
