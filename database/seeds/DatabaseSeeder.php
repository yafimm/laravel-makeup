<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AksesTableSeeder::class);
        $this->call(TipeAdminTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(BlogKategoriTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(VideoTableSeeder::class);
    }
}
