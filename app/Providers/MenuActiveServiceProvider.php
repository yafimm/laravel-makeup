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

        if (Request::segment(1) == 'about') {
             $halaman = 'about';
        }

        if (Request::segment(1) == 'blog') {
             $halaman = 'blog';
        }

        if (Request::segment(1) == 'video') {
             $halaman = 'video';
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

    }
}
