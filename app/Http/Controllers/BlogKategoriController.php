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
          return view('blogkategori.index', compact('$all_blog_kategori'));
    }

    public function create()
    {
          return view('blogkategori.create');
    }

    public function show(Blog_kategori $blog_kategori)
    {
          return view('blogkategori.show', compact('blog_kategori'));
    }

    public function store(Request $request)
    {
          $this->validator($request);
          $input = $request->all();
          $store = Blog_kategori::create($input);
          if($store)
          {
              return redirect('blogkategori.index')->with('flash_message', 'Data berhasil diinput')
                                                  ->with('alert-class', 'alert-success');
          }
          //Kalo gagal return yang ini
          return redirect('blogkategori.index')->with('flash_message', 'Data gagal diinput')
                                              ->with('alert-class', 'alert-danger');
    }

    public function update(Request $request, Blog_kategori $blog_kategori)
    {
          $this->validator($request);
          $input = $request->all();
          $update = $blog_kategori->update($input);
          if($update)
          {
              return redirect('blogkategori.index')->with('flash_message', 'Data berhasil diubah')
                                                  ->with('alert-class', 'alert-success');
          }
          //Kalo gagal return yang ini
          return redirect('blogkategori.index')->with('flash_message', 'Data gagal diubah')
                                              ->with('alert-class', 'alert-danger');
    }

    public function delete(Blog_kategori $blog_kategori)
    {
          $delete = $blog_kategori->delete();
          if($update)
          {
              return redirect('blogkategori.index')->with('flash_message', 'Data berhasil dihapus')
                                                  ->with('alert-class', 'alert-success');
          }
          //Kalo gagal return yang ini
          return redirect('blogkategori.index')->with('flash_message', 'Data gagal dihapus')
                                              ->with('alert-class', 'alert-danger');
    }
    //
}
