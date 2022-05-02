<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Permohonan_meninggal;
use App\Models\Penduduk;
use App\Models\Banjar;
use App\Models\Kartu_kk;
use App\Models\User;




class PermohonanMeninggalController extends Controller
{
    
    public function index(Request $request){
        if($request->has('search')){
            $permohonan_meninggal = Permohonan_meninggal::where('keterangan', 'LIKE', '%' .$request->search. '%')
            ->orWhere('status','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_meninggal = Permohonan_meninggal::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.permohonan_meninggal.index', ['permohonan_meninggal' => $permohonan_meninggal]);
    }

    public function tambah  (){
        $penduduk = Penduduk::all();
        return view ('kelian.permohonan_meninggal.tambah_permohonan_meninggal' ,compact('penduduk'));
    }

    public function create(Request $request){

        $userId = Auth::id();
        $banjarId = Auth::user()->banjar_id;
        Permohonan_meninggal::create([
            
            'penduduk_id' => $request->penduduk_id,
            'tgl_meninggal' => $request->tgl_meninggal,
            'tempat_meninggal' => $request->tempat_meninggal,
            'keterangan' => $request->keterangan,
            'user_id'=>$userId,
            'banjar_id'=>$banjarId,
        ]); 

    return redirect('/permohonan_Meninggal')->with("sukses", 'Data berhasil ditambahkan!');

    }

   public function edit($id){
        $permohonan_meninggal = Permohonan_meninggal::find($id);
        $penduduk = Penduduk::all();
        return view('kelian.permohonan_meninggal.edit_permohonan_meninggal', ['permohonan_meninggal' => $permohonan_meninggal], compact('penduduk'));
    } 
    
    public function update(Request $request, $id){
        $permohonan_meninggal = Permohonan_meninggal::find($id);
        $permohonan=[
            'penduduk_id' => $request->penduduk_id,
            'tgl_meninggal' => $request->tgl_meninggal,
            'tempat_meninggal' => $request->tempat_meninggal,
            'keterangan' => $request->keterangan,
        ];
        $permohonan_meninggal->update($permohonan);
        return redirect('/permohonan_Meninggal')->with("sukses", 'Data berhasil di-Update!');
    }

    public function delete($id)
    {
        $permohonan_meninggal = Permohonan_meninggal::find($id);
        $permohonan_meninggal ->delete($permohonan_meninggal);
        return redirect('/permohonan_Meninggal')->with("sukses", 'Data berhasil dihapus!');
    }

    public function lihat ($id){
        $permohonan_meninggal = Permohonan_meninggal::find($id);
        $penduduk = Penduduk::all();
        return view('kelian.permohonan_meninggal.lihat_permohonan_kelian', ['permohonan_meninggal' => $permohonan_meninggal], compact('penduduk'));
    }

    //PRINT PERMOHONAN
    public function print(Request $request, $id){
        $permohonan_meninggal ['permohonan_meninggal'] = Permohonan_meninggal::find($id);
        $pdf = PDF::loadView('kelian.permohonan_meninggal.cetak_surat', $permohonan_meninggal)->setPaper('a4');;
        return $pdf->stream('permohonan_meninggal.pdf');
    }



    //--  KADES  --
    public function indexKades (Request $request)
    {
        if($request->has('search')){
            $permohonan_meninggal = Permohonan_meninggal::where('keterangan', 'LIKE', '%' .$request->search. '%')
            ->orWhere('status','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_meninggal = Permohonan_meninggal::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kades.permohonan_meninggal_kades.index', ['permohonan_meninggal' => $permohonan_meninggal]);
    }
    public function lihat_kades ($id){
        $permohonan_meninggal = Permohonan_meninggal::find($id);
        $penduduk = Penduduk::all();
        return view('kades.permohonan_meninggal_kades.lihat_permohonan_kades', ['permohonan_meninggal' => $permohonan_meninggal], compact('penduduk'));
    }

    public function konfirmasi_setuju ($id){
        $permohonan_meninggal = Permohonan_meninggal::findOrFail($id);
        $permohonan_meninggal->status = 'disetujui';
        $permohonan_meninggal->save();
        return redirect('/permohonan_meninggal_kades')->with("sukses", 'Permohonan disetujui!');
    }

    public function konfirmasi_tolak ($id){
        $permohonan_meninggal = Permohonan_meninggal::findOrFail($id);
        $permohonan_meninggal->status = 'ditolak';
        $permohonan_meninggal->save();
        return redirect('/permohonan_meninggal_kades')->with("suksess", 'Permohonan ditolak!');
    }


}
