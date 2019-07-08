<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambar';

    protected $fillable = [
        'id_blog','nama_gambar','url'
    ];

    public function blog(){
      return $this->belongsTo('App\blog', 'id_blog');
    }
}
