<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;


class UserController extends Controller
{

    public function __construct()
    {

    }

    private function validator(Request $request)
    {

        if($request->isMethod('post')){
          $alamat = 'sometimes|string|min:5|max:50|unique:blog';
          $no_telp = 'sometimes|regex:/(01)[0-9]{9}/';
        }else{
          $alamat = 'required|string|min:5|max:100';
          $no_telp = 'required|regex:/(01)[0-9]{9}/';
        }
        //validation rules.
        $rules = [
          'username' => $judul,
          'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|confirmed',
          'nama' => 'required|string|min:6|max:50',
          'email' => 'required|email|unique:user',
          'alamat' => $alamat,
          'no_telp' => $no_telp,
        ];

        $messages = [''];

        //validate the request.
        $this->validate($request ,$rules);
    }

    public function index()
    {
        $all_user = User::all();
        return view('user.index', compact('all_user'));
    }


    public function store(Request $request)
    {
        $this->validator($request);
        $password = Hash::make($request->password);
        $data = [
                 'username' => $request->username,
                 'password' => $password,
                 'nama' => $request->nama,
                 'email' => $request->email,
                 'alamat' => $request->alamat,
                 'no_telp' => $request->no_telp
               ];

       $register = User::create($data);
       if($register){
        // return redirect('user.index')
       }
    }


    public function show(User $user)
    {
          return view('user.show', compact('user'));
    }

    public function update(Request $request, $username)
    {
          $this->validator($request);
          $input = $request->all();
          $user = User::find($username);
          if($user)
          {
                $update = $user->update($input);
                if($update){
                      $user = User::find($username); //update data terbaru
                      return response()->json([
                             'success' => true,
                             'code' => 201,
                             'message' => 'data berhasil diubah',
                             'data' => $user,
                             ], 201);
                }
          }
          // Kalo gagal nanti bakal dilempar kesini
          // return redirect('user.dashboard')->
    }

    public function delete($username)
    {
          $user = User::find($username);
          if($user)
          {
                $delete = $user->delete();
                if($delete)
                {
                      return response()->json([
                               'success' => true,
                               'code' => 201,
                               'message' => 'Hapus data berhasil dilakukan',
                               'data' => $user
                               ], 201);
                }
          }

          return response()->json([
                   'success' => true,
                   'code' => 400,
                   'message' => 'Data Tidak ditemukan',
                   'data' => NULL
                   ], 201);
    }


}
