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
          $blogkategori->nama_kategori = 'Makeup Artist';
          $blogkategori->slug = str_slug('Makeup Artist','-');
          $blogkategori->save();

          $blogkategori = new Blog_kategori;
          $blogkategori->nama_kategori = 'Tips n Trick';
          $blogkategori->slug = str_slug('Tips n Trick','-');
          $blogkategori->save();

          $blogkategori = new Blog_kategori;
          $blogkategori->nama_kategori = 'Fashion and Style';
          $blogkategori->slug = str_slug('Fashion and Style','-');
          $blogkategori->save();

          $blogkategori = new Blog_kategori;
          $blogkategori->nama_kategori = 'Face Treatment';
          $blogkategori->slug = str_slug('Face Treatment','-');
          $blogkategori->save();

          $blogkategori = new Blog_kategori;
          $blogkategori->nama_kategori = 'Entertainment';
          $blogkategori->slug = str_slug('Entertainment','-');
          $blogkategori->save();

          $blogkategori = new Blog_kategori;
          $blogkategori->nama_kategori = 'Out of Topic';
          $blogkategori->slug = str_slug('Out Of Topic', '-');
          $blogkategori->save();
    }
}
