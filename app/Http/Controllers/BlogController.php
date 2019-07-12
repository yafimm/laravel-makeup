<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
        $ext = $gambar->getClientOriginalExtension();
        $judul = str_slug($request->judul,'-');
        if($request->file('thumbnail')->isValid()){
            $filename = date('Ymd').".$judul.$ext";
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
          $all_blog = Blog::simplePaginate(15);
          return view('blog.index', compact('all_blog'));
    }

    public function index_user(Request $request)
    {
          if(isset($request->search)){
              $all_blog = Blog::where('judul', 'like', '%' . $request->search . '%')->get();
          }else{
              $all_blog = Blog::all();
          }

          $recent_post = Blog::orderBy('created_at')->take(4)->get();
          return view('blog.index-user', compact('all_blog', 'recent_post'));
    }

    public function show_user($id)
    {
          $artikel = Blog::find($id);
          if($artikel)
          {
              $all_artikel_terkait = Blog::inRandomOrder()->take(3)->get();
              $recent_post = Blog::orderBy('created_at')->take(4)->get();
              $title_halaman = $artikel->judul.' - BEAUTY MASTER | Blog';
              return view('blog.detail-user', compact('artikel', 'all_artikel_terkait', 'recent_post', 'title_halaman'));
          }
          return abort(404);
    }

    public function show(Blog $blog)
    {
          return view('blog.show', compact('blog'));
    }

    public function create()
    {
      $blog = new Blog;
      return view('blog.create', compact('blog'));
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
          $input['admin'] = \Auth::guard('admin')->user()->username;
          if(isset($input['thumbnail']))
          {
              $input['thumbnail'] = $this->uploadGambar($request);
          }

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
          if(isset($input['thumbnail']))
          {
              $this->hapusGambar($blog);
              $input['thumbnail'] = $this->uploadGambar($request);
          }

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
