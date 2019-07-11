<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';

    protected $fillable = [
        'judul', 'video', 'deskripsi','admin', 'hak_akses', 'thumbnail'
    ];

    public function akses(){
        return $this->belongsTo('App\Akses', 'hak_akses');
    }

}
