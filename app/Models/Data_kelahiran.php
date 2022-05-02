<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_kelahiran extends Model
{
    use HasFactory;
    protected $table = 'data_kelahiran';
    protected $fillable =
     ['no_surat',
        'tgl_surat',
     'nama', 
    'anak_ke', 
    'anak_ke',
    'tgl_lahir',
    'tempat_lahir',
    'jenis_kelamin',
    'nama_ayah',
    'nama_ibu',
    ];
}
