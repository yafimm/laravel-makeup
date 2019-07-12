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
        $user->jenis_kelamin = 'Pria';
        $user->alamat = 'Jalan jalan jalan';
        $user->no_telp = '098772132';
        $user->email = '9e.yafi.maulana@gmail.com';
        $user->instagram = '@yafimm';
        $user->facebook = 'yafimaulana';
        $user->twitter = '@yafimm';
        $user->linkedin = 'adabayafi';
        $user->save();

        $user = new User;
        $user->nama = 'Dzaki Madhani';
        $user->username = 'dzakimuser';
        $user->password = bcrypt('dzakimuser');
        $user->alamat = 'Jalan jalan jalan';
        $user->jenis_kelamin = 'Pria';
        $user->no_telp = '098772132';
        $user->email = 'dzakimadhani@gmail.com';
        $user->instagram = '@dzakimadhani';
        $user->facebook = 'madhanidzaki';
        $user->twitter = '@dzakimm';
        $user->linkedin = 'dzaki madhani';
        $user->save();
    }
}
