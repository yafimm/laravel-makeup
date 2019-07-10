<?php

use Illuminate\Database\Seeder;
use App\Akses;

class AksesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $akses = new Akses;
          $akses->nama = 'Bronze';
          $akses->nilai_akses = 0;
          $akses->harga = 0;
          $akses->deskripsi = 'Free Account';
          $akses->save();

          $akses = new Akses;
          $akses->nama = 'Silver';
          $akses->nilai_akses = 10;
          $akses->harga = 100000;
          $akses->deskripsi = 'Advanced account with a few access controll and feature';
          $akses->save();

          $akses = new Akses;
          $akses->nama = 'Gold';
          $akses->nilai_akses = 20;
          $akses->harga = 200000;
          $akses->deskripsi = 'Expert Account with full access premium videos and feature';
          $akses->save();

    }
}
