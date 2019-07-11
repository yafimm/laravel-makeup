<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends \Eloquent implements Authenticatable
{

    use AuthenticableTrait;

    protected $table = 'admin';

    protected $primaryKey = 'username';

    public $incrementing = false;


    protected $fillable = [
        'nama', 'username', 'password', 'email', 'alamat', 'no_telp', 'id_tipe_admin'
    ];

    protected $hidden = [
        'password',
    ];

    public function tipe_admin(){
        return $this->belongsTo('App\Tipe_admin', 'id_tipe_admin');
    }
}
