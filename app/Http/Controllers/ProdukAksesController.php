<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdukAksesRequest;
use App\Akses;
use App\Produk_akses;
use App\Tipe_admin;

class ProdukAksesController extends Controller
{
  public function index()
  {
      $all_produk = Produk_akses::simplePaginate(15);
      return view('produk.index', compact('all_produk'));
  }

  public function index_user(Request $request)
  {
      $all_produk = Akses::all(); //biar produknya berurut sesuai dengan jenisnya, entar diambil relasinya
      return view('produk.index-user', compact('all_produk'));
  }

  public function index_service(Request $request)
  {
      $user = \Auth::guard('user')->user();
      $all_user_akses = $user->akses;
      return view('profile.index-service', compact('all_user_akses', 'user'));
  }

  public function create()
  {
      $produk = new Produk_akses;
      $all_jenis_akun = Akses::all();
      return view('produk.create', compact('produk', 'all_jenis_akun'));
  }

  public function store(ProdukAksesRequest $request)
  {
      $input = $request->all();
      if($request->potongan_harga == NULL){
        $input['potongan_harga'] = 0;
      }
      $insert = Produk_akses::create($input);
      if($insert)
      {
          return redirect()->route('produk.index')->with('flash_message', 'Data berhasil ditambahkan')
                                 ->with('alert-class', 'alert-success');
      }
      // kalo gagal dilempar kesini
      return redirect()->route('produk.index')->with('flash_message', 'Data gagal ditambahkan')
                                ->with('alert-class', 'alert-danger');
  }

  public function edit(Produk_akses $produk)
  {
       $all_jenis_akun = Akses::all();
       return view('produk.edit', compact('produk','all_jenis_akun'));
  }


  public function update(ProdukAksesRequest $request, Produk_akses $produk)
  {
    $input = $request->all();
    $update = $produk->update($input);
    if($update)
    {
        return redirect()->route('produk.index')->with('flash_message', 'Data berhasil diubah')
                               ->with('alert-class', 'alert-success');
    }
    // kalo gagal dilempar kesini
    return redirect()->route('produk.index')->with('flash_message', 'Data gagal diubah')
                              ->with('alert-class', 'alert-danger');
  }

  public function destroy(Produk_akses $produk)
  {
      $delete = $produk->delete();
      if($delete)
      {
          return redirect()->route('produk.index')->with('flash_message', 'Data berhasil dihapus')
                                 ->with('alert-class', 'alert-success');
      }
      // kalo gagal dilempar kesini
      return redirect()->route('produk.index')->with('flash_message', 'Data gagal dihapus')
                                ->with('alert-class', 'alert-danger');
  }
}
