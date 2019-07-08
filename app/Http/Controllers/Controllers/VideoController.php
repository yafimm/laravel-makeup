<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Video;

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
        'thumbnail' => 'sometimes|mimes:jpg,png,svg'
        'hak_akses' => 'required'
      ];

      $messages = [''];

      //validate the request.
      $this->validate($request ,$rules);
    }

    protected function buildFailedValidationResponse(Request $request, array $errors) {
        return ["code"=> 406 , "message" => "forbidden" , "errors" =>$errors];
    }

    private function upload_video(Request $request){
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

    // private function hapusFoto(Produk $produk){
    //     $exist = Storage::disk('video')->exists($produk->gambar);
    //     if(isset($produk->gambar) && $exist){
    //       $delete = Storage::disk('gambar')->delete($produk->gambar);
    //       if($delete){
    //         return true;
    //       }else{
    //         return false;
    //       }
    //     }
    //   }

    public function index()
    {
          $video = Video::all();
          return response()->json([
                 'success' => true,
                 'code' => 200,
                 'message' => 'Success',
                 'data' => $video
                ], 200);
    }

    public function create(Request $request)
    {
          $this->validator($request);
          $input = $request->all();
          if($request->hasFile('video')){
                $input['video'] = $this->upload_video($request);
          }
          // $input['admin'] = diisi dengan session adminnya

          $video = Video::create($input);

          if($video){
                return response()->json([
                       'success' => true,
                       'code' => 201,
                       'message' => 'Video berhasil diupload',
                       'data' => $video
                       ], 201);
          }else{
                return response()->json([
                       'success' => false,
                       'code' => 400,
                       'message' => 'Video gagal diupload',
                       'data' => ''
                     ], 400);
          }
    }

    public function show($id){
          $video = Video::find($id);
          if($video){
                return response()->json([
                       'success' => true,
                       'code' => 201,
                       'message' => 'Video ditemukan',
                       'data' => $video
                       ], 201);
          }else{
                return response()->json([
                       'success' => false,
                       'code' => 400,
                       'message' => 'Video tidak ditemukan',
                       'data' => ''
                     ], 400);
          }
    }

    public function delete($id)
    {
          $Video = Video::find($id);
          // $this->hapusVideo($Video);
          $data = $Akses->delete();
          if($data){
                return response()->json([
                  'success' => true,
                  'code' => 201,
                  'message' => 'data berhasil dihapus',
                  'data' => $Video
                ], 201);
          }else{
                return response()->json([
                  'success' => false,
                  'code' => 400,
                  'message' => 'data gagal dihapus',
                  'data' => ''
                ], 400);
          }
    }

}
