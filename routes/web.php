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
    Route::post('/logout', 'LoginController@logout');

    Route::get('/loginadmin', 'AdminLoginController@login');
    Route::post('/loginadmin', 'AdminLoginController@loginPost');
    Route::post('/registeradmin', 'AdminLoginController@registerPost');
    Route::post('/admin/logout', 'AdminLoginController@logout');
});

Route::group(['middleware' => ['web']], function(){
  Route::get('/blog', 'BlogController@index_user');
  Route::get('/blog/kategori/{slug}', 'BlogController@index_user_by_kategori');
  Route::get('/blog/{id}/{slug}', 'Blogcontroller@show_user');
  Route::get('/video', 'VideoController@index_user');
  Route::get('/video/{id}/{slug}', 'VideoController@show_user'); // slugnya cuma gimmik doang ini mah
  Route::get('/videos/{id}', 'VideoController@getVideo')->name('getvideo');
  Route::get('/{username}', 'UserController@index_user')->name('profile');
});

Route::group(['prefix' => 'settings',  'middleware' => ['user']], function(){
    Route::get('password', 'UserController@edit_password')->name('password.edit');
    Route::get('profile', 'UserController@edit_profile')->name('profile.edit');
    Route::put('password', 'UserController@update_password')->name('password.update');
    Route::put('profile', 'UserController@update_profile')->name('profile.update');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
    Route::get('dashboard', 'AdminController@index');
    Route::resource('akses', 'AksesController');
    Route::resource('tipeadmin', 'TipeAdminController');
    Route::resource('admin', 'AdminController');
    Route::resource('video', 'VideoController');
    Route::resource('blogkategori', 'BlogKategoriController');
    Route::resource('blog', 'BlogController');
    Route::resource('produk', 'ProdukAksesController');
});
