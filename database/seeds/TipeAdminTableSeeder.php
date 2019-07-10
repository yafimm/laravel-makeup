<?php

use Illuminate\Database\Seeder;
use App\Tipe_admin;

class TipeAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipeadmin = new Tipe_admin;
        $tipeadmin->nama_tipe_admin = 'Admin';
        $tipeadmin->save();

        $tipeadmin = new Tipe_admin;
        $tipeadmin->nama_tipe_admin = 'Content Creator';
        $tipeadmin->save();

        $tipeadmin = new Tipe_admin;
        $tipeadmin->nama_tipe_admin = 'Super Admin';
        $tipeadmin->save();
    }
}
