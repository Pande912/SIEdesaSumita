<?php

namespace App\Http\Controllers;
use App\Models\Permohonan_pindah;
use Illuminate\Support\Facades\Auth;
use App\Models\Detail_permohonan_pindah;




use Illuminate\Http\Request;

class PermohonanPindahController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $permohonan_pindah = Permohonan_pindah::where('nama_pemohon', 'LIKE', '%' .$request->search. '%')
            ->orWhere('status','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_pindah = Permohonan_pindah::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.permohonan_pindah.index', ['permohonan_pindah' => $permohonan_pindah]);
    }

    public function tambah (){
        $pp = Permohonan_pindah::all();
        return view ('kelian.permohonan_pindah.tambah_permohonan', compact('pp'));
    }

    public function create(Request $request){
        $userId = Auth::id();
        $banjarId = Auth::user()->banjar_id; 

        Permohonan_pindah::create([
            'jenis_surat' => $request->jenis_surat,
            'keterangan_surat' => $request->keterangan_surat,
            'kk_lama' => $request->kk_lama,
            'kepala_keluarga_lama' => $request->kepala_keluarga_lama,
            'alamat_lama' => $request->alamat_lama,
            'banjar_lama' => $request->banjar_lama,
            'kelurahan_lama' => $request->kelurahan_lama,
            'nik_pemohon' => $request->nik_pemohon,
            'nama_pemohon' => $request->nama_pemohon,
            'telepon' => $request->telepon,
            'kode_pos' => $request->kode_pos,
            'status_kk' => $request->status_kk,
            'nik_kepala_keluarga_baru' => $request->nik_kepala_keluarga_baru,
            'kk_baru' => $request->kk_baru,
            'kepala_keluarga_baru' => $request->kepala_keluarga_baru,
            'tgl_kedatangan' => $request->tgl_kedatangan,
            'alamat_baru' => $request->alamat_baru,
            'banjar_baru' => $request->banjar_baru,
            'kelurahan_baru' => $request->kelurahan_baru,
            'telepon_baru' => $request->telepon_baru,
            'user_id'=>$userId,
            'banjar_id'=>$banjarId,

        ]); 
        

    return redirect('/permohonan_Pindah')->with("sukses", 'Data berhasil ditambahkan!');

    }

    public function edit($id){
        $permohonan_pindah = Permohonan_pindah::find($id);
        return view('kelian.permohonan_pindah.edit_permohonan_pindah', ['permohonan_pindah' => $permohonan_pindah]);
    } 

    public function update(Request $request, $id){
        $permohonan_pindah = Permohonan_pindah::find($id);
        $permohonan=[
            'jenis_surat' => $request->jenis_surat,
            'keterangan_surat' => $request->keterangan_surat,
            'kk_lama' => $request->kk_lama,
            'kepala_keluarga_lama' => $request->kepala_keluarga_lama,
            'alamat_lama' => $request->alamat_lama,
            'banjar_lama' => $request->banjar_lama,
            'kelurahan_lama' => $request->kelurahan_lama,
            'nik_pemohon' => $request->nik_pemohon,
            'nama_pemohon' => $request->nama_pemohon,
            'telepon' => $request->telepon,
            'kode_pos' => $request->kode_pos,
            'status_kk' => $request->status_kk,
            'nik_kepala_keluarga_baru' => $request->nik_kepala_keluarga_baru,
            'kk_baru' => $request->kk_baru,
            'kepala_keluarga_baru' => $request->kepala_keluarga_baru,
            'tgl_kedatangan' => $request->tgl_kedatangan,
            'alamat_baru' => $request->alamat_baru,
            'banjar_baru' => $request->banjar_baru,
            'kelurahan_baru' => $request->kelurahan_baru,
            'telepon_baru' => $request->telepon_baru,
        ];
        $permohonan_pindah->update($permohonan);
        return redirect('/permohonan_pindah')->with("sukses", 'Data berhasil di-Update!');
    }

    public function detail_permohonan($id){
        $permohonan_pindah = Permohonan_pindah::find($id);
        return view('kelian.permohonan_pindah.detail_permohonan', ['permohonan_pindah' => $permohonan_pindah]);
    }

    public function tambah_anggota (Request $request){
        Detail_permohonan_pindah::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'masa_berlaku_ktp' => $request->masa_berlaku_ktp,
            'shdk' => $request->shdk,
            'permohonan_pindah_id'=>$request->permohonan_pindah_id,
        ]); 
    return redirect('/permohonan_pindah')->with("sukses", 'Data berhasil ditambahkan!');
    }

    public function lihat_permohonan (Request $request, $id){
        $permohonan_pindah = Permohonan_pindah::find($id);
        return view('kelian.permohonan_pindah.lihat_permohonan_pindah', ['permohonan_pindah' => $permohonan_pindah]);
    }

    public function delete($id)
    {
        $permohonan_pindah = Permohonan_pindah::find($id);
        $permohonan_pindah ->delete($permohonan_pindah);
        return redirect('/permohonan_pindah')->with("sukses", 'Data berhasil dihapus!');
    }




    //kades

    public function indexKades(Request $request){
        if($request->has('search')){
            $permohonan_pindah = Permohonan_pindah::where('nama_pemohon', 'LIKE', '%' .$request->search. '%')
            ->orWhere('status','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $permohonan_pindah = Permohonan_pindah::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kades.permohonan_pindah_kades.index', ['permohonan_pindah' => $permohonan_pindah]);
    }

    public function lihat_permohonan_kades  (Request $request, $id){
        $permohonan_pindah = Permohonan_pindah::find($id);
        return view('kades.permohonan_pindah_kades.lihat_permohonan_pindah', ['permohonan_pindah' => $permohonan_pindah]);
    }

    public function konfirmasi_setuju ($id){
        $permohonan_pindah = Permohonan_pindah::findOrFail($id);
        $permohonan_pindah->status = 'disetujui';
        $permohonan_pindah->save();
        return redirect('/permohonan_pindah_kades')->with("sukses", 'Permohonan disetujui!');
    }
    
    public function konfirmasi_tolak ($id){
        $permohonan_pindah = Permohonan_pindah::findOrFail($id);
        $permohonan_pindah->status = 'ditolak';
        $permohonan_pindah->save();
        return redirect('/permohonan_pindah_kades')->with("suksess", 'Permohonan ditolak!');
    }
    

}
