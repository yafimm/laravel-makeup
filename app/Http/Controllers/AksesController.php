<?php

namespace App\Http\Controllers;
use App\Http\Requests\AksesRequest;
use App\Akses;

class AksesController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
          $all_akses = Akses::all();
          return view('akses.index', compact('all_akses'));
    }

    public function create()
    {
          return view('akses.create');
    }

    public function store(AksesRequest $request)
    {
          $input = $request->all();
          $data = Akses::create($input);
          if($data){
                return redirect('akses.index')->with('flash_message', 'Data berhasil diinput')
                                              ->with('alert-class', 'alert-success');
          }
          //kalo gagal lempar kesini
          return redirect('akses.index')->with('flash_message', 'Data gagal diinput')
                                        ->with('alert-class', 'alert-danger');
    }

    public function edit(Akses $akses)
    {
          return view('akses.edit', compact('akses'));
    }

    public function update(AksesRequest $request, Akses $akses)
    {
          $input = $request->all();
          $update = $Akses->update($input);
          if($update){
                return redirect('akses.index')->with('flash_message', 'Data berhasil diubah')
                                              ->with('alert-class', 'alert-success');
          }
          //kalo gagal lempar kesini
          return redirect('akses.index')->with('flash_message', 'Data gagal diubah')
                                        ->with('alert-class', 'alert-danger');
    }


    public function show(Akses $akses)
    {
        return view('akses.show', compact('akses'));
    }

    public function delete(Akses $akses)
    {
          $delete = $Akses->delete();
          if($delete){
                return redirect('akses.index')->with('flash_message', 'Data berhasil dihapus')
                                              ->with('alert-class', 'alert-success');
          }
          //kalo gagal lempar kesini
          return redirect('akses.index')->with('flash_message', 'Data gagal dihapus')
                                        ->with('alert-class', 'alert-danger');
    }
}
