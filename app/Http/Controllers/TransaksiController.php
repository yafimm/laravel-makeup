<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransaksiRequest;
use App\Transaksi;
use App\Produk_akses;
use App\User_akses;
use App\User;
use Carbon\Carbon;
class TransaksiController extends Controller
{
    public function index()
    {
        $all_transaksi = Transaksi::where('status', 'Belum Selesai')->simplePaginate(20);
        return view('transaksi.index', compact('all_transaksi'));

    }

    public function index_riwayat()
    {
        $all_transaksi = Transaksi::where('status', 'Selesai')->simplePaginate(20);
        return view('transaksi.index-riwayat', compact('all_transaksi'));
    }

    public function index_user()
    {
        $user = \Auth::guard('user')->user();
        $all_transaksi = $user->transaksi;
        return view('user.info-transaksi-user', compact('user', 'all_transaksi'));
    }

    public function create()
    {
        return abort(404); // soalnya controllernya pake resource, otomatis create bakal kebaca, dan dilempar ke 404
    }

    public function create_user(Request $request)
    {
        if(isset($request->idproduk))
        {
            $produk = Produk_akses::find($request->idproduk);
            if($produk)
            {
                $user = \Auth::guard('user')->user();
                $user_akses = $user->hak_akses;
                if($user_akses->nilai_akses != 0){
                    $estimasi_mulai = date('d/m/Y', strtotime(Carbon::parse($user_akses->waktu_berakhir)->addDays(1)));
                    $estimasi_habis = date('d/m/Y', strtotime(Carbon::parse($user_akses->waktu_berakhir)->addDays(1)->addMonths($produk->waktu)));
                }
                $estimasi_mulai =  date('d/m/Y');
                $estimasi_habis = date('d/m/Y', strtotime(Carbon::now()->addMonths($produk->waktu)));
                return view('transaksi.pembayaran-user', compact('produk', 'estimasi_habis', 'estimasi_mulai'));
            }
        }
        return abort(404);
    }

    public function store_user(TransaksiRequest $request)
    {
        $input = $request->all();
        $produk = Produk_akses::find($request->id_produk);
        $total_harga = $produk->harga - $produk->potongan_harga;
        $user = \Auth::guard('user')->user();
        $id_transaksi = setIdTransaksi();

        $insert = Transaksi::create(['id' => $id_transaksi,
                                    'id_produk' => $produk->id,
                                    'total_harga' => $total_harga,
                                    'user' => $user->username,
                                    'status' => 'Belum Selesai',
                                    'waktu' => $produk->waktu]);
        if($insert)
        {
            return redirect()->route('profile.transaksi.show', $id_transaksi)->with('flash_message', 'Anda berhasil memesan akun, silahkan membayar tagihan untuk aktivasi akun premium')
                                   ->with('alert-class', 'alert-success');
        }
        // kalo gagal dilempar kesini
        return redirect()->route('profile', $user->username)->with('flash_message', 'Gagal memesan akun')
                                  ->with('alert-class', 'alert-danger');

    }

    public function show_riwayat($id)
    {
        $transaksi = Transaksi::find($id);
        if($transaksi)
        {
            return view('transaksi.show_riwayat', compact('transaksi'));
        }
        return abort(404);
    }

    public function show_user($id)
    {
        $transaksi = Transaksi::find($id);
        $user = \Auth::guard('user')->user();
        $produk = $transaksi->produk_akses;
        $estimasi_mulai = date('d/m/Y', strtotime(Carbon::parse($user->hak_akses->waktu_berakhir)->addDays(1)));
        $estimasi_habis = date('d/m/Y', strtotime(Carbon::parse($user->hak_akses->waktu_berakhir)->addDays(1)->addMonths($produk->waktu)));

        return view('user.transaksi-show-user', compact('transaksi', 'user', 'produk', 'estimasi_mulai', 'estimasi_habis'));
    }

    public function edit($id)
    {
       $transaksi = Transaksi::find($id);

       return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $data = Transaksi::find($id);
        $user = $data->users;
        $input['admin'] = \Auth::guard('admin')->user()->username;
        if($data->status == 'Belum Selesai')
        {
              $input['status'] = 'Selesai';
              $update_status = $data->update($input);

              if($update_status)
              {
                  // berarti artinya ada akun premium yang sedang jalan dan kalo sama sama yang dibeli
                  // akun tersebut bakal diperpanjang
                  if($user->hak_akses_aktif->nilai_akses != 0 && $user->hak_akses_aktif->pivot->id_akses == $data->produk_akses->akses->id)
                  {
                      $waktu_berakhir = Carbon::parse($user->hak_akses->waktu_berakhir)->addMonths($data->produk_akses->waktu);
                      $user_akses = $user->akses()->updateExistingPivot($user->hak_akses_aktif->id,['waktu_berakhir' => $waktu_berakhir]);
                  }else{
                      // kalo ada akun premium aktif dan berbeda akan ditimpa, jadi diganti dulu statusnya sama tidak aktif
                      if($user->hak_akses_aktif->nilai_akses != 0 )
                      {
                          $user->akses()->updateExistingPivot($user->hak_akses_aktif->id, ['status' => 'Tidak Aktif']);
                      }
                      $waktu_mulai = Carbon::now();
                      $waktu_berakhir = Carbon::now()->addMonths($data->produk_akses->waktu);
                      $user_akses = $user->akses()->attach($data->produk_akses->akun_akses,
                                                        [
                                                          'status' => 'Aktif',
                                                          'waktu_berakhir' => $waktu_berakhir,
                                                          'waktu_mulai' => $waktu_mulai
                                                        ]);
                  }

                  return redirect()->route('transaksi.index')->with('flash_message', 'Berhasil menyelesaikan transaksi, akun premium'.$data->username.' berhasil di aktifkan / diperpanjang')
                                                        ->with('alert-class', 'alert-success');
              }
        }
        // kalo gagal dilempar kesini
        return redirect()->route('transaksi.index')->with('flash_message', 'Gagal menyelesaikan transaksi')
                                  ->with('alert-class', 'alert-danger');
    }

    public function destroy($id)
    {
        abort(404);
    }
}
