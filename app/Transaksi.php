<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public $incrementing = false;

    protected $fillable = [
      'user', 'admin', 'id', 'total_harga', 'id_akses', 'waktu';
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user');
    }

    public function admin(){
        return $this->belongsTo('App\Admin', 'admin');
    }

    public function akses(){
        return $this->belongsTo('App\Akses', 'akses');
    }
}
