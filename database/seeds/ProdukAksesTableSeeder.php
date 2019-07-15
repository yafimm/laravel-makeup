<?php

use Illuminate\Database\Seeder;

use App\Produk_akses;

class ProdukAksesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $produk = new Produk_akses;
        $produk->akun_akses = 2;
        $produk->harga = 100000;
        $produk->potongan_harga = 0;
        $produk->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing .';
        $produk->waktu = 1;
        $produk->save();

        $produk = new Produk_akses;
        $produk->akun_akses = 2;
        $produk->harga = 300000;
        $produk->potongan_harga = 30000;
        $produk->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing .';
        $produk->waktu = 3;
        $produk->save();

        $produk = new Produk_akses;
        $produk->akun_akses = 2;
        $produk->harga = 1200000;
        $produk->potongan_harga = 450000;
        $produk->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing .';
        $produk->waktu = 12;
        $produk->save();


        $produk = new Produk_akses;
        $produk->akun_akses = 3;
        $produk->harga = 200000;
        $produk->potongan_harga = 0;
        $produk->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing .';
        $produk->waktu = 1;
        $produk->save();


        $produk = new Produk_akses;
        $produk->akun_akses = 3;
        $produk->harga = 550000;
        $produk->potongan_harga = 50000;
        $produk->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing .';
        $produk->waktu = 3;
        $produk->save();


    }
}
