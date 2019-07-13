<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;

    protected $table = 'user';

    protected $primaryKey = 'username';
    public $incrementing = false;

    protected $fillable = [
        'nama', 'email', 'username', 'no_telp', 'alamat', 'password', 'foto','facebook','instagram','twitter','linkedin'
    ];

    protected $hidden = [
        'password',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function getHakAksesAttribute()
    {
        $akses = $this->akses();
        $data = collect();
        foreach ($akses->get() as $test) {
             $test->pivot->nilai_akses = $test->nilai_akses;
             $test->pivot->nama = $test->nama;
             $data->push($test->pivot);
        }
        $data = $data->where('status', 'Aktif')
                      ->where('tanggal_berakhir', '<=', date('Y-m-d'))
                      ->sortByDesc('nilai_akses')->first();
        return $data;
    }

    public function akses(){
      return $this->belongsToMany('App\Akses', 'user_akses', 'username', 'id_akses')->withPivot('status', 'waktu_berakhir');
    }
}
