<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->username = 'yafimm';
        $admin->id_tipe_admin = '3';
        $admin->nama = 'Yafi Ibrahim';
        $admin->password = bcrypt('yafimm');
        $admin->email = '9e.yafi.maulana@gmail.com';
        $admin->alamat = 'Jl. Jalan Road Aspal';
        $admin->no_telp = '0812232123';
        $admin->save();

        $admin = new Admin;
        $admin->username = 'dzakim';
        $admin->id_tipe_admin = '2';
        $admin->nama = 'Dzaki Madhani';
        $admin->password = bcrypt('dzakim');
        $admin->email = 'dzakim@gmail.com';
        $admin->alamat = 'Jl. Telkomuniversity no 12';
        $admin->no_telp = '08233124';
        $admin->save();
    }
}
