<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Hash;

class GantiPasswordController extends Controller
{
    //Kepala Desa
    public function index()
    {

      return view('kades.ganti_password.index');
    }

    public function update_password(Request $request)
    {
        $request->validate([
          'current_password' => 'required',
          'password' => 'required|string|min:6|confirmed',
          'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('gagal', 'password yang diinputkan tidak sesuai!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('sukses', 'Password Sukses Diperbarui!');
    }

     //Kelian
    public function index_kelian()
    {

      return view('kelian.ganti_password.index');
    }

    public function update_password_kelian(Request $request)
    {
        $request->validate([
          'current_password' => 'required',
          'password' => 'required|string|min:6|confirmed',
          'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('gagal', 'password yang diinputkan tidak sesuai!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('sukses', 'Password Sukses Diperbarui!');
    }
} 
