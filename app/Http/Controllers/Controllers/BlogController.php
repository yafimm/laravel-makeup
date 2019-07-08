<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{

    public function __construct()
    {
        //
    }

    private function validator(Request $request)
    {

        if($request->isMethod('POST')){
            $judul = 'required|string|min:5|max:50|unique:blog';
        }else{
            $judul = 'required|string|min:5|max:50';
        }
        //validation rules.
        $rules = [
          'judul' => $judul,
          'isi_blog' => 'required|string',
          'id_blog_kategori' => 'required'
        ];

        $messages = [''];

        //validate the request.
        $this->validate($request ,$rules);
    }

    public function index()
    {
          $all_blog = Blog::all();
          return response()->json([
                   'success' => true,
                   'code' => 201,
                   'message' => 'success',
                   'data' => $all_blog
                   ], 201);

    }

    public function show($id)
    {
          $blog = Blog::find($id);
          if($blog){
                return response()->json([
                         'success' => true,
                         'code' => 201,
                         'message' => 'Data berhasil ditemukan',
                         'data' => $blog
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
          $input['slug'] = str_slug($request->judul,'-');
          $blog = Blog::create($input);
          if($blog){
                return response()->json([
                         'success' => true,
                         'code' => 201,
                         'message' => 'Input blog berhasil dilakukan',
                         'data' => $blog
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
          $blog = Blog::find($id);
          if($blog)
          {
                $update = $blog->update($input);
                if($update)
                {
                      $blog = Blog::find($id);
                      return response()->json([
                             'success' => true,
                             'code' => 201,
                             'message' => 'data berhasil diubah',
                             'data' => $blog,
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
          $blog = Blog::find($id);
          if($blog)
          {
                $delete = $blog->delete();
                if($delete)
                {
                      return response()->json([
                             'success' => true,
                             'code' => 201,
                             'message' => 'data berhasil dihapus',
                             'data' => $blog,
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
