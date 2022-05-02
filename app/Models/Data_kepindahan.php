<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_kepindahan extends Model
{
    use HasFactory;
    protected $table = 'data_kepindahan';
    protected $fillable =
     ['no_surat',
     'tgl_surat',
     'tgl_pindah', 
     'alamat_tujuan', 
    'keterangan',
    'penduduk_id',

    ];

    public function penduduk(){
        return  $this->belongsTo(Penduduk::class);
    }
}
