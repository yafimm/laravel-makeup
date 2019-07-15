<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransaksiRequest;
use App\Transaksi;
class TransaksiController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(TransaksiRequest $request)
    {
        $input = $request->all();
        $input['id'] = setIdTransaksi();
        $input['user'] = \Auth::guard('user')->user()->username;
        $input['status'] = 'Belum Selesai';
        $insert = Transaksi::create($input);
        if($transaksi)
        {
            return redirect('/'.$user->username)->with('flash_message', 'Anda berhasil memesan akun, silahkan membayar tagihan untuk aktivasi akun premium')
                                   ->with('alert-class', 'alert-success');
        }
        // kalo gagal dilempar kesini
        return redirect('/'.$user->username)->with('flash_message', 'Gagal memesan akun')
                                  ->with('alert-class', 'alert-danger');

    }

    public function show_edit($id)
    {
       $transaksi = Transaksi::find($id);
       return view('transaksi.show-edit', compact('transaksi'));
    }


    public function update(TransaksiRequest $request, $id)
    {
        $data = Transaksi::find($id);
        $input = $request->all();
        $input['admin'] = \Auth::guard('admin')->user()->username;
        if($data->status == 'Belum Selesai')
        {
              $data->status = 'Selesai';
              $update_status = $data->update($input);
        }

        if($update_status)
        {
            return redirect('/'.$user->username)->with('flash_message', 'Berhasil menyelesaikan transaksi, akun premium'.$data->username.' berhasil di aktifkan / diperpanjang')
                                   ->with('alert-class', 'alert-success');
        }
        // kalo gagal dilempar kesini
        return redirect('/'.$user->username)->with('flash_message', 'Gagal menyelesaikan transaksi')
                                  ->with('alert-class', 'alert-danger');
    }

    public function destroy($id)
    {
        //
    }
}
