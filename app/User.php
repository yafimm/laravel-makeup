<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    
    protected $table = 'user';

    protected $primaryKey = 'username';
    public $incrementing = false;

    protected $fillable = [
        'nama', 'email', 'username', 'no_telp', 'alamat', 'password'
    ];

    protected $hidden = [
        'password',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function akses(){
      return $this->belongsToMany('App\Akses', 'user_akses', 'username', 'id_akses')->withPivot('status', 'waktu_berakhir');
    }
}
