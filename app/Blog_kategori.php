<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_kategori extends Model
{

    protected $table = 'blog_kategori';

    protected $fillable = [
        'nama_kategori','slug'
    ];

    public function blog(){
      return $this->hasMany('App\Blog', 'id_blog_kategori', 'id');
    }

}
