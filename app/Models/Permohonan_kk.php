<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan_kk extends Model
{
    use HasFactory;
    protected $table = 'permohonan_kk';
    protected $fillable =
     ['nama', 
    'nik', 
    'no_kk_lama',
    'alamat',
    'alasan',
    'status',
    'user_id',
    'banjar_id'
    ];

    public function user(){
        return  $this->belongsTo(User::class);
    }

    public function detail_permohonan_kk(){
        return $this->hasMany(Detail_permohonan_kk::class);
    }
}