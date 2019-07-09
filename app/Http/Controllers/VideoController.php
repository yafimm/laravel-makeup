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

    private function validator(Request $request)
    {
      //validation rules.
      if($request->isMethod('POST')){
          $video = 'required|mimes:mp4,mov,ogg,qt';
          $judul = 'required|string|min:5|max:255|unique:video';
      }else{
          $video = 'sometimes|mimes:mp4,mov,ogg,qt';
          $judul = 'required|string|min:5|max:255';
      }

      $rules = [
        'video'   => $video,
        'judul' => $judul,
        'deskripsi' => 'required|string|min:10',
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
    }

    public function create()
    {
          $video = new Video;
          $all_akses = Akses::all();
          return view('video.create', compact('video', 'all_akses'));
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
              return redirect('video.index')->with('flash_message', 'Data berhasil diinput')
                                            ->with('alert-class', 'alert-success');
          }
          return redirect('video.index')->with('flash_message', 'Data gagal diinput')
                                        ->with('alert-class', 'alert-danger');
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
          $update = $video->update($input);

          if($update){
              return redirect('video.index')->with('flash_message', 'Data berhasil diubah')
                                            ->with('alert-class', 'alert-success');
          }
          // kalo gagal, return yang dibawah ini
          return redirect('video.index')->with('flash_message', 'Data gagal diubah')
                                        ->with('alert-class', 'alert-danger');
    }

    public function delete(Video $video)
    {
          $this->hapusVideo($video);
          $delete = $video->delete();
          if($delete){
              return redirect('video.index')->with('flash_message', 'Data berhasil dihapus')
                                            ->with('alert-class', 'alert-success');
          }
          // kalo gagal, return yang dibawah ini
          return redirect('video.index')->with('flash_message', 'Data gagal dihapus')
                                        ->with('alert-class', 'alert-danger');

    }

}
