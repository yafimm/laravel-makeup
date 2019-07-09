<?php

namespace App\Http\Controllers;
use App\Http\Requests\TipeAdminRequest;


use App\Tipe_admin;

class TipeAdminController extends Controller
{

    public function __construct()
    {
        //
    }

    public function index()
    {
        $all_tipe_admin = Tipe_admin::all();
        return view('tipeadmin.index', compact('all_tipe_admin'));
    }

    public function create()
    {
        return view('tipeadmin.create');
    }

    public function store(TipeAdminRequest $request)
    {
        $data = Tipe_admin::create(['nama_tipe_admin' => $request->nama_tipe_admin]);
        if($data){
            return redirect('tipeadmin.index')->with();
        }
        return redirect('tipeadmin.index')->with();
    }

    public function show(Tipeadmin $tipeadmin)
    {
        return view('tipeadmin.show', compact('tipeadmin'));
    }

    public function update(TipeAdminRequest $request, Tipeadmin $tipeadmin)
    {
          $input = $request->all();
          $success = $tipeadmin->update($input);
          if($success){
              return redirect('tipeadmin.index')->with();
          }
          // Kalo gagal nanti bakal dilempar kesini
          return redirect('tipeadmin.index')->with();
    }

    public function delete(Tipeadmin $tipeadmin)
    {
        $tipeadmin = $tipeadmin->delete();
        if($tipeadmin){
            return redirect('tipeadmin.index')->with();
        }
        return redirect('tipeadmin.index')->with();

    }

}
