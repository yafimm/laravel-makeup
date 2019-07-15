<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk_akses extends Model
{
    protected $table = 'produk_akses';

    protected $fillable = [
      'akun_akses', 'harga', 'waktu', 'potongan_harga', 'deskripsi'
    ];

    public function akses(){
        return $this->belongsTo('App\akses','akun_akses');
    }
}
