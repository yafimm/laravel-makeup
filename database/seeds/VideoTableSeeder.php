<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $video = new Video;
          $video->judul = 'Membuat alis dengan menggunakan pensil seniman';
          $video->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
          $video->thumbnail = 'example.blog1.jpg';
          $video->video = 'sample.video1.mp4';
          $video->admin = 'dzakim';
          $video->hak_akses = 1;
          $video->save();


          $video = new Video;
          $video->judul = '5 Tips menggunakan lipstik dengan kombinasi warna ungu dan merah';
          $video->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
          $video->thumbnail = 'example.blog2.jpg';
          $video->video = 'sample.video2.mp4';
          $video->admin = 'yafimm';
          $video->hak_akses = 2;
          $video->save();


          $video = new Video;
          $video->judul = 'Berbagai cara menggambar alis sesuai dengan kondisi';
          $video->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
          $video->thumbnail = 'example.blog3.jpg';
          $video->video = 'sample.video3.mp4';
          $video->admin = 'yafimm';
          $video->hak_akses = 3;
          $video->save();

    }
}
