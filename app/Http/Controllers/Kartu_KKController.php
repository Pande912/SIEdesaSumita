<?php

namespace App\Http\Controllers;
use App\Models\Kartu_kk;
use App\Models\Banjar;
use Illuminate\Http\Request;

class Kartu_KKController extends Controller
{
    
    public function index(Request $request){
        if($request->has('search')){
            $kartu_kk = Kartu_kk::where('nomer_KK', 'LIKE', '%' .$request->search. '%')
            ->orWhere('banjar_id','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $kartu_kk = Kartu_kk::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.kartu_KK.index', ['kartu_kk' => $kartu_kk]);
    }


    public function banjar(){
        return $this->belongsTo(Banjar::class);
    }

    public function tambah_KK(){
        $ban = Banjar::all();
        return view('kelian.kartu_KK.tambah_KK', compact('ban'));
    }

    public function create(Request $request){
        Kartu_kk::create([
            
            'nomer_KK' => $request->nomer_KK,
            'banjar_id' => $request->banjar_id,
            'alamat_KK' => $request->alamat_KK,

        ]); 
        return redirect('/kartu_KK')->with("sukses", 'Data berhasil ditambahkan!');;

    }

    public function edit_KK($id){
        $kartu_kk = Kartu_kk::find($id);
        $ban = Banjar::all();
        return view('kelian.kartu_KK.editKK', ['kartu_kk' => $kartu_kk], compact('ban'));
    }

    public function update(Request $request, $id){
        $kartu_kk = Kartu_kk::find($id);
        $dataKK=[
            'nomer_KK' => $request->nomer_KK,
            'banjar_id' => $request->banjar_id,
            'alamat_KK' => $request->alamat_KK,

        ];
        $kartu_kk->update($dataKK);
        return redirect('/kartu_KK')->with("sukses", 'Data berhasil di-Update!');
    }


    



}
