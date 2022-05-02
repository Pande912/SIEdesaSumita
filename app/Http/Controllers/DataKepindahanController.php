<?php

namespace App\Http\Controllers;
use App\Models\Data_kepindahan;
use App\Models\Penduduk;

use Illuminate\Http\Request;

class DataKepindahanController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data_kepindahan = Data_kepindahan::where('no_surat', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $data_kepindahan = Data_kepindahan::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.data_kepindahan.index', ['data_kepindahan' => $data_kepindahan]);
    }

    public function tambah_data  (){
        $penduduk = Penduduk::all();
        return view ('kelian.data_kepindahan.tambah_data', compact('penduduk'));
    }

    public function create(Request $request){

        Data_kepindahan::create([
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'penduduk_id' => $request->penduduk_id,
            'tgl_pindah' => $request->tgl_pindah,
            'alamat_tujuan' => $request->alamat_tujuan,
            'tgl_pindah' => $request->tgl_pindah,
            'keterangan' => $request->keterangan,
        ]); 

    return redirect('/data_kepindahan')->with("sukses", 'Data berhasil ditambahkan!');

    }

    public function edit($id){
        $data_kepindahan = Data_kepindahan::find($id);
        $penduduk = Penduduk::all();
        return view('kelian.data_kepindahan.edit_data_kepindahan', ['data_kepindahan' => $data_kepindahan], compact('penduduk'));
    }

    public function update(Request $request, $id){
        $data_kepindahan = Data_kepindahan::find($id);
        $kepindahan=[
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'penduduk_id' => $request->penduduk_id,
            'tgl_pindah' => $request->tgl_pindah,
            'alamat_tujuan' => $request->alamat_tujuan,
            'tgl_pindah' => $request->tgl_pindah,
            'keterangan' => $request->keterangan,
        ];
        $data_kepindahan->update($kepindahan);
        return redirect('/data_kepindahan')->with("sukses", 'Data berhasil di-Update!');
    }

    public function delete($id)
    {
        $data_kepindahan = Data_kepindahan::find($id);
        $data_kepindahan ->delete($data_kepindahan);
        return redirect('/data_kepindahan')->with("sukses", 'Data berhasil dihapus!');
    }

}
