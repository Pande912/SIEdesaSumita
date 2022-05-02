<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduk';
    protected $fillable =
     ['nama', 
    'kartu_kk_id', 
    'nik',
    'alamat',
    'jenis_kelamin',
    'hubungan_keluarga',
    'agama', 
    'pendidikan',
    'pekerjaan',
    'nama_ayah',
    'nama_ibu',
    'status',
    'tgl_terdaftar',
    'tgl_pindah',
    'tgl_lahir',
    'tempat_lahir',
    'tgl_meninggal',
    'sts_kpl_keluarga',
    'banjar_id'

    ];

    public function kartu_kk(){
        return  $this->belongsTo(Kartu_kk::class);
    }
}


