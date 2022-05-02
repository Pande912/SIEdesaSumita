<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_permohonan_pindah extends Model
{
    protected $table = 'detail_permohonan_pindah';
    protected $fillable = ['nik', 'nama', 'masa_berlaku_ktp','shdk','permohonan_pindah_id'];
    use HasFactory;

    public function permohonan_pindah(){
        return  $this->belongsTo(Permohonan_pindah::class);
    }
}

