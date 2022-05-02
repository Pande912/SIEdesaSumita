<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banjar;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $users = User::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('username','LIKE','%'.$request->search."%") 
            ->orWhere('banjar_id','LIKE','%'.$request->search."%")->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $users = User::orderBy('id', 'desc')->paginate(5);
        }
        return view ('administrator.user.index', ['users' => $users]);
    }
    
    public function banjar(){
        return $this->belongsTo(Banjar::class);
    }

    public function tambah_user(){
        $ban = Banjar::all();
        return view('administrator.user.tambah_user', compact('ban'));
    }

    public function create(Request $request){

        $file= $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

    

        User::create([
            
            'nama' => $request->nama,
            'username' => $request->username,
            'banjar_id'=> $request->banjar_id,
            'password'=> $request->password,
            'password' => Hash::make($request['password']),
            'alamat' => $request->alamat,
            'no_HP' => $request->no_HP,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'role'=>$request->role,
            'avatar' => $fileName,
            'remember_token'=> Str::random(20),
        ]); 

    return redirect('/user')->with("sukses", 'Data berhasil ditambahkan!');;

    }
    public function edit($id)
    {
        $user = User::find($id);
        $ban = Banjar::all();
        return view('administrator.user.edit', ['user' => $user], compact('ban'));
    }

    public function update(Request $request, $id){
        $fileName= '';
        $user = User::find($id);
        
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if($user->avatar){
                Storage::delete('public/images/' . $user->avatar);
            }
        }
        else{
            $fileName = $request->user_avatar;
        }
        $datauser=[
            'nama' => $request->nama,
            'username' => $request->username,
            'banjar_id'=> $request->banjar_id,
            'password'=> $request->password,
            'password' => Hash::make($request['password']),
            'alamat' => $request->alamat,
            'no_HP' => $request->no_HP,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'role'=>$request->role,
            'avatar' => $fileName,
            'remember_token'=> Str::random(20),

        ];
        $user->update($datauser);
        
       
        return redirect('/user')->with("sukses", 'Data berhasil di-Update!');;

    }

}

    
