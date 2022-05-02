<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_kelahiran;


class DataKelahiranController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data_kelahiran = Data_kelahiran::where('no_surat', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nama','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $data_kelahiran = Data_kelahiran::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.data_kelahiran.index', ['data_kelahiran' => $data_kelahiran]);
    }


    public function tambah_data  (){
        return view ('kelian.data_kelahiran.tambah_data');
    }

    public function create(Request $request){

        Data_kelahiran::create([
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'nama' => $request->nama,
            'anak_ke' => $request->anak_ke,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,

        ]); 

    return redirect('/data_kelahiran')->with("sukses", 'Data berhasil ditambahkan!');

    }

    public function edit_data($id){
        $data_kelahiran = Data_kelahiran::find($id);
        return view('kelian.data_kelahiran.edit_data_kelahiran', ['data_kelahiran' => $data_kelahiran]);
    }

    public function update(Request $request, $id){
        $data_kelahiran = Data_kelahiran::find($id);
        $kelahiran=[
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'nama' => $request->nama,
            'anak_ke' => $request->anak_ke,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
        ];
        $data_kelahiran->update($kelahiran);
        return redirect('/data_kelahiran')->with("sukses", 'Data berhasil di-Update!');
    }

    public function delete($id)
    {
        $data_kelahiran = Data_kelahiran::find($id);
        $data_kelahiran ->delete($data_kelahiran);
        return redirect('/data_kelahiran')->with("sukses", 'Data berhasil dihapus!');
    }

}


