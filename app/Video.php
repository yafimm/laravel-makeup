<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cohensive\Embed\Facades\Embed;

class Video extends Model
{
    protected $table = 'video';

    protected $fillable = [
        'judul', 'video', 'deskripsi','admin', 'hak_akses', 'thumbnail'
    ];

    public function akses(){
        return $this->belongsTo('App\Akses', 'hak_akses');
    }

    public function getVideoHtmlAttribute()
    {
         $embed = Embed::make($this->video)->parseUrl();

         if (!$embed)
             return '';

         $embed->setAttribute(['width' => 400]);
         return $embed->getHtml();
    }

}
