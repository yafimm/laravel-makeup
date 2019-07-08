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
          $blog_kategori = Blog_kategori::create($input);
          return redirect('blogkategori.index')->with();
    }

    public function update(Request $request, Blog_kategori $blog_kategori)
    {
          $this->validator($request);
          $input = $request->all();
          $update = $blog_kategori->update($input);
          if($update)
          {
              return redirect('blogkategori.index')->with();
          }
          // Kalo gagal nanti bakal dilempar kesini
          return redirect('blogkategori.index')->with();
    }

    public function delete(Blog_kategori $blog_kategori)
    {
          $delete = $blog_kategori->delete();
          if($delete)
          {
              return redirect('blogkategori.index')->with();
          }
          // Kalo gagal nanti bakal dilempar kesini
          return redirect('blogkategori.index')->with();
    }
    //
}
