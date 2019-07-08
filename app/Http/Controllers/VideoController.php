<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Video;
use Storage;

class VideoController extends Controller
{

    public function __construct()
    {

    }

    private function validator(Request $request)
    {
      //validation rules.
      $rules = [
        'video'   => 'mimes:mp4,mov,ogg,qt',
        'judul' => 'required|string|min:5|max:255',
        'deskripsi' => 'required|string',
        'thumbnail' => 'sometimes|mimes:jpg,png,svg',
        'hak_akses' => 'required'
      ];

      $messages = [''];

      //validate the request.
      $this->validate($request ,$rules);
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

    private function hapusVideo(Video $video){
        $exist = Storage::disk('video')->exists($video->video);
        if(isset($video->video) && $exist){
            $delete = Storage::disk('video')->delete($video->video);
            if($delete){
                return true;
            }else{
                return false;
            }
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
    }

    public function create()
    {
          return view('video.create');
    }

    public function store(Request $request)
    {
          $this->validator($request);
          $input = $request->all();
          if($request->hasFile('video')){
                $input['video'] = $this->uploadvideo($request);
          }
          $input['admin'] = 'yafimm masih beta';

          $video = Video::create($input);

          if($video){
              return redirect('video.index')->with();
          }
          return redirect('video.index')->with();
    }

    public function show(Video $video)
    {
          return view('video.show', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
          $this->validator($request);
          $input = $request->all();
          if(isset($input['video']))
          {
              $this->hapusVideo($video);
              $input['video'] = $this->uploadVideo($request);
          }
          // $input['admin'] = pake admin yang baru
          $video = $video->update($input);

          if($video){
              return redirect('video.index')->with();
          }
          // kalo gagal, return yang dibawah ini
          return redirect('video.index')->with();
    }

    public function delete(Video $video)
    {
          $this->hapusVideo($video);
          $data = $Akses->delete();
          return redirect('admin/video')->with('alert', 'Video berhasil dihapus');

    }

}
