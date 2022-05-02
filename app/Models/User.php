<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama',
        'username',
        'banjar_id',
        'password',
        'alamat',
        'no_HP',
        'jenis_kelamin',
        'role',
        'avatar',
    ];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('public/images/default.jpg');
        }
        return asset('public/images/'.$this->avatar);
    }

    public function banjar(){
        return  $this->belongsTo(Banjar::class);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}