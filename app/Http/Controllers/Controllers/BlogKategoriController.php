<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Blog_kategori;

class BlogKategoriController extends Controller
{

    public function __construct()
    {
        //
    }

    private function validator(Request $request)
    {

        $rules = [
          'nama_kategori' => 'required|string|min:4|max:255',
        ];

        $messages = [''];

        //validate the request.
        $this->validate($request ,$rules);
    }

    public function index()
    {
          $all_blog_kategori = Blog_kategori::all();
          return response()->json([
                   'success' => true,
                   'code' => 201,
                   'message' => 'success',
                   'data' => $all_blog_kategori
                   ], 201);

    }

    public function show($id)
    {
          $blog_kategori = Blog_kategori::find($id);
          if($blog_kategori){
                return response()->json([
                         'success' => true,
                         'code' => 201,
                         'message' => 'Data berhasil ditemukan',
                         'data' => $blog_kategori
                         ], 201);
          }else{
                return response()->json([
                         'success' => false,
                         'code' => 400,
                         'message' => 'Data tidak ditemukan',
                         'data' => Null
                       ], 400);
          }
    }

    public function store(Request $request)
    {
          $this->validator($request);
          $input = $request->all();
          $blog_kategori = Blog_kategori::create($input);
          if($blog_kategori){
                return response()->json([
                         'success' => true,
                         'code' => 201,
                         'message' => 'Input blog berhasil dilakukan',
                         'data' => $blog_kategori
                         ], 201);
          }else{
                return response()->json([
                         'success' => false,
                         'code' => 400,
                         'message' => 'Input blog gagal dilakukan',
                         'data' => Null
                       ], 400);
          }
    }

    public function update(Request $request, $id)
    {
          $this->validator($request);
          $input = $request->all();
          $blog_kategori = Blog_kategori::find($id);
          if($blog_kategori)
          {
                $update = $blog_kategori->update($input);
                if($update)
                {
                      $blog_kategori = Blog_kategori::find($id);
                      return response()->json([
                             'success' => true,
                             'code' => 201,
                             'message' => 'data berhasil diubah',
                             'data' => $blog_kategori,
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

    public function delete($id)
    {
          $blog_kategori = Blog_kategori::find($id);
          if($blog_kategori)
          {
                $delete = $blog_kategori->delete();
                if($delete)
                {
                      return response()->json([
                             'success' => true,
                             'code' => 201,
                             'message' => 'data berhasil dihapus',
                             'data' => $blog_kategori,
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

    //
}
