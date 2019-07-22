<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\Blog_kategori;

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
              $all_blog = Blog::where('judul', 'like', '%' . $request->search . '%')->simplePaginate(15);
          }else{
              $all_blog = Blog::simplePaginate(5);
          }
          $all_blog_kategori = Blog_kategori::all();
          $recent_post = Blog::orderBy('created_at','desc')->take(4)->get();
          return view('blog.index-user', compact('all_blog', 'recent_post', 'all_blog_kategori'));
    }

    public function index_user_by_kategori($slug)
    {
          $blog_kategori = Blog_kategori::where('slug', $slug)->first();
          $all_blog = $blog_kategori->blog;
          $all_blog_kategori = Blog_kategori::all();
          $recent_post = Blog::orderBy('created_at','desc')->take(4)->get();
          return view('blog.index-user', compact('all_blog', 'recent_post', 'all_blog_kategori'));
    }

    public function show_user($id)
    {
          $artikel = Blog::find($id);
          if($artikel)
          {
              $all_blog_kategori = Blog_kategori::all();
              $all_artikel_terkait = Blog::inRandomOrder()->take(3)->get();
              $recent_post = Blog::orderBy('created_at','desc')->take(4)->get();
              $title_halaman = $artikel->judul.' - BEAUTY MASTER | Blog';
              return view('blog.detail-user', compact('artikel', 'all_artikel_terkait', 'recent_post', 'title_halaman', 'all_blog_kategori'));
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
      $all_blog_kategori = Blog_kategori::all();
      return view('blog.create', compact('blog', 'all_blog_kategori'));
    }

    public function edit(Blog $blog)
    {
          $all_blog_kategori = Blog_kategori::all();
          return view('blog.edit', compact('blog','all_blog_kategori'));
    }

    // store artikel
    public function store(BlogRequest $request)
    {
          $input = $request->all();
          $input['slug'] = str_slug($request->judul,'-');
          $input['admin'] = \Auth::guard('admin')->user()->username;
          $input['isi_blog'] = \Purifier::clean($input['isi_blog']);
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
          $input['isi_blog'] = \Purifier::clean($input['isi_blog']);
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

    public function test(){
        // $disk = Storage::disk('google')->getAdapter()->getMetadata('');
        // $disk = Storage::disk('google')->files('1Xph-9IJmLzHFxmUTcgiy6FWeXI9Pm47Z/');
        // $disk = Storage::disk('google')->list();

        // $disk = Storage::disk('google')->url('1-kLV9S1DL8NBkOY2gcTkrdZIHMytye0L');
        // $disk = Storage::disk('google')->getAdapter()->getPathPrefix();
        // $disk = Storage::disk('google')->put('test.txt', 'eta terangkanlah');
        $filename = '20190721.mantap.mp4';
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::disk('google')->listContents($dir, $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!
        //return $file; // array with file info
        $rawData = Storage::disk('google')->get($file['path']);

    }

    public function dir(){
         $dir = '/';
         $recursive = false; // Get subdirectories also?
         $contents = collect(Storage::disk('google')->listContents($dir, $recursive));
         //return $contents->where('type', '=', 'dir'); // directories
         return $contents->where('type', '=', 'file'); // files
    }

}
