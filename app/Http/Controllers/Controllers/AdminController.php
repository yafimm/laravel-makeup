<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin;
use App\Tipe_admin;

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

    public function index(){
      $data = Admin::all();
      return response()->json([
               'success' => true,
               'code' => 200,
               'message' => 'Success',
               'data' => $data
             ], 200);
    }

    public function store(Request $request){
        $this->validator($request);
        $input = $request->all();
        $data = Admin::create($input);
        if($data){
              return response()->json([
                       'success' => true,
                       'code' => 201,
                       'message' => 'Input data berhasil dilakukan',
                       'data' => $data
                       ], 201);
        }else{
              return response()->json([
                       'success' => false,
                       'code' => 400,
                       'message' => 'Input data gagal dilakukan',
                       'data' => Null
                     ], 400);
        }
    }

    public function show($username){
      $data = Admin::find($username);
      if($data){
          $tipe = Admin::find($username)->tipe_admin;
          return response()->json([
                   'success' => true,
                   'code' => 200,
                   'message' => 'Data Berhasil ditemukan',
                   'data' => ['admin' => $data, 'privilage' => $tipe],
                 ], 200);
      }else{
          return response()->json([
                   'success' => false,
                   'code' => 400,
                   'message' => 'Data tidak ditemukan',
                   'data' => null
                 ], 400);
      }
    }

    public function update(Request $request, $username)
    {
          $this->validator($request);
          $input = $request->all();
          $Admin = Admin::find($username);
          if($Admin)
          {
                $Admin = $Admin->update($input);
                if($Admin){
                      return response()->json([
                             'success' => true,
                             'code' => 201,
                             'message' => 'data berhasil diubah',
                             'data' => $input,
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

    public function delete($username){
        $data = Admin::find($username);
        if($data){
            $data->delete();
            return response()->json([
                     'success' => true,
                     'code' => 201,
                     'message' => 'Hapus data berhasil dilakukan',
                     'data' => $data
                     ], 201);
        }else{
            return response()->json([
                     'success' => true,
                     'code' => 400,
                     'message' => 'Data Tidak ditemukan',
                     'data' => NULL
                   ], 400);
        }
    }

    //
}
