<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = [
        'id_blog_kategori', 'judul', 'slug', 'isi_blog', 'admin'
    ];

    public function blog_kategori(){
      return $this->belongsTo('App\Blog_kategori', 'id_blog_kategori');
    }

    public function gambar(){
      return $this->hasMany('App\Gambar', 'id_blog', 'id');
    }
}
