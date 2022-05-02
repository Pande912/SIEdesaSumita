<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banjar extends Model
{
     use HasFactory;

     protected $table = 'banjar';
     protected $fillable = ['nama_banjar', 'keterangan'];

     public function user(){
         return $this->hasMany(User::class);
     }
}
