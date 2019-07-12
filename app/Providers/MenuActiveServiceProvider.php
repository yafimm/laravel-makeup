<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Request;

class MenuActiveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = 'home';
        $title_halaman = 'BEAUTY MASTER - The Greatest Makeup Online Course';

        if (Request::segment(1) == 'about') {
             $halaman = 'about';
             $title_halaman = 'About - BEAUTY MASTER';
        }

        if (Request::segment(1) == 'blog') {
             $halaman = 'blog';
             $title_halaman = 'Blog - BEAUTY MASTER';
        }

        if (Request::segment(1) == 'video') {
             $halaman = 'video';
             $title_halaman = 'Video - BEAUTY MASTER';
        }

        // Buat Admin Dashboard

        if(Request::segment(1) == 'admin'){
             $halaman = 'dashboard';
             if(Request::segment(2) == 'video'){
                   $halaman = 'adminvideo';
             }

             if(Request::segment(2) == 'blog' || Request::segment(2) == 'blogkategori'){
                   $halaman = 'adminblog';
             }
        }


        view()->share('halaman', $halaman);
        view()->share('title_halaman', $title_halaman);

    }
}
