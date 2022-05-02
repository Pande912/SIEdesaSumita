<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Permohonan_ktp;
use App\Models\User;


class PermohonanKTPController extends Controller
{
    //
    public function index(Request $request){
        if($request->has('search')){
            $permohonan_ktp = Permohonan_ktp::where('nama_pemohon', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nik','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_ktp = Permohonan_ktp::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.permohonan_KTP.index', ['permohonan_ktp' => $permohonan_ktp]);
    }

    public function tambah (){
        return view ('kelian.permohonan_KTP.tambah_permohonan_ktp');
    }

    public function create(Request $request){
        $userId = Auth::id();
        $banjarId = Auth::user()->banjar_id; 

        Permohonan_ktp::create([
            
            'nama_pemohon' => $request->nama_pemohon,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'alasan' => $request->alasan,
            'user_id'=>$userId,
            'banjar_id'=>$banjarId,
        ]); 
    return redirect('/permohonan_ktp')->with("sukses", 'Data berhasil ditambahkan!');

    }

    public function edit($id){
        $permohonan_ktp = Permohonan_ktp::find($id);
        return view('kelian.permohonan_KTP.edit_permohonan_ktp', ['permohonan_ktp' => $permohonan_ktp]);
    } 

    public function update(Request $request, $id){
        $permohonan_ktp = Permohonan_ktp::find($id);
        $permohonan=[
            'nama_pemohon' => $request->nama_pemohon,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'alasan' => $request->alasan,
        ];
        $permohonan_ktp->update($permohonan);
        return redirect('/permohonan_ktp')->with("sukses", 'Data berhasil di-Update!');
    }
    
    public function lihat ($id){
        $permohonan_ktp = Permohonan_ktp::find($id);
        return view('kelian.permohonan_KTP.lihat_permohonan_kelian', ['permohonan_ktp' => $permohonan_ktp]);
    }

    public function delete($id)
    {
        $permohonan_ktp = Permohonan_ktp::find($id);
        $permohonan_ktp ->delete($permohonan_ktp);
        return redirect('/permohonan_ktp')->with("sukses", 'Data berhasil dihapus!');
    }


    //KADES
    public function indexKades (Request $request)
    {
        if($request->has('search')){
            $permohonan_ktp = Permohonan_ktp::where('nama_pemohon', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nik','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_ktp = Permohonan_ktp::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kades.permohonan_ktp_kades.index', ['permohonan_ktp' => $permohonan_ktp]);
    }

    public function lihat_kades ($id){
        $permohonan_ktp = Permohonan_ktp::find($id);
        return view('kades.permohonan_ktp_kades.lihat_permohonan_kades', ['permohonan_ktp' => $permohonan_ktp]);
    }

    public function konfirmasi_setuju ($id){
        $permohonan_ktp = Permohonan_ktp::findOrFail($id);
        $permohonan_ktp->status = 'disetujui';
        $permohonan_ktp->save();
        return redirect('/permohonan_ktp_kades')->with("sukses", 'Permohonan disetujui!');
    }

    public function konfirmasi_tolak ($id){
        $permohonan_ktp = Permohonan_ktp::findOrFail($id);
        $permohonan_ktp->status = 'ditolak';
        $permohonan_ktp->save();
        return redirect('/permohonan_ktp_kades')->with("suksess", 'Permohonan ditolak!');
    }

}
