<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin;
use App\Tipe_admin;
use App\Video;
use App\Blog;
use App\User;

class AdminController extends Controller
{

    public function __construct()
    {
        //
    }

    private function validator(Request $request)
    {

        if($request->isMethod('post')){
            $username = 'required|string|min:5|max:30';
            $id_tipe_admin = 'required';
            $no_telp = 'sometimes|string';
            $password = 'required|min:6|string';
        }else{
            $username = '   ';
            $judul = 'required|string|min:5|max:50';
            $id_tipe_admin = '';
            $password = 'sometimes|min:6|string';
            $no_telp = 'required|string';
        }
        //validation rules.
        $rules = [
          'username' => $username,
          'id_tipe_admin' => $id_tipe_admin,
          'nama' => 'required|string|min:5|max:255',
          'password' => $password,
          // 'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|confirmed',
          'email' => 'required|email|min:6|unique:admin',
          'no_telp' => $no_telp,
          'alamat' => 'required|min:6|string'
        ];

        $messages = [''];

        //validate the request.
        $this->validate($request ,$rules);
    }

    public function index()
    {
        $total_videos = Video::all()->count();
        $total_blogs = Blog::all()->count();
        $total_user_week = User::whereMonth('created_at', date('m'))->get()->count();
        $all_recent_videos = Video::orderBy('created_at','desc')->take(4)->get();
        $all_recent_blogs = Blog::orderBy('created_at','desc')->take(4)->get();
        return view('admin.index', compact('all_recent_blogs', 'all_recent_videos', 'total_blogs', 'total_videos', 'total_user_week'));
    }

    public function store(Request $request){

    }

    public function update(Request $request, $username)
    {


    }

    public function delete($username){

    }

    //
}
