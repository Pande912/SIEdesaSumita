<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan_pindah extends Model
{
    use HasFactory;
    protected $table = 'permohonan_pindah';
    protected $fillable =
     [ 
         'jenis_surat',
         'kk_lama', 
    'kepala_keluarga_lama',
    'status',
    'user_id', 
    'alamat_lama',
    'banjar_lama',
    'kelurahan_lama',
    'kode_pos',
    'telepon',
    'nik_pemohon',
    'nama_pemohon',
    'kk_baru',
    'nik_kepala_keluarga_baru',
    'tgl_kedatangan',
    'alamat_baru',
    'banjar_baru',
    'kelurahan_baru',
    'status',
    'status_kk',
    'keterangan_surat',
    'user_id',
    'kepala_keluarga_baru',
    'telepon_baru',
    'banjar_id'
    ];


    public function user(){
        return  $this->belongsTo(User::class);
    }

    public function detail_permohonan_pindah(){
        return $this->hasMany(Detail_permohonan_pindah::class);
    }
}
