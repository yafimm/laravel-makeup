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
          return view('blog.index', compact('all_blog'));
    }

    public function index_user()
    {
          $all_blog = Blog::all();
          return view('blog.index-user', compact('all_blog'));
    }

    public function create()
    {
          return view('blog.create');
    }

    public function show(Blog $blog)
    {
          return view('blog.show', compact($blog));
    }

    public function store(Request $request)
    {
          $this->validator($request);
          $input = $request->all();
          $input['slug'] = str_slug($request->judul,'-');
          $blog = Blog::create($input);
          if($blog)
          {
              return redirect('blog.index')->with('flash_message', 'Data berhasil diinput')
                                            ->with('alert-class', 'alert-success');
          }
          //kalo gagal dilempar kesini
          return redirect('blog.index')->with('flash_message', 'Data gagal diinput')
                                        ->with('alert-class', 'alert-danger');
    }

    public function update(Request $request, Blog $blog)
    {
          $this->validator($request);
          $input = $request->all();
          $update = $blog->update($input);
          if($update)
          {
              return redirect('blog.index')->with('flash_message', 'Data berhasil diubah')
                                            ->with('alert-class', 'alert-success');
          }
          //kalo gagal dilempar kesini
          return redirect('blog.index')->with('flash_message', 'Data gagal diubah')
                                        ->with('alert-class', 'alert-danger');
    }

    public function delete($id)
    {
          $delete = $blog->delete();
          if($delete)
          {
              return redirect('blog.index')->with('flash_message', 'Data berhasil dihapus')
                                            ->with('alert-class', 'alert-success');
          }
          //kalo gagal dilempar kesini
          return redirect('blog.index')->with('flash_message', 'Data gagal dihapus')
                                        ->with('alert-class', 'alert-danger');
    }

    //
}
