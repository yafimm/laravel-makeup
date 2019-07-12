<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BlogkategoriRequest;
use App\Blog_kategori;

class BlogKategoriController extends Controller
{

    public function __construct()
    {
        //
    }

    public function index()
    {
          $all_blog_kategori = Blog_kategori::simplePaginate(15);
          return view('blogkategori.index', compact('all_blog_kategori'));
    }

    public function create()
    {
          $blog_kategori = new Blog_kategori;
          return view('blogkategori.create', compact('blog_kategori'));
    }

    public function show(Blog_kategori $blog_kategori)
    {
          return view('blogkategori.show', compact('blog_kategori'));
    }

    public function store(BlogkategoriRequest $request)
    {
          $input = $request->all();
          $store = Blog_kategori::create($input);
          if($store)
          {
              return redirect()->route('blogkategori.index')->with('flash_message', 'Data berhasil diinput')
                                                  ->with('alert-class', 'alert-success');
          }
          //Kalo gagal return yang ini
          return redirect()->route('blogkategori.index')->with('flash_message', 'Data gagal diinput')
                                              ->with('alert-class', 'alert-danger');
    }

    public function edit(Blog_kategori $blog_kategori)
    {
          return view('blogkategori.edit', compact('blog_kategori'));
    }

    public function update(BlogkategoriRequest $request, Blog_kategori $blog_kategori)
    {
          $input = $request->all();
          $update = $blog_kategori->update($input);
          if($update)
          {
              return redirect()->route('blogkategori.index')->with('flash_message', 'Data berhasil diubah')
                                                  ->with('alert-class', 'alert-success');
          }
          //Kalo gagal return yang ini
          return redirect()->route('blogkategori.index')->with('flash_message', 'Data gagal diubah')
                                              ->with('alert-class', 'alert-danger');
    }

    public function destroy(Blog_kategori $blog_kategori)
    {
          $delete = $blog_kategori->delete();
          if($delete)
          {
              return redirect()->route('blogkategori.index')->with('flash_message', 'Data berhasil dihapus')
                                                  ->with('alert-class', 'alert-success');
          }
          //Kalo gagal return yang ini
          return redirect()->route('blogkategori.index')->with('flash_message', 'Data gagal dihapus')
                                              ->with('alert-class', 'alert-danger');
    }
    //
}
