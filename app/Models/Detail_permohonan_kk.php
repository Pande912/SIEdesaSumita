<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_permohonan_kk extends Model
{
    protected $table = 'detail_permohonan_kk';
    protected $fillable = ['nik', 'nama', 'masa_berlaku_ktp','shdk','permohonan_kk_id'];
    use HasFactory;

    public function permohonan_kk(){
        return  $this->belongsTo(Permohonan_kk::class);
    }
}
