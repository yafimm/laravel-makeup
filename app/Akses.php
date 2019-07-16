<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    protected $table = 'akses';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nama', 'nilai_akses', 'deskripsi', 'harga', 'logo'
    ];

    public function user(){
        return $this->belongsToMany('App\User', 'user_akses', 'id_akses', 'username')->withPivot('status', 'waktu_berakhir', 'waktu_mulai')->withTimestamps();
    }

    public function video(){
       return $this->hasMany('App\Video', 'hak_akses', 'id');
    }

    public function produk_akses(){
       return $this->hasMany('App\Produk_akses', 'akun_akses', 'id');
    }

}
