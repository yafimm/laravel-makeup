<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Gambar;

class GambarController extends Controller
{

    public function __construct()
    {
        //
    }


    private function validator(Request $request)
    {
      //validation rules.
      //image max 1000kb
      $rules = [
        'gambar'   => 'mimes:jpeg,jpg,png,gif|required|max:10000', /
        'nama' => 'required|string|min:5|max:255',
      ];

      $messages = [''];

      //validate the request.
      $this->validate($request ,$rules);
    }

    private function uploadGambar(Request $request){
        $gambar = $request->file('gambar');
        $ext = $gambar->getClientOriginalExtension();
        if($request->file('gambar')->isValid()){
          $namagambar = $request->judul.$ext;
          $upload_path = 'images/upload';
          $request->file('gambar')->move($upload_path, $namagambar);

          return $namagambar;
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

    public function store(Request $request)
    {
          $this->validator($request);
          $input = $request->all();
          $input['url'] = $this->uploadGambar($request);
          $gambar = Gambar::create($input);
          if($gambar){
                return response()->json([
                         'success' => true,
                         'code' => 201,
                         'message' => 'Input blog berhasil dilakukan',
                         'data' => $gambar
                         ], 201);
          }else{
                return response()->json([
                         'success' => false,
                         'code' => 400,
                         'message' => 'Input blog gagal dilakukan',
                         'data' => Null
                       ], 400);
          }
    }

    //
}
