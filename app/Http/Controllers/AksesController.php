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
          $all_akses = Akses::simplePaginate(15);
          return view('akses.index', compact('all_akses'));
    }

    public function create()
    {
          $akses = new Akses;
          return view('akses.create', compact('akses'));
    }

    public function store(AksesRequest $request)
    {
          $input = $request->all();
          $data = Akses::create($input);
          if($data){
                return redirect()->route('akses.index')->with('flash_message', 'Data berhasil diinput')
                                              ->with('alert-class', 'alert-success');
          }
          //kalo gagal lempar kesini
          return redirect()->route('akses.index')->with('flash_message', 'Data gagal diinput')
                                        ->with('alert-class', 'alert-danger');
    }

    public function edit($id)
    {
          $akses = Akses::find($id);
          return view('akses.edit', compact('akses'));
    }

    public function update(AksesRequest $request, $id)
    {
          $input = $request->all();
          $Akses = Akses::find($id);
          $update = $Akses->update($input);
          if($update){
                return redirect()->route('akses.index')->with('flash_message', 'Data berhasil diubah')
                                              ->with('alert-class', 'alert-success');
          }
          //kalo gagal lempar kesini
          return redirect()->route('akses.index')->with('flash_message', 'Data gagal diubah')
                                        ->with('alert-class', 'alert-danger');
    }


    public function show($id)
    {
        return view('akses.show', compact('akses'));
    }

    public function destroy($id)
    {
          $Akses = Akses::find($id);
          $delete = $Akses->delete();
          if($delete){
                return redirect()->route('akses.index')->with('flash_message', 'Data berhasil dihapus')
                                              ->with('alert-class', 'alert-success');
          }
          //kalo gagal lempar kesini
          return redirect()->route('akses.index')->with('flash_message', 'Data gagal dihapus')
                                        ->with('alert-class', 'alert-danger');
    }
}
