<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

use App\Video;
use App\Akses;
use Storage;

class VideoController extends Controller
{

    public function __construct()
    {

    }

    protected function saveFileToGoogle($request, $file)
    {
        $fileName = $this->createFilename($file, $request);
        $disk = Storage::disk('google');
        // It's better to use streaming Streaming (laravel 5.4+)
        $disk->put('sample.video5.mp4', file_get_contents($file));
        return $fileName;
    }

    protected function createFilename(UploadedFile $file, $request)
    {
        $ext = $file->getClientOriginalExtension();
        $judul = str_slug($request->judul,'-');
        $filename = date('Ymd').".$judul.$ext";
        return $filename;
    }

    public function upload(Request $request) {
        // create the file receiver
        $receiver = new FileReceiver("video", $request, HandlerFactory::classFromRequest($request));
        // check if the upload is success, throw exception or return response you need
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }
        // receive the file
        $save = $receiver->receive();
        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()) {
            // return name file
            return $this->saveFileToGoogle($request, $save->getFile());
        }
        // we are in chunk mode, lets send the current progress
        /** @var AbstractHandler $handler */
        $handler = $save->handler();
        return response()->json([
            "done" => $handler->getPercentageDone(),
            'status' => true
        ]);
    }

    private function getUserAkses()
    {
        if(\Auth::guard('user')->check())
        {
            return $user_akses = \Auth::guard('user')->user()->hak_akses->nilai_akses;
        }
        else
        {
            return $user_akses = 0;
        }
    }

    private function uploadGambar(Request $request)
    {
        $gambar = $request->file('thumbnail');
        $ext = $gambar->getClientOriginalExtension();
        $judul = str_slug($request->judul,'-');
        $filename = date('Ymd').".$judul.$ext";
        if($request->file('thumbnail')->isValid()){
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

    private function hapusVideo(Video $video)
    {
        $filename = $video->video;
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::disk('google')->listContents($dir, $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!
        //return $file; // array with file info

        $exist = Storage::disk('google')->exists($file['path']);
        if(isset($video->video) && $exist){
          $delete = Storage::disk('video')->delete($file['path']);
          return $delete; //Kalo delete gagal, bakal return false, kalo berhasil bakal return true
        }
    }

    public function index()
    {
          $all_video = Video::simplePaginate(15);
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

    public function edit(Video $video)
    {
          $all_akses = Akses::all();
          return view('video.edit', compact('video', 'all_akses'));
    }

    public function store(Request $request)
    {
          // dd($request->all());
          $input = $request->all();
          if($request->hasFile('video')){
                $input['video'] = $this->upload($request);
          }
          if($request->hasFile('thumbnail')){
                $input['thumbnail'] = $this->uploadGambar($request);
          }

          $input['deskripsi'] = \Purifier::clean($input['deskripsi']);
          $input['admin'] = \Auth::guard('admin')->user()->username;

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
          if($video)
          {
                $title_halaman = $video->judul.' - BEAUTY MASTER | Video';

                $user_akses = $this->getUserAkses();

                if($video->akses->nilai_akses <= $user_akses)
                {
                    $akses = 'BISA';
                }
                else
                {
                    $akses = '';
                }
                return view('video.detail-user', compact('video', 'title_halaman', 'akses'));
          }
          return abort(404);
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

          $input['deskripsi'] = \Purifier::clean($input['deskripsi']);
          $input['admin'] = \Auth::guard('admin')->user()->username;

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

    // function get video from storage
    public function getVideo($id)
    {
          $video = Video::find($id);

          $user_akses = $this->getUserAkses();

          if($video->akses->nilai_akses <= $user_akses)
          {
            $filename = $video->video;
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

            $headers = array(
              'Content-type'          => 'mp4',
              'Content-Disposition'   => 'inline; filename="' . $filename . '"',
            );
            return \Response::make($rawData, 200, $headers);
          }
          //kalo file gak bisa diakses atau gak ada filenya
          return abort(404);

    }
}
