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
        $blog->id_blog_kategori = 3;
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
       $blog->id_blog_kategori = 5;
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
      $blog->id_blog_kategori = 2;
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

     $blog = new Blog;
     $blog->id_blog_kategori = 3;
     $blog->judul = 'Mengenal Jenis Kulit dan Permasalahan Kulit';
     $blog->isi_blog = '<p style="text-align: justify;">Jenis kulit merupakan hal dasar yang
                       perlu diketahui oleh setiap orang. Alasannya adalah tanpa mengetahui
                       jenis kulit, kita nggak akan pernah tahu bagaimana perawatan yang tepat
                       terhadap kulit kita. Ibaratnya tuh seperti orang sakit. Kalo nggak tau
                       sakitnya apa kan kita nggak tahu apa yang harus diobatin.</p>
                       <p style="text-align: justify;">Jadi pentingnya mengetahui jenis kulit
                       ini tidak hanya membantu kita untuk memilih perawatan yang tepat, tapi
                       juga mengetahui apakah kita memiliki alergi terhadap suatu produk atau
                       makeup.</p>
                       <p style="text-align: justify;">Selain itu, aku juga cukup kaget karena
                       ketika aku membuat survey di Instagram Story, masih ada beberapa orang
                       yang menyatakan bingung dengan kondisi kulit mereka. Ada yang bilang
                       kering tapi juga berminyak, ada yang bilang kering tapi pori-pori besar,
                        dll. Jadi di artikel ini akan aku jelaskan jenis kulit dan permasalahan
                        kulit berdasarkan jenisnya. Semoga membantu yaaa...</p><h2 style="text-align: justify;">Mengenal Jenis Kulit dan Permasalahan Kulit</h2>
                       <p style="text-align: justify;">Umumnya ada 6 jenis kulit yang dimiliki
                       oleh manusia yaitu kulit normal, kulit kering, kulit berminyak, kulit
                       sensitif, dan kulit aging atau menua. Keenam jenis kulit ini memiliki
                       masalah kulit masing-masing. Setiap jenis kulit memiliki ciri-ciri
                       tersendiri dan biasanya mudah dikenali berdasarkan ciri-ciri yang
                       terlihat.</p>
                       <p style="text-align: justify;">Di artikel ini sudah aku urutkan
                       masing-masing jenis kulit dan permasalahan kulit berdasarkan jenis
                       kulitnya. Ciri-ciri yang aku tulis merupakan ciri-ciri umum yang sering
                       muncul pada jenis kulit yang disebutkan. Begitu juga dengan permasalahan
                        kulitnya.</p>
                       <h3 style="text-align: justify;">Kulit Normal</h3>
                       <p style="text-align: justify;"><a href="https://caaantik.com/wp-content/uploads/2019/02/kulit-normal.png">
                       		<span class="pibfi_pinterest ">


                       		</span>
                       	</a></p>
                       <p style="text-align: justify;">
                       </p><p style="text-align: justify;">Video: <a href="https://www.youtube.com/watch?v=OaKZqtS66k8"><b>Colourpop No Filter Liquid Foundation Medium 80.</b></a></p>
                       <p style="text-align: justify;">
                       </p><h3 style="text-align: justify;">Kulit Kering</h3>
                       <p style="text-align: justify;"><a href="https://caaantik.com/wp-content/uploads/2019/02/kulit-normal-1.png">
                       		<span class="pibfi_pinterest ">


                       		</span>
                       	</a></p>
                       <p style="text-align: justify;">
                       </p><p style="text-align: justify;">Baca Juga:&nbsp;<a title="Review ELF x Alissa Ashley Lip Gloss shade Nude Rose" href="https://caaantik.com/133854/review-elf-x-alissa-ashley-lip-gloss-shade-nude-rose.html"><strong>Lip Gloss Favorit untuk Kulit Medium.</strong></a></p>
                       <h3 style="text-align: justify;">Kulit Berminyak</h3>
                       <p style="text-align: justify;"><a href="https://caaantik.com/wp-content/uploads/2019/02/kulit-normal-2.png">
                       		<span class="pibfi_pinterest ">


                       		</span>
                       	</a></p>
                       <p style="text-align: justify;">
                       </p><p style="text-align: justify;">Video:&nbsp;<a href="https://www.youtube.com/watch?v=YXjPQRdCUyk"><strong>COSRX Two in One Poreless Power Liquid untuk Kulit Berminyak.</strong></a></p>
                       <h3 style="text-align: justify;">Kulit Sensitif.</h3>
                       <p style="text-align: justify;"><a href="https://caaantik.com/wp-content/uploads/2019/02/kulit-normal-3.png">
                       		<span class="pibfi_pinterest ">


                       		</span>
                       	</a></p>
                       <p style="text-align: justify;">
                       </p><p style="text-align: justify;">Baca Juga:&nbsp;<strong><a title="Review Burt’s Bees Mama Bee Belly Butter untuk Stretch Mark" href="https://caaantik.com/133880/review-burts-bees-mama-bee-belly-butter-untuk-stretch-mark.html">Review Burt’s Bees Mama Bee untuk Stretch Mark</a></strong></p>
                       <h3 style="text-align: justify;">Kulit Kombinasi.</h3>
                       <p style="text-align: justify;"><a href="https://caaantik.com/wp-content/uploads/2019/02/kulit-normal-4.png">
                       		<span class="pibfi_pinterest ">


                       		</span>
                       	</a></p>
                       <p style="text-align: justify;">
                       </p><p style="text-align: justify;">Video:&nbsp;<a href="https://www.youtube.com/watch?v=QheFE2xx-Qc"><strong>COSRX Overnight Honey Sleeping Mask for Dry Skin.</strong></a></p>
                       <h3 style="text-align: justify;">Kulit Aging atau Menua.</h3>
                       <p style="text-align: justify;"><a href="https://caaantik.com/wp-content/uploads/2019/02/kulit-normal-5.png">
                       		<span class="pibfi_pinterest ">


                       		</span>
                       	</a></p>
                       <p style="text-align: justify;">
                       </p><p style="text-align: justify;">Baca Juga:&nbsp;<a title="Tips Menghilangkan Komedo dan Membuatnya Tidak Balik Lagi" href="https://caaantik.com/133870/tips-menghilangkan-komedo-dan-membuatnya-tidak-balik-lagi.html"><strong>Tips Menghilangkan Komedo dan Membuatnya Tidak Balik Lagi</strong></a></p>
                       <p style="text-align: justify;">Ada juga permasalahan kulit yang bisa
                       dialami oleh semua jenis kulit seperti jerawat yang disebabkan oleh
                       hormon, kulit dehidrasi, atau hyperpigmentation yang diakibatkan karena
                       kurang merawat kulit. Jadi perlu diingat juga bahwa kulit kering
                       memungkinkan punya pori-pori yang membesar ketika kulit dehidrasi. Kulit
                        normal bisa juga mengalami masalah jerawat yang dikarenakan hormon atau
                        karena jamur.</p>
                       <p style="text-align: justify;">Artikel ini adalah basic guide. Jadi
                       untuk kalian yang masih bingung menentukan jenis kulit kalian, bisa
                       mencoba mengikuti panduan dari blog ini dan mulai mempersiapkan untuk
                       permasalahan kulit yang muncul. Kalau kalian masih bingung, silakan
                       konsultasikan ke dermatologis untuk jenis kulit dan masalah kulit yang
                       kalian alami.</p>
                       <p style="text-align: justify;">Sekian artikel kali ini. Semoga membantu ya. Take care of your skin, it’s the largest organ in your body.</p>
                       <p style="text-align: justify;">Terima kasih sudah membaca. I’ll see you on my next post…xoxo.</p>';

    $blog->slug = str_slug($blog->judul);
    $blog->admin = 'dzakim';
    $blog->thumbnail = '20190713.mengenal-jenis-kulit-dan-permasalahan-kulit.jpg';
    $blog->save();



     $blog = new Blog;
     $blog->id_blog_kategori = 5;
     $blog->judul = 'Tampil Natural dengan Concealer yang Bantu Samarkan Kekurangan Pada Wajah';
     $blog->isi_blog = '<p>Tampil cantik tanpa permasalahan kulit <a href="https://www.fimela.com/tag/wajah">wajah</a>
                      tentu menjadi keinginan hampir semua perempuan. Terlebih jika
                     penampilany terlihat layaknya memiliki kulit yang indah natural tanpa
                     bantuan makeup. Hal ini bisa kamu dapatkan dengan menggunakan rangkaian
                     makeup Tauche Eclat dari YSL.
                     </p>
                     <div class="baca-juga">
                     <p class="baca-juga__header">Baca Juga</p>
                     <ul class="baca-juga__list"><li><a href="https://www.fimela.com/beauty-health/read/3905716/jangan-malas-4-tanda-harus-kenakan-concealer" target="_blank" title="Jangan Malas, 4 Tanda Harus Kenakan Concealer">Jangan Malas, 4 Tanda Harus Kenakan Concealer</a></li><li><a href="https://www.fimela.com/beauty-health/read/3973863/tips-cara-menggunakan-concealer-sesuai-kebutuhan-kulitmu" target="_blank" title="Tips Cara Menggunakan Concealer Sesuai Kebutuhan Kulitmu">Tips Cara Menggunakan Concealer Sesuai Kebutuhan Kulitmu</a></li><li><a href="https://www.fimela.com/beauty-health/read/3934143/hal-ini-yang-bisa-dilakukan-jika-tahu-concealer-habis" target="_blank" title="Hal Ini yang Bisa Dilakukan Jika Tahu Concealer Habis">Hal Ini yang Bisa Dilakukan Jika Tahu Concealer Habis</a></li></ul>
                     </div>



                     <p>Untuk melengkapi koleksinya ini, YSL memperkenalkan keluarga baru dari Touche Eclat, yaitu Tauche Eclat High Cover. Sebuah <a href="https://www.fimela.com/beauty-health/read/3905716/jangan-malas-4-tanda-harus-kenakan-concealer"><em>concealer</em></a> berbentuk pensil yang memberikan riasan natural untuk tampilan sempurnamu.</p>
                     <p>Seperti namanya, Touche Eclat Hight Cover ini diklaim memiliki
                     tingkat coverage yang tinggi sehingga kulitmu terlihat lebih mulus. YAng
                      lebih menarik, meski high coverage, namun saat diaplikasikan, concealer
                      ini tidak membuatmu terlihat menor.</p>
                     <p>Dengan mengaplikasikan <a href="https://www.fimela.com/beauty-health/read/3905716/jangan-malas-4-tanda-harus-kenakan-concealer"><em>concealer</em></a>
                      ini kamu akan mendapatkan hasil riasan natural dan sempurna. Formula
                     yang dihadirkan dari Touche Eclat High Cover ini hadir dalam 10 shade
                     warna bisa kamu pilih sesuai dengan tone kulitmu.</p>
                     <p>&nbsp;</p><div class="article-content-body__item-page" data-page="2" data-title="Manfaat menggunakannya"><h2 class="article-content-body__item-title" data-component-name="desktop:read-page:article-content-body:section:pagetitle">Manfaat menggunakannya</h2><div class="article-content-body__item-content" data-component-name="desktop:read-page:article-content-body:section:text"><p>Tiga
                      manfaat yang bisa kamu rasakan saat menggunakannya yaitu pertama adalah
                      tampilan yang natural. Tampilan natural yang light dan membuat wajah
                     lebih glowing, karena memantulkan cahaya dengan baik.</p>
                     <p>Kedua tentunya coverage yang tinggi membuatnya tahan lama saat
                     digunakan. Hal ini juga karena formula pada concealer ini sangat
                     pigmented memberikan hasil yang sempurna tanpa terlihat berlebihan.</p>
                     <p>Terakhir karena dilengkapi dengan vitamin E, concealer ini tidak akan
                      membuat kulitmu kaku. Bahkan membuatnya rileks. Efek menenangkan dari
                     ekstrak calendula maroko atau gold bloom sebagai formulanya.</p><br></div></div><div class="article-content-body__item-page" data-page="3" data-title="Kandungan Gold Bloom"><h2 class="article-content-body__item-title" data-component-name="desktop:read-page:article-content-body:section:pagetitle">Kandungan Gold Bloom</h2><div class="article-content-body__item-content" data-component-name="desktop:read-page:article-content-body:section:text"><p>Gold
                      Bloom didapatkan langsung dari taman YSL Beaute Ourika yang menjadi
                     andalan dalam setiap produknya. Untuk mendapatkan tampilan sempurna
                     dengan hasil akhir yang natural menggunakan concealer Touche Eclat High
                     Cover dengan harga Rp660 ribu.</p></div><div class="article-content-body__item-content" data-component-name="desktop:read-page:article-content-body:section:text"><p>#GrowFearless with Fimela</p></div></div>
                ';

    $blog->slug = str_slug($blog->judul);
    $blog->admin = 'yafimm';
    $blog->thumbnail = '20190713.tampil-natural-dengan-concealer-yang-bantu-samarkan-kekurangan-pada-wajah.jpg';
    $blog->save();

    $blog = new Blog;
    $blog->id_blog_kategori = 1;
    $blog->judul = 'Wanita dan Make Up';
    $blog->isi_blog = '<p><a href="https://www.kompasiana.com/tag/wanita">Wanita</a> selalu digambarkan sebagai pribadi yang memiliki sifat lemah lembut, <a href="https://www.kompasiana.com/tag/feminim">feminim</a>,
                       dan sensitive. Itu hanya sebagian &nbsp;kecilnya saja, jika kita kenali
                      wanita pun memiliki sifat yang selalu ingin berbeda bahkan lebih dari
                      wanita lain pada umumnya. Wanita ingin lebih pintar, lebih <a href="https://www.kompasiana.com/tag/menarik">menarik</a>, dan lebih <a href="https://www.kompasiana.com/tag/cantik">cantik</a>.
                       Maka tidak heran kalau sering kita jumpai banyak wanita yang
                      mengupayakan apapun supaya mendapatkan apa yang diinginkan. Sebagai
                      salah satu cara yang paling simple dari wanita adalah make up. Make up
                      merupakan kegiatan <a href="https://www.kompasiana.com/tag/merias">merias</a> <a href="https://www.kompasiana.com/tag/wajah">wajah</a> dengan bantuan <a href="https://www.kompasiana.com/tag/kosmetik">kosmetik</a> dikatakan sebagai salah satu upaya wanita supaya tampil lebih cantik dan menarik. &nbsp; &nbsp;</p><p>Salah
                       satu temanku Zahra Annisa, wanita cantik usia 22 tahun yang sudah
                      mempelajari make up sejak kelas 2 SMP itu menganggap make up sebagai
                      sesuatu yang mencirikhaskan wanita. Ia memulai make up berdasarkan
                      dorongan dari dirinya sendiri, bukan karena mengikuti trend atau
                      dorongan orang lain. Zahra awalnya mulai belajar make up dari yang
                      sangat sederhana, dari sekedar memakai bedak, lipstick, dan pensil alis.
                       Kemudian semakin banyak tentang make up yang ia pelajari dan dapat
                      dituangkan melalui riasan pada wajahnya.</p><p>Menurutnya pula make up
                      sangat memiliki peran untuk membantu penampilan tiap wanita. Make up
                      dapat membuat harga dirinya menjadi meningkat, membuat lebih percaya
                      diri, dan lebih terlihat anggun. Kini selain merias wajah, mengkoleksi
                      make up pun menjadi salah satu hobi Zahra. Koleksi make up nya selalu
                      bertambah dan semakin bermacam-macam pula jenisnya. Memang benar apa
                      yang dikatakannya, make up sangat membantu penampilan wanita untuk lebih
                       tampil percaya diri, dan terbukti Zahra pun kini tampil dengan tampak
                      lebih cantik dan menarik dengan polesan make up pada wajahnya.</p>';

   $blog->slug = str_slug($blog->judul);
   $blog->admin = 'yafimm';
   $blog->thumbnail = '20190712.wanita-dan-make-up.jpg';
   $blog->save();

    }
}
