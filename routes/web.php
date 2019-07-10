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

Route::get('/blog', 'BlogController@index_user');
Route::get('/blog/{id}', 'Blogcontroller@show_user');

Route::get('/subscribe', function () {
  return view('subscribe.index-user');
});

Route::get('/video', 'VideoController@index_user');
Route::get('/video/{id}', 'VideoController@show_user');

Route::get('/admin', function () {
  return view('video.index-user');
});

Route::post('/login', 'UserController@login');
// $router->post('/login', 'UserController@login');
// $router->get('/user', 'UserController@index');
// $router->get('/user/{username}', 'UserController@show');
// $router->post('/user', 'UserController@store');
// $router->put('/user/{username}', 'UserController@update');
// $router->delete('/user/{username}', 'Usercontroller@delete');

Route::group(['prefix' => 'admin'], function(){
  Route::resource('akses', 'AksesController');
  Route::resource('tipeadmin', 'TipeAdminController');
  Route::resource('admin', 'AdminController');
  Route::resource('video', 'VideoController');
  Route::resource('blogkategori', 'BlogKategoriController');
  Route::resource('blog', 'BlogController');
});
