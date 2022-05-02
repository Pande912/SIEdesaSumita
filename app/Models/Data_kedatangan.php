<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_kedatangan extends Model
{
    use HasFactory;
    protected $table = 'data_kedatangan';
    protected $fillable =
     ['no_surat',
     'tgl_surat',
     'tgl_datang', 
     'alamat_asal', 
    'keterangan',
    'penduduk_id',

    ];

    public function penduduk(){
        return  $this->belongsTo(Penduduk::class);
    }

    
}
