<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAksesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d', strtotime('+7 days'));



        $user = User::find('yafimmuser');
        $data = ['status' => 'Aktif', 'waktu_berakhir' => '2999-12-30', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')];
        $user->akses()->attach(1, $data);
        $data = ['status' => 'Aktif', 'waktu_berakhir' => $date, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ];
        $user->akses()->attach(2, $data);


        $user = User::find('dzakimuser');
        $data = ['status' => 'Aktif', 'waktu_berakhir' => '2999-12-30', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')];
        $user->akses()->attach(1, $data);
        $data = ['status' => 'Aktif', 'waktu_berakhir' => $date, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')];
        $user->akses()->attach(3, $data);


    }
}
