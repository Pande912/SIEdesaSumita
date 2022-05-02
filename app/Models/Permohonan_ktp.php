<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan_ktp extends Model
{
    use HasFactory;
    protected $table = 'permohonan_ktp';
    protected $fillable =
     ['nama_pemohon', 
    'nik', 
    'alamat',
    'alasan',
    'status',
    'user_id',
    'banjar_id'

    ];

    public function user(){
        return  $this->belongsTo(User::class);
    }

}
