<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog;
        $blog->id_blog_kategori = 1;
        $blog->judul = 'Riasan Wajah yang Berkilau Bening Jadi Tren. Inilah 10 ‘Glass Skin Make-Up’ Ala Para Beauty Vlogger';
        $blog->isi_blog = "Saat ini, cewek-cewek lagi berlomba-lomba membuat kulitnya tampak berkilau sehat. Mulai dari menggunakan produk perawatan kulit hingga riasan. Cara paling instan ya mengenakan riasan yang bisa membuat kulit berkilau basah sehat sampai seolah bening. Kuncinya ada pada produk primer wajah, alas bedak yang dewy, serta tambahan highlighter yang membuat kilau makin terpancar.
                      Para Youtuber dan vlogger kecantikan juga membuat tampilan make-up seperti itu dan menamainya sebagai ‘glass skin make-up’ karena memang kulit sengaja dibuat berkilau sehat agar terlihat bening. Dengan cara merias khas masing-masing, secara mengejutkan, hasilnya beda-beda lo. Intip yuk bagaimana penampilan riasan mereka~
                      1. Lihat deh betapa ‘glowing‘ riasan Tasya Farasya. Tangan dingin MUA Vinna Gracia yang berhasil mengubah Tasya jadi secantik dan sebasah ini
                      Freckless palsunya juga juara! via www.instagram.com
                      2. Kulit mengkilap dan basah Sarah Ayu ini bukan karena berminyak berlebihan, tapi karena tambahan highlighter yang ‘cetar’. Padahal riasannya minimalis lo
                      Alisnya yang berserat juga mendukung penampilannya via www.instagram.com
                      3. Sara Robert juga mencoba riasan ini. Selain alisnya yang berserat, nuansa riasannya yang serba nude bikin wajahnya terlihat bersih dan bersinar
                      Pilihan warna bibir yang nggak berlebihan bikin pas via www.instagram.com
                      4. Warna perona pipi Rachel Goddard yang semu-semu merah muda cocok banget sama riasan serba ‘glowing’ di kulit tan eksotisnya
                      Eksotis! via www.instagram.com
                      5. Kalau Stephanie Wose memilih pakai warna serba coklat bata untuk mengimbangi kulitnya yang dibuat mengkilat karena tambahan highlighter
                      Serba coklat makin manis~ via www.instagram.com
                      6. Pilihan menggunakan pewarna bibir warna cerah yang sengaja dibuat tidak rapi bikin penampilan Devienna segar dengan kulit terlihat sehat
                      Bibir cerah ala make-up Korea via www.instagram.com
                      7. Lizzie Parra ingin menonjolkan pada kulitnya yang tampak sehat meski sekadar make up. Riasan mata, pipi, dan bibirnya sengaja sederhana dan minimalis
                      Nggak berlebihan, serba pas! via www.instagram.com
                      8. Kalau yang menerapkan ‘glass skin make-up’ punya kulit cerah, kulitnya makin terlihat bening kan seperti Veronica Ong ini
                      Bening cerah~ via www.instagram.com
                      9. Pony, Youtuber kecantikan asal Korea Selatan juga menjajal riasan yang membuat penampilan kulit wajah yang bening dan basah. Cantik banget kan di wajahnya~
                      Pony pun membuat make up serba ‘glowing’ lo via www.youtube.com
                      10. Riasan yang terlihat basah seharusnya bisa membuat kesan kulit terlihat berkilau sehat. Haley Kim berhasil mendapatkannya lo. Keren kan~";
       $blog->slug = 'riasan-wajah-yang-berkilau-bening-jadi-tren-inilah-10-glass-skin-make-up-ala-para-beauty-vlogger';
       $blog->admin = 'yafimm';
       $blog->thumbnail = 'example.blog1.jpg';
       $blog->save();

       $blog = new Blog;
       $blog->id_blog_kategori = 1;
       $blog->judul = 'Diundang Rachel Goddard Buat Nebak Harga Make-Up, Gini Reaksi Kocak Najwa Shihab!';
       $blog->isi_blog = "Saat ini, cewek-cewek lagi berlomba-lomba membuat kulitnya tampak berkilau sehat. Mulai dari menggunakan produk perawatan kulit hingga riasan. Cara paling instan ya mengenakan riasan yang bisa membuat kulit berkilau basah sehat sampai seolah bening. Kuncinya ada pada produk primer wajah, alas bedak yang dewy, serta tambahan highlighter yang membuat kilau makin terpancar.
                     Para Youtuber dan vlogger kecantikan juga membuat tampilan make-up seperti itu dan menamainya sebagai ‘glass skin make-up’ karena memang kulit sengaja dibuat berkilau sehat agar terlihat bening. Dengan cara merias khas masing-masing, secara mengejutkan, hasilnya beda-beda lo. Intip yuk bagaimana penampilan riasan mereka~
                     1. Lihat deh betapa ‘glowing‘ riasan Tasya Farasya. Tangan dingin MUA Vinna Gracia yang berhasil mengubah Tasya jadi secantik dan sebasah ini
                     Freckless palsunya juga juara! via www.instagram.com
                     2. Kulit mengkilap dan basah Sarah Ayu ini bukan karena berminyak berlebihan, tapi karena tambahan highlighter yang ‘cetar’. Padahal riasannya minimalis lo
                     Alisnya yang berserat juga mendukung penampilannya via www.instagram.com
                     3. Sara Robert juga mencoba riasan ini. Selain alisnya yang berserat, nuansa riasannya yang serba nude bikin wajahnya terlihat bersih dan bersinar
                     Pilihan warna bibir yang nggak berlebihan bikin pas via www.instagram.com
                     4. Warna perona pipi Rachel Goddard yang semu-semu merah muda cocok banget sama riasan serba ‘glowing’ di kulit tan eksotisnya
                     Eksotis! via www.instagram.com
                     5. Kalau Stephanie Wose memilih pakai warna serba coklat bata untuk mengimbangi kulitnya yang dibuat mengkilat karena tambahan highlighter
                     Serba coklat makin manis~ via www.instagram.com
                     6. Pilihan menggunakan pewarna bibir warna cerah yang sengaja dibuat tidak rapi bikin penampilan Devienna segar dengan kulit terlihat sehat
                     Bibir cerah ala make-up Korea via www.instagram.com
                     7. Lizzie Parra ingin menonjolkan pada kulitnya yang tampak sehat meski sekadar make up. Riasan mata, pipi, dan bibirnya sengaja sederhana dan minimalis
                     Nggak berlebihan, serba pas! via www.instagram.com
                     8. Kalau yang menerapkan ‘glass skin make-up’ punya kulit cerah, kulitnya makin terlihat bening kan seperti Veronica Ong ini
                     Bening cerah~ via www.instagram.com
                     9. Pony, Youtuber kecantikan asal Korea Selatan juga menjajal riasan yang membuat penampilan kulit wajah yang bening dan basah. Cantik banget kan di wajahnya~
                     Pony pun membuat make up serba ‘glowing’ lo via www.youtube.com
                     10. Riasan yang terlihat basah seharusnya bisa membuat kesan kulit terlihat berkilau sehat. Haley Kim berhasil mendapatkannya lo. Keren kan~";
      $blog->slug = 'diundang-rachel-goddard-buat-nebak-harga-make-up-gini-reaksi-kocak-najwa-shihab';
      $blog->admin = 'dzakim';
      $blog->thumbnail = 'example.blog2.jpg';
      $blog->save();


      $blog = new Blog;
      $blog->id_blog_kategori = 1;
      $blog->judul = '5 Trik Make Up Natural Untukmu yang Masih Pemula. Anti Ribet dan Effortless Pastinya!';
      $blog->isi_blog = "Saat ini, cewek-cewek lagi berlomba-lomba membuat kulitnya tampak berkilau sehat. Mulai dari menggunakan produk perawatan kulit hingga riasan. Cara paling instan ya mengenakan riasan yang bisa membuat kulit berkilau basah sehat sampai seolah bening. Kuncinya ada pada produk primer wajah, alas bedak yang dewy, serta tambahan highlighter yang membuat kilau makin terpancar.
                    Para Youtuber dan vlogger kecantikan juga membuat tampilan make-up seperti itu dan menamainya sebagai ‘glass skin make-up’ karena memang kulit sengaja dibuat berkilau sehat agar terlihat bening. Dengan cara merias khas masing-masing, secara mengejutkan, hasilnya beda-beda lo. Intip yuk bagaimana penampilan riasan mereka~
                    1. Lihat deh betapa ‘glowing‘ riasan Tasya Farasya. Tangan dingin MUA Vinna Gracia yang berhasil mengubah Tasya jadi secantik dan sebasah ini
                    Freckless palsunya juga juara! via www.instagram.com
                    2. Kulit mengkilap dan basah Sarah Ayu ini bukan karena berminyak berlebihan, tapi karena tambahan highlighter yang ‘cetar’. Padahal riasannya minimalis lo
                    Alisnya yang berserat juga mendukung penampilannya via www.instagram.com
                    3. Sara Robert juga mencoba riasan ini. Selain alisnya yang berserat, nuansa riasannya yang serba nude bikin wajahnya terlihat bersih dan bersinar
                    Pilihan warna bibir yang nggak berlebihan bikin pas via www.instagram.com
                    4. Warna perona pipi Rachel Goddard yang semu-semu merah muda cocok banget sama riasan serba ‘glowing’ di kulit tan eksotisnya
                    Eksotis! via www.instagram.com
                    5. Kalau Stephanie Wose memilih pakai warna serba coklat bata untuk mengimbangi kulitnya yang dibuat mengkilat karena tambahan highlighter
                    Serba coklat makin manis~ via www.instagram.com
                    6. Pilihan menggunakan pewarna bibir warna cerah yang sengaja dibuat tidak rapi bikin penampilan Devienna segar dengan kulit terlihat sehat
                    Bibir cerah ala make-up Korea via www.instagram.com
                    7. Lizzie Parra ingin menonjolkan pada kulitnya yang tampak sehat meski sekadar make up. Riasan mata, pipi, dan bibirnya sengaja sederhana dan minimalis
                    Nggak berlebihan, serba pas! via www.instagram.com
                    8. Kalau yang menerapkan ‘glass skin make-up’ punya kulit cerah, kulitnya makin terlihat bening kan seperti Veronica Ong ini
                    Bening cerah~ via www.instagram.com
                    9. Pony, Youtuber kecantikan asal Korea Selatan juga menjajal riasan yang membuat penampilan kulit wajah yang bening dan basah. Cantik banget kan di wajahnya~
                    Pony pun membuat make up serba ‘glowing’ lo via www.youtube.com
                    10. Riasan yang terlihat basah seharusnya bisa membuat kesan kulit terlihat berkilau sehat. Haley Kim berhasil mendapatkannya lo. Keren kan~";
     $blog->slug = '5-trik-make-up-natural-untukmu-yang-masih-pemula-anti-ribet-dan-effortless-pastinya';
     $blog->admin = 'dzakim';
     $blog->thumbnail = 'example.blog3.jpg';
     $blog->save();

    }
}
