<?php

namespace App\Http\Controllers;
use App\Models\Data_kedatangan;
use App\Models\Penduduk;

use Illuminate\Http\Request;

class DataKedatanganController extends Controller
{
    //
    public function index(Request $request){
        if($request->has('search')){
            $data_kedatangan = Data_kedatangan::where('no_surat', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $data_kedatangan = Data_kedatangan::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.data_kedatangan.index', ['data_kedatangan' => $data_kedatangan]);
    }

    public function tambah_data  (){
        $penduduk = Penduduk::all();
        return view ('kelian.data_kedatangan.tambah_data', compact('penduduk'));
    }

    public function create(Request $request){

        Data_kedatangan::create([
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'penduduk_id' => $request->penduduk_id,
            'tgl_datang' => $request->tgl_datang,
            'alamat_asal' => $request->alamat_asal,
            'keterangan' => $request->keterangan,
        ]); 

    return redirect('/data_kedatangan')->with("sukses", 'Data berhasil ditambahkan!');

    }

    public function edit($id){
        $data_kedatangan = Data_kedatangan::find($id);
        $penduduk = Penduduk::all();
        return view('kelian.data_kedatangan.edit_data_kedatangan', ['data_kedatangan' => $data_kedatangan], compact('penduduk'));
    }

    public function update(Request $request, $id){
        $data_kedatangan = Data_kedatangan::find($id);
        $kedatangan=[
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'penduduk_id' => $request->penduduk_id,
            'tgl_datang' => $request->tgl_datang,
            'alamat_asal' => $request->alamat_asal,
            'keterangan' => $request->keterangan,
        ];
        $data_kedatangan->update($kedatangan);
        return redirect('/data_kedatangan')->with("sukses", 'Data berhasil di-Update!');
    }

    public function delete($id)
    {
        $data_kedatangan = Data_kedatangan::find($id);
        $data_kedatangan ->delete($data_kedatangan);
        return redirect('/data_kedatangan')->with("sukses", 'Data berhasil dihapus!');
    }

}
