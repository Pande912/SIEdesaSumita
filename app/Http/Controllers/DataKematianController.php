<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Data_kematian;
use App\Models\Penduduk;


class DataKematianController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data_kematian = Data_kematian::where('no_surat', 'LIKE', '%' .$request->search. '%')
            ->orWhere('keterangan','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $data_kematian = Data_kematian::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.data_kematian.index', ['data_kematian' => $data_kematian]);
    }

    public function tambah_data  (){
        $penduduk = Penduduk::all();
        return view ('kelian.data_kematian.tambah_data' ,compact('penduduk'));
    }

    public function create(Request $request){

        $userId = Auth::id();
        Data_kematian::create([
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'penduduk_id' => $request->penduduk_id,
            'tgl_meninggal' => $request->tgl_meninggal,
            'keterangan' => $request->keterangan,
            'user_id'=>$userId,
        ]); 

    return redirect('/data_kematian')->with("sukses", 'Data berhasil ditambahkan!');

    }

    public function edit($id){
        $data_kematian = Data_kematian::find($id);
        $penduduk = Penduduk::all();
        return view('kelian.data_kematian.edit_data_kematian', ['data_kematian' => $data_kematian], compact('penduduk'));
    }

    public function update(Request $request, $id){
        $data_kematian = Data_kematian::find($id);
        $kematian=[
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'tgl_meninggal' => $request->tgl_meninggal,
            'keterangan' => $request->keterangan,
        ];
        $data_kematian->update($kematian);
        return redirect('/data_kematian')->with("sukses", 'Data berhasil di-Update!');
    }

    public function delete($id)
    {
        $data_kematian = Data_kematian::find($id);
        $data_kematian ->delete($data_kematian);
        return redirect('/data_Kematian')->with("sukses", 'Data berhasil dihapus!');
    }


}
