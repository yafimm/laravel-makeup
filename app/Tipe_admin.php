<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe_admin extends Model
{
    protected $table = 'tipe_admin';

    public $timestamps = false;

    protected $fillable = [
        'nama_tipe_admin'
    ];

    public function admin(){
      return $this->hasMany('App\Admin', 'id_tipe_admin', 'id');
    }
}
