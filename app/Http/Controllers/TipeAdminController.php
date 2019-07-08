<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Tipe_admin;

class TipeAdminController extends Controller
{

    public function __construct()
    {
        //
    }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
          'nama_tipe_admin' => 'required|string|min:4',
        ];

        $messages = [''];

        //validate the request.
        $this->validate($request ,$rules);
    }

    public function index()
    {
        $all_tipe_admin = Tipe_admin::all();
        return view('tipeadmin.index', compact('all_tipe_admin'));
    }

    public function store(Request $request)
    {
        $this->validator($request);
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

    public function update(Request $request, Tipeadmin $tipeadmin)
    {
          $this->validator($request);
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
