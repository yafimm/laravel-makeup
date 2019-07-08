<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Akses;
use Hash;

class AksesController extends Controller
{

    public function __construct()
    {

    }

    private function validator(Request $request)
    {

        $rules = [
          'nama' => 'required|string|min:4|max:50',
          'nilai_akses' => 'required|integer',
          'harga' => 'required|integer',
          'deskripsi' => 'required|string|min:5|max:255',
        ];

        $messages = [''];

        //validate the request.
        $this->validate($request ,$rules);
    }


    public function index()
    {
          $all_akses = Akses::all();
          return view('akses.index', compact('all_akses'));
    }

    public function store(Request $request)
    {
          $this->validator($request);
          $input = $request->all();
          $data = Akses::create($input);
          if($data){
                return redirect('akses.index')->with();
          }
          //kalo gagal lempar kesini
          return redirect('akses.index')->with();
    }

    public function update(Request $request, Akses $akses)
    {
          $this->validator($request);
          $input = $request->all();
          $Akses = $Akses->update($input);
          if($Akses){
              return redirect('akses.index')->with();
          }
          //kalo gagal lempar kesini
          return redirect('akses.index')->with();
    }


    public function show(Akses $akses)
    {
        return view('akses.show', compact('akses'));
    }

    public function delete(Akses $akses)
    {
          $data = $Akses->delete();
          if($data){
              return redirect('akses.index')->with();
          }
          return redirect('akses.index')->with();
    }
}
