<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Permohonan_kk;
use App\Models\Detail_permohonan_kk;

use App\Models\User;


class PermohonanKKController extends Controller
{
   
    public function index(Request $request){
        if($request->has('search')){
            $permohonan_kk = Permohonan_kk::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('status','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_kk = Permohonan_kk::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.permohonan_KK.index', ['permohonan_kk' => $permohonan_kk]);
    }

    public function tambah (){
        return view ('kelian.permohonan_KK.tambah_permohonan');
    }

    public function create(Request $request){
        $userId = Auth::id();
        $banjarId = Auth::user()->banjar_id; 

        Permohonan_kk::create([
            
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_kk_lama' => $request->no_kk_lama,
            'alamat' => $request->alamat,
            'alasan' => $request->alasan,
            'user_id'=>$userId,
            'banjar_id'=>$banjarId,
        ]);
    return redirect('/permohonan_kk')->with("sukses", 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $permohonan_kk = Permohonan_kk::find($id);
        return view('kelian.permohonan_KK.edit_permohonan_kk', ['permohonan_kk' => $permohonan_kk]);
    } 

    public function update(Request $request, $id){
        $permohonan_kk = Permohonan_kk::find($id);
        $permohonan=[
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_nik_lama' => $request->no_nik_lama,
            'alamat' => $request->alamat,
            'alasan' => $request->alasan,
        ];
        $permohonan_kk->update($permohonan);
        return redirect('/permohonan_kk')->with("sukses", 'Data berhasil di-Update!');
    }

    public function detail_permohonan($id){
        $permohonan_kk = Permohonan_kk::find($id);
        return view('kelian.permohonan_KK.detail_permohonan', ['permohonan_kk' => $permohonan_kk]);
    }

    public function tambah_anggota (Request $request){
        Detail_permohonan_kk::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'masa_berlaku_ktp' => $request->masa_berlaku_ktp,
            'shdk' => $request->shdk,
            'permohonan_kk_id'=>$request->permohonan_kk_id,
        ]); 
    return redirect('/permohonan_kk')->with("sukses", 'Data berhasil ditambahkan!');
    }

    public function lihat (Request $request, $id){
        $permohonan_kk = Permohonan_kk::find($id);

    
        return view('kelian.permohonan_KK.lihat_permohonan_kk', ['permohonan_kk' => $permohonan_kk]);
    }

    public function delete($id)
{
    $permohonan_kk = Permohonan_kk::find($id);
    $permohonan_kk ->delete($permohonan_kk);
    return redirect('/permohonan_kk')->with("sukses", 'Data berhasil dihapus!');
}


//Kades 
public function indexKades (Request $request)
{
    if($request->has('search')){
        $permohonan_kk = Permohonan_kk::where('nama', 'LIKE', '%' .$request->search. '%')
        ->orWhere('nik','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
    }
    else{
        $permohonan_kk = Permohonan_kk::orderBy('id', 'desc')->paginate(5);
    }
    return view ('kades.permohonan_kk_kades.index', ['permohonan_kk' => $permohonan_kk]);
}


public function lihat_kades  (Request $request, $id){
    $permohonan_kk = Permohonan_kk::find($id);
    return view('kades.permohonan_kk_kades.lihat_permohonan_kk', ['permohonan_kk' => $permohonan_kk]);
}

public function konfirmasi_setuju ($id){
    $permohonan_kk = Permohonan_kk::findOrFail($id);
    $permohonan_kk->status = 'disetujui';
    $permohonan_kk->save();
    return redirect('/permohonan_kk_kades')->with("sukses", 'Permohonan disetujui!');
}

public function konfirmasi_tolak ($id){
    $permohonan_kk = Permohonan_kk::findOrFail($id);
    $permohonan_kk->status = 'ditolak';
    $permohonan_kk->save();
    return redirect('/permohonan_kk_kades')->with("suksess", 'Permohonan ditolak!');
}




}


