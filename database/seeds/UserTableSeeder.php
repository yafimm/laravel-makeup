<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->nama = 'Yafi Maulana';
        $user->username = 'yafimmuser';
        $user->password = bcrypt('yafimmuser');
        $user->alamat = 'Jalan jalan jalan';
        $user->no_telp = '098772132';
        $user->email = '9e.yafi.maulana@gmail.com';
        $user->save();

        $user = new User;
        $user->nama = 'Dzaki Madhani';
        $user->username = 'dzakimuser';
        $user->password = bcrypt('dzakimuser');
        $user->alamat = 'Jalan jalan jalan';
        $user->no_telp = '098772132';
        $user->email = 'dzakimadhani@gmail.com';
        $user->save();
    }
}
