<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu_kk extends Model
{
    protected $table = 'kartu_kk';
    protected $fillable = ['nomer_KK', 'banjar_id', 'alamat_KK'];
    use HasFactory;

    public function banjar(){
        return  $this->belongsTo(Banjar::class);
    }
}
