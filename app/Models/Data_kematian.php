<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_kematian extends Model
{
    use HasFactory;
    protected $table = 'data_kematian';
    protected $fillable =
     ['no_surat',
        'tgl_surat',
     'penduduk_id', 
    'tgl_meninggal', 
    'keterangan',
    'user_id',
    ];

    public function penduduk(){
        return  $this->belongsTo(Penduduk::class);
    }

    public function user(){
        return  $this->belongsTo(User::class);
    }
}
