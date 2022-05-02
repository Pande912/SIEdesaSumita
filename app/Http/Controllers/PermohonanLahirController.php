<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Permohonan_lahir;
use App\Models\Penduduk;
use App\Models\User;



class PermohonanLahirController extends Controller
{
    
    public function index(Request $request){
        if($request->has('search')){
            $permohonan_lahir = Permohonan_lahir::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('status','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_lahir = Permohonan_lahir::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.permohonan_lahir.index', ['permohonan_lahir' => $permohonan_lahir]);
    }

    public function tambah (){
        $penduduk = Penduduk::all();
        return view ('kelian.permohonan_lahir.tambah_permohonan_lahir', compact('penduduk'));
    }

    public function create(Request $request){

        $userId = Auth::id();
        $banjarId = Auth::user()->banjar_id; 
        Permohonan_lahir::create([
            
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nama_saksi_1' => $request->nama_saksi_1,
            'alamat_saksi_1' => $request->alamat_saksi_1,
            'pekerjaan_saksi_1' => $request->pekerjaan_saksi_1,
            'nama_saksi_2' => $request->nama_saksi_2,
            'alamat_saksi_2' => $request->alamat_saksi_2,
            'pekerjaan_saksi_2' => $request->pekerjaan_saksi_2,
            'anak_ke' => $request->anak_ke,
            'user_id'=>$userId,
            'banjar_id'=>$banjarId,
        ]); 

    return redirect('/permohonan_lahir')->with("sukses", 'Data berhasil ditambahkan!');

    }


    public function lihat ($id){
        $permohonan_lahir = Permohonan_lahir::find($id);
        return view('kelian.permohonan_lahir.lihat_permohonan_kelian', ['permohonan_lahir' => $permohonan_lahir]);
    }

    public function edit  (Request $request, $id){
        $permohonan_lahir = Permohonan_lahir::find($id);
        return view('kelian.permohonan_lahir.edit_permohonan_lahir', ['permohonan_lahir' => $permohonan_lahir]);
    }

    public function update(Request $request, $id){
        $permohonan_lahir = Permohonan_lahir::find($id);
        $permohonan=[
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nama_saksi_1' => $request->nama_saksi_1,
            'alamat_saksi_1' => $request->alamat_saksi_1,
            'pekerjaan_saksi_1' => $request->pekerjaan_saksi_1,
            'nama_saksi_2' => $request->nama_saksi_2,
            'alamat_saksi_2' => $request->alamat_saksi_2,
            'pekerjaan_saksi_2' => $request->pekerjaan_saksi_2,
            'anak_ke' => $request->anak_ke,
        ];
        $permohonan_lahir->update($permohonan);
        return redirect('/permohonan_lahir')->with("sukses", 'Data berhasil di-Update!');
    }

    public function delete($id)
    {
        $permohonan_lahir = Permohonan_lahir::find($id);
        $permohonan_lahir ->delete($permohonan_lahir);
        return redirect('/permohonan_lahir')->with("sukses", 'Data berhasil dihapus!');

    }

    // print surat
    public function print(Request $request, $id){
        $permohonan_lahir ['permohonan_lahir'] = Permohonan_lahir::find($id);
        $pdf = PDF::loadView('kelian.permohonan_lahir.cetak_surat', $permohonan_lahir)->setPaper('a4');
        set_time_limit(300);
        return $pdf->stream('permohonan_lahir.pdf');
    }


        //KADES
    public function indexKades(Request $request){
        if($request->has('search')){
            $permohonan_lahir = Permohonan_lahir::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('status','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_lahir = Permohonan_lahir::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kades.permohonan_lahir_kades.index', ['permohonan_lahir' => $permohonan_lahir]);

    }

    public function  lihat_kades($id){
        $permohonan_lahir = Permohonan_lahir::find($id);
        return view('kades.permohonan_lahir_kades.lihat_permohonan_kades', ['permohonan_lahir' => $permohonan_lahir]);
    }

    public function konfirmasi_setuju ($id){
        $permohonan_lahir = Permohonan_lahir::findOrFail($id);
        $permohonan_lahir->status = 'disetujui';
        $permohonan_lahir->save();
        return redirect('/permohonan_lahir_kades')->with("sukses", 'Permohonan disetujui!');
    }

    public function konfirmasi_tolak ($id){
        $permohonan_lahir = Permohonan_lahir::findOrFail($id);
        $permohonan_lahir->status = 'ditolak';
        $permohonan_lahir->save();
        return redirect('/permohonan_lahir_kades')->with("suksess", 'Permohonan ditolak!');
    }


}
