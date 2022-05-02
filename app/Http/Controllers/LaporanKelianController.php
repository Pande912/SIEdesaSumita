<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKelianController extends Controller
{
    public function index(){
        return view('kelian.laporan_kelian.index');
    }
}
