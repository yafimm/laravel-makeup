<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Lumen\Auth\Authorizable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject
{
  use Authenticatable, Authorizable;


    protected $table = 'user';

    protected $primaryKey = 'username';
    public $incrementing = false;

    protected $fillable = [
        'nama', 'email', 'username', 'no_telp', 'alamat', 'password'
    ];

    protected $hidden = [
        'password',
    ];

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }


    public function akses(){
      return $this->belongsToMany('App\Akses', 'user_akses', 'username', 'id_akses')->withPivot('status', 'waktu_berakhir');
    }
}
