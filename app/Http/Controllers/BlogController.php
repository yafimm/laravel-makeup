<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Blog;

use Storage;

class BlogController extends Controller
{

    public function __construct()
    {
        //
    }

    private function uploadGambar(Request $request)
    {
        $gambar = $request->file('thumbnail');
        $ext = $video->getClientOriginalExtension();
        if($request->file('thumbnail')->isValid()){
            $filename = date('Ymd').".$request->judul.$ext";
            $upload_path = 'images/thumbnail';
            $request->file('thumbnail')->move($upload_path, $filename);
            return $filename;
        }
        return false;
    }

    private function hapusGambar(Blog $blog)
    {
        $exist = Storage::disk('thumbnail')->exists($blog->thumbnail);
        if(isset($blog->thumbnail) && $exist){
            $delete = Storage::disk('thumbnail')->delete($blog->thumbnail);
            return $delete; //Kalo delete gagal, bakal return false, kalo berhasil bakal return true
        }
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
          $blog = new Blog;
          return view('blog.create', compact('blog'));
    }

    public function show(Blog $blog)
    {
          return view('blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
          return view('blog.edit', compact('blog'));
    }

    // store artikel
    public function store(BlogRequest $request)
    {
          $input = $request->all();
          $input['id_blog_kategori'] = 1; // Foreign key dari Artikel
          $input['slug'] = str_slug($request->judul,'-');
          $input['admin'] = 'yafimm'; // Sementara dulu
          $blog = Blog::create($input);
          if($blog)
          {
              return redirect()->route('blog.index')->with('flash_message', 'Data berhasil diinput')
                                            ->with('alert-class', 'alert-success');
          }
          //kalo gagal dilempar kesini
          return redirect()->route('blog.index')->with('flash_message', 'Data gagal diinput')
                                        ->with('alert-class', 'alert-danger');
    }

    public function update(BlogRequest $request, Blog $blog)
    {
          $input = $request->all();
          $update = $blog->update($input);
          if($update)
          {
              return redirect()->route('blog.index')->with('flash_message', 'Data berhasil diubah')
                                            ->with('alert-class', 'alert-success');
          }
          //kalo gagal dilempar kesini
          return redirect()->route('blog.index')->with('flash_message', 'Data gagal diubah')
                                        ->with('alert-class', 'alert-danger');
    }

    public function destroy(Blog $blog)
    {
          $delete = $blog->delete();
          if($delete)
          {
              return redirect()->route('blog.index')->with('flash_message', 'Data berhasil dihapus')
                                            ->with('alert-class', 'alert-success');
          }
          //kalo gagal dilempar kesini
          return redirect()->route('blog.index')->with('flash_message', 'Data gagal dihapus')
                                        ->with('alert-class', 'alert-danger');
    }

    //
}
