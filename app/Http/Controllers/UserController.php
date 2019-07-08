<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth',['except' => ['login']]);
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


    public function login(Request $request)
    {
        $token = app('auth')->attempt(['username' => $request->username, 'password' => $request->password]);
        if($token){
          return response()->json([
            'success' => true,
            'message' => 'Success',
            'data' => ['token' => $token]
          ], 200);
        }else{
          return response()->json([
            'success' => false,
            'message' => 'Failed, Wrong username or password',
            'data' => ''
          ], 400);
        }
    }

    public function index()
    {
        $user = User::all();
        return response()->json([
                  'success' => true,
                  'message' => 'Success',
                  'data' => $user
            ], 200);
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
           return response()->json([
                    'success' => true,
                    'code' => 201,
                    'message' => 'Register berhasil dilakukan',
                    'data' => $register
                    ], 201);
       }else{
           return response()->json([
                    'success' => false,
                    'code' => 400,
                    'message' => 'Register gagal dilakukan',
                    'data' => $register
                  ], 400);
       }
    }


    public function show($username){
        $user = User::find($username);
        if($user){
            $akses = User::find($username)->akses; // Sengaja dipisah, kalo disatuin, var user bakal nampilin semua relasinya
            $data = null; // default akses

            foreach ($akses as $akses) {
              if($akses->pivot->status == 'Aktif'){
                $data = $akses;
              }
            };

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'User Found!',
                'data' => ['user' => $user, 'akses' => $data],
              ], 200);

        }else{
            return response()->json([
                'success' => false,
                'code' => 400,
                'message' => 'User not found!',
                'data' => Null,
              ], 400);
        }
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
          return response()->json([
                'success' => false,
                'code' => 400,
                'message' => 'data tidak ditemukan',
                'data' => ''
              ], 400);
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
