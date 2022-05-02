<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Permohonan_meninggal extends Model
{
    use HasFactory;
    protected $table = 'permohonan_meninggal';
    protected $fillable =
     ['penduduk_id', 
    'tgl_meninggal', 
    'tempat_meninggal', 
    'keterangan',
    'status',
    'user_id',
    'banjar_id'
    ];

    public function penduduk(){
        return  $this->belongsTo(Penduduk::class);
    }

    public function user(){
        return  $this->belongsTo(User::class);
    }
}
