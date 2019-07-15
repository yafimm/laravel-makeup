<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public $incrementing = false;

    protected $fillable = [
      'user', 'admin', 'id', 'total_harga', 'id_produk', 'waktu', 'status'
    ];

    public function users(){
        return $this->belongsTo('App\User', 'user');
    }

    public function admin(){
        return $this->belongsTo('App\Admin', 'admin');
    }

    public function produk_akses(){
        return $this->belongsTo('App\Produk_akses', 'id_produk');
    }
}
