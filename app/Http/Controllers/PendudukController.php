<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Kartu_kk;
use App\Models\Banjar;
use Illuminate\Support\Facades\Auth;




class PendudukController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $penduduk = Penduduk::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nik','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $penduduk = Penduduk::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.penduduk.index', ['penduduk' => $penduduk]);
    }

    public function tambah_penduduk(){
        $noKK = Kartu_kk::all();
        return view('kelian.penduduk.tbh', compact('noKK'));  
    }
    
    public function create(Request $request){

        $banjarId = Auth::user()->banjar_id;
        Penduduk::create([
        
            'nama' => $request->nama,
            'kartu_kk_id' => $request->kartu_kk_id,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'agama' => $request->agama,
            'alamat' => $request->alamat,

            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_pindah' => $request->tgl_pindah,
            'tgl_terdaftar' => $request->tgl_terdaftar,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_meninggal' => $request->tgl_meninggal,
            'sts_kpl_keluarga' => $request->sts_kpl_keluarga,
            'banjar_id'=>$banjarId,
        ]); 

    return redirect('/penduduk')->with("sukses", 'Data berhasil ditambahkan!');;

    }

    public function edit($id){
        $penduduk = Penduduk::find($id);
        $noKK = Kartu_kk::all();
        return view('kelian.penduduk.edit_penduduk', ['penduduk' => $penduduk], compact('noKK'));
    }

    public function update(Request $request, $id){
        $penduduk = Penduduk::find($id);
        $dataPenduduk=[
            'nama' => $request->nama,
            'kartu_kk_id' => $request->kartu_kk_id,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'status' => $request->status,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_pindah' => $request->tgl_pindah,
            'tgl_terdaftar' => $request->tgl_terdaftar,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_meninggal' => $request->tgl_meninggal,
            'sts_kpl_keluarga' => $request->sts_kpl_keluarga,

        ];
        $penduduk->update($dataPenduduk);
        return redirect('/penduduk')->with("sukses", 'Data berhasil di-Update!');
    }

    public function lihat ($id){
        $penduduk = Penduduk::find($id);
        $noKK = Kartu_kk::all();
        return view('kelian.penduduk.lihat_penduduk', ['penduduk' => $penduduk], compact('noKK'));
    }





    
}
