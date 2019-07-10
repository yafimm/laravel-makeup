<?php

use Illuminate\Database\Seeder;
use App\Blog_kategori;

class BlogKategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $blogkategori = new Blog_kategori;
          $blogkategori->nama_kategori = 'Artikel';
          $blogkategori->save();
    }
}
