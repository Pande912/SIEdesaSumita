<?php
namespace App\Http\Controllers;

use App\Models\Banjar;
use App\Models\User;
use Illuminate\Http\Request;

class BanjarController extends Controller
{
    //
    public function index(Request $request){
        if($request->has('search')){
            $banjar = Banjar::where('nama_banjar', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'desc')->paginate(4);
        }
        else{
            $banjar = Banjar::orderBy('id', 'desc')->paginate(4);
        }
        return view ('administrator.banjar.index', ['banjar' => $banjar]);
    }

    public function tambah_banjar(){
        return view('administrator.banjar.tambah_banjar');
    }

    public function create(Request $request){
        Banjar::create([
            
            'nama_banjar' => $request->nama_banjar,
            'keterangan' => $request->keterangan,
        ]); 

    return redirect('/banjar')->with("sukses", 'Data berhasil ditambahkan!');;

    }

    public function edit($id){
        $banjar = Banjar::find($id);
        return view('administrator.banjar.edit', ['banjar' => $banjar]);
    }

    public function update(Request $request, $id){
        $banjar = Banjar::find($id);
        $databanjar=[
            'nama_banjar' => $request->nama_banjar,
            'keterangan' => $request->keterangan,
        ];
        $banjar->update($databanjar);
        return redirect('/banjar')->with("sukses", 'Data berhasil di-Update!');
    }
}
