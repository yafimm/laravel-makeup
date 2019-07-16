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


Route::get('/subscribe', 'ProdukAksesController@index_user');

Route::namespace('Auth')->group(function(){
    Route::post('/login', 'LoginController@loginPost')->name('login.post');
    Route::post('/register', 'LoginController@registerPost')->name('register.post');
    Route::get('/login', 'LoginController@login')->name('login');
    Route::get('/register', 'LoginController@register')->name('register');
    Route::post('/logout', 'LoginController@logout')->name('logout.post');

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
  Route::get('/u/{username}', 'UserController@index_user')->name('profile');

});

Route::group(['prefix' => 'profile',  'middleware' => ['user']], function(){
    Route::get('password', 'UserController@edit_password')->name('password.edit');
    Route::get('profile', 'UserController@edit_profile')->name('profile.edit');
    Route::put('password', 'UserController@update_password')->name('password.update');
    Route::put('profile', 'UserController@update_profile')->name('profile.update');
    Route::get('transaksi', 'TransaksiController@index_user')->name('profile.transaksi');
    Route::get('transaksi/{id}', 'TransaksiController@show_user')->name('profile.transaksi.show');
    Route::get('service', 'ProdukAksesController@index_service')->name('service.index');
});

Route::group(['middleware' => ['user']], function(){
    Route::post('subscribe/pesan', 'TransaksiController@store_user')->name('pesan.store');
    Route::get('subscribe/pesan', 'TransaksiController@create_user')->name('pesan.create');
    Route::get('subscribe/success', 'TransaksiController@show_user');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
    Route::get('dashboard', 'AdminController@index');
    Route::get('transaksi/riwayat', 'TransaksiController@index_riwayat');
    Route::get('transaksi/riwayat/{id}', 'TransaksiController@show_riwayat')->name('transaksi.show-riwayat');
    Route::resource('akses', 'AksesController');
    Route::resource('tipeadmin', 'TipeAdminController');
    Route::resource('admin', 'AdminController');
    Route::resource('video', 'VideoController');
    Route::resource('blogkategori', 'BlogKategoriController');
    Route::resource('blog', 'BlogController');
    Route::resource('produk', 'ProdukAksesController');
    Route::resource('transaksi', 'TransaksiController');
});
