<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penduduk;


class Permohonan_lahir extends Model
{

    use HasFactory;
    protected $table = 'permohonan_lahir';
    protected $fillable =
     ['nama', 
    'tgl_lahir', 
    'tempat_lahir',
    'alamat',
    'jenis_kelamin',
    'nama_ayah',
    'nama_ibu',
    'nama_saksi_1',
    'alamat_saksi_1',
    'pekerjaan_saksi_1',
    'nama_saksi_2',
    'alamat_saksi_2',
    'pekerjaan_saksi_2',
    'anak_ke',
    'status',
    'user_id',
    'banjar_id'
    ];

    public function user(){
        return  $this->belongsTo(User::class);
    }

 
}
