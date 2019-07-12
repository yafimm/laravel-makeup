<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/subscribe', function () {
  return view('subscribe.index-user');
});

Route::namespace('Auth')->group(function(){
    Route::post('/login', 'LoginController@loginPost');
    Route::post('/register', 'LoginController@registerPost');
    Route::get('/login', 'LoginController@login');
    Route::get('/register', 'LoginController@register');
    Route::get('/logout', 'LoginController@logout');

    Route::get('/loginadmin', 'AdminLoginController@login');
    Route::post('/loginadmin', 'AdminLoginController@loginPost');
    Route::post('/registeradmin', 'AdminLoginController@registerPost');
    Route::post('/admin/logout', 'AdminLoginController@logout');
});

Route::group(['middleware' => ['web']], function(){
  Route::get('/blog', 'BlogController@index_user');
  Route::get('/blog/{id}/{slug}', 'Blogcontroller@show_user');
  Route::get('/video', 'VideoController@index_user');
  Route::get('/video/{id}/{slug}', 'VideoController@show_user'); // slugnya cuma gimmik doang ini mah
  Route::get('/videos/{id}', 'VideoController@getVideo')->name('getvideo');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
    Route::resource('akses', 'AksesController');
    Route::resource('tipeadmin', 'TipeAdminController');
    Route::resource('admin', 'AdminController');
    Route::resource('video', 'VideoController');
    Route::resource('blogkategori', 'BlogKategoriController');
    Route::resource('blog', 'BlogController');
});
