<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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
