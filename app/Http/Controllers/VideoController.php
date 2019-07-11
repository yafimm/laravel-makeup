<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Video;
use App\Akses;
use Storage;

class VideoController extends Controller
{

    public function __construct()
    {

    }

    private function uploadGambar(Request $request)
    {
        $gambar = $request->file('thumbnail');
        $ext = $gambar->getClientOriginalExtension();
        if($request->file('thumbnail')->isValid()){
            $filename = date('Ymd').".$request->judul.$ext";
            $upload_path = 'images/thumbnail';
            $request->file('thumbnail')->move($upload_path, $filename);
            return $filename;
        }
        return false;
    }

    private function hapusGambar(Video $video)
    {
        $exist = Storage::disk('thumbnail')->exists($video->thumbnail);
        if(isset($video->thumbnail) && $exist){
            $delete = Storage::disk('thumbnail')->delete($video->thumbnail);
            return $delete; //Kalo delete gagal, bakal return false, kalo berhasil bakal return true
        }
    }

    private function uploadVideo(Request $request)
    {
        $video = $request->file('video');
        $ext = $video->getClientOriginalExtension();
        if($request->file('video')->isValid()){
            $videoname = date('Ymd').".$request->judul.$ext";
            $upload_path = 'videos/thread';
            $request->file('video')->move($upload_path, $videoname);
            return $videoname;
        }
        return false;
    }

    private function hapusVideo(Video $video)
    {
        $exist = Storage::disk('video')->exists($video->video);
        if(isset($video->video) && $exist){
            $delete = Storage::disk('video')->delete($video->video);
            return $delete; //Kalo delete gagal, bakal return false, kalo berhasil bakal return true
        }
    }

    public function index()
    {
          $all_video = Video::all();
          return view('video.index', compact('all_video'));
    }

    public function index_user()
    {
          $all_video = Video::all();
          return view('video.index-user', compact('all_video'));
          // dd($all_video);
    }

    public function create()
    {
          $video = new Video;
          $all_akses = Akses::all();
          return view('video.create', compact('video', 'all_akses'));
    }

    public function edit(Video $video)
    {
          $all_akses = Akses::all();
          return view('video.edit', compact('video', 'all_akses'));
    }

    public function store(Request $request)
    {
          $input = $request->all();
          if($request->hasFile('video')){
                $input['video'] = $this->uploadVideo($request);
          }
          if($request->hasFile('thumbnail')){
                $input['thumbnail'] = $this->uploadGambar($request);
          }

          $input['admin'] = 'yafimm';

          $video = Video::create($input);

          if($video){
              return redirect()->route('video.index')->with('flash_message', 'Data berhasil diinput')
                                            ->with('alert-class', 'alert-success');
          }
          return redirect()->route('video.index')->with('flash_message', 'Data gagal diinput')
                                        ->with('alert-class', 'alert-danger');
    }

    public function show(Video $video)
    {
          return view('video.show', compact('video'));
    }

    public function show_user($id)
    {
          $video = Video::find($id);
          return view('video.detail-user', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
          $input = $request->all();
          if(isset($input['video']))
          {
              $this->hapusVideo($video);
              $input['video'] = $this->uploadVideo($request);
          }

          if(isset($input['thumbnail']))
          {
              $this->hapusGambar($video);
              $input['thumbnail'] = $this->uploadGambar($request);
          }


          // $input['admin'] = pake admin yang baru
          $update = $video->update($input);

          if($update){
              return redirect()->route('video.index')->with('flash_message', 'Data berhasil diubah')
                                            ->with('alert-class', 'alert-success');
          }
          // kalo gagal, return yang dibawah ini
          return redirect()->route('video.index')->with('flash_message', 'Data gagal diubah')
                                        ->with('alert-class', 'alert-danger');
    }

    public function destroy(Video $video)
    {
          $this->hapusVideo($video);
          $delete = $video->delete();
          if($delete){
              return redirect()->route('video.index')->with('flash_message', 'Data berhasil dihapus')
                                            ->with('alert-class', 'alert-success');
          }
          // kalo gagal, return yang dibawah ini
          return redirect()->route('video.index')->with('flash_message', 'Data gagal dihapus')
                                        ->with('alert-class', 'alert-danger');

    }

}
