<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Bab;
use App\Models\Pasal;


class PasalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasalKUHP = [
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 1',
            'isi_pasal' => '(1) Suatu perbuatan tidak dapat dipidana, kecuali berdasarkan kekuatan ketentuan perundang-undangan pidana yang telah ada. (2) Bilamana ada perubahan dalam perundang-undangan sesudah perbuatan dilakukan, maka terhadap terdakwa diterapkan ketentuan yang paling menguntungkannya.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 2',
            'isi_pasal' => 'Ketentuan pidana dalam perundang-undangan Indonesia diterapkan bagi setiap orang yang melakukan sesuatu tindak pidana di Indonesia.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 3',
            'isi_pasal' => 'Ketentuan pidana dalam perundang-undangan Indonesia berlaku bagi setiap orang yang di luar wilayah Indonesia melakukan tindak pidana di dalam kendaraan air atau pesawat udara Indonesia.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 4',
            'isi_pasal' => 'Ketentuan pidana dalam perundang-undangan Indonesia diterapkan bagi setiap orang yang melakukan di luar Indonesia: 1. salah satu kejahatan berdasarkan pasal-pasal 104, 106, 107, 108, dan 131; 2. suatu kejahatan mengenai mata uang atau uang kertas yang dikeluarkan oleh negara atau bank, ataupun mengenai meterai yang dikeluarkan dan merek yang digunakan oleh Pemerintah Indonesia; 3. pemalsuan surat hutang atau sertifikat hutang atas tanggungan Indonesia, atas tanggungan suatu daerah atau bagian daerah Indonesia, termasuk pula pemalsuan talon, tanda dividen atau tanda bunga, yang mengikuti surat atau sertifikat itu, dan tanda yang dikeluarkan sebagai pengganti surat tersebut, atau menggunakan surat-surat tersebut di atas, yang palsu atau dipalsukan, seolah-olah asli dan tidak dipalsu; 4. salah satu kejahatan yang tersebut dalam pasal-pasal 438, 444 sampai dengan 446 tentang pembajakan laut dan pasal 447 tentang penyerahan kendaraan air kepada kekuasaan bajak laut dan pasal 479 huruf j tentang penguasaan pesawat udara secara melawan hukum, pasal 479 huruf l, m, n, dan o tentang kejahatan yang mengancam keselamatan penerbangan sipil.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 5',
            'isi_pasal' => '(1) Ketentuan pidana dalam perundang-undangan Indonesia diterapkan bagi warga negara yang di luar Indonesia melakukan: 1. salah satu kejahatan tersebut dalam Bab I dan II Buku Kedua dan pasal-pasal 160, 161, 240, 279, 450, dan 451; 2. salah satu perbuatan yang oleh suatu ketentuan pidana dalam perundang-undangan Indonesia dipandang sebagai kejahatan, sedangkan menurut perundang-undangan negara dimana perbuatan dilakukan diancam dengan pidana. (2) Penuntutan perkara sebagaimana dimaksud dalam butir 2 dapat dilakukan juga jika tertuduh menjadi warga negara sesudah melakukan perbuatan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 6',
            'isi_pasal' => 'Berlakunya pasal 5 ayat 1 butir 2 dibatasi sedemikian rupa sehingga tidak dijatuhkan pidana mati, jika menurut perundang-undangan negara dimana perbuatan dilakukan, terhadapnya tidak diancamkan pidana mati.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 7',
            'isi_pasal' => 'Ketentuan pidana dalam perundang-undangan Indonesia berlaku bagi setiap pejabat yang di luar Indonesia melakukan salah satu tindak pidana sebagaimana dimaksud dalam Bab XXVIII Buku Kedua.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 8',
            'isi_pasal' => 'Ketentuan pidana dalam perundang-undangan Indonesia berlaku bagi nahkoda dan penumpang perahu Indonesia, yang di luar Indonesia, sekalipun di luar perahu, melakukan salah satu tindak pidana sebagaimana dimaksud dalam Bab XXIX Buku Kedua.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'I',
            'nomor_pasal' => 'Pasal 9',
            'isi_pasal' => 'Diterapkannya pasal-pasal 2-5, 7, dan 8 dibatasi oleh pengecualian-pengecualian yang diakui dalam hukum internasional.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 10',
            'isi_pasal' => 'Pidana terdiri atas: a. pidana pokok: 1. pidana mati; 2. pidana penjara; 3. pidana kurungan; 4. pidana denda; 5. pidana tutupan. b. pidana tambahan: 1. pencabutan hak-hak tertentu; 2. perampasan barang-barang tertentu; 3. pengumuman putusan hakim.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 11',
            'isi_pasal' => 'Pidana mati dijalankan oleh algojo di tempat gantungan dengan menjeratkan tali yang terikat di tiang gantungan pada leher terpidana kemudian menjatuhkan papan tempat terpidana berdiri.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 12',
            'isi_pasal' => '(1) Pidana penjara ialah seumur hidup atau selama waktu tertentu. (2) Pidana penjara selama waktu tertentu paling pendek satu hari dan paling lama lima belas tahun berturut-turut. (3) Pidana penjara selama waktu tertentu boleh dijatuhkan untuk dua puluh tahun berturut-turut dalam hal kejahatan yang pidananya hakim boleh memilih antara pidana mati, pidana seumur hidup, dan pidana penjara selama waktu tertentu, atau antara pidana penjara seumur hidup dan pidana penjara selama waktu tertentu; begitu juga dalam hal batas lima belas tahun dilampaui sebab tambahanan pidana karena perbarengan, pengulangan atau karena ditentukan pasal 52. (4) Pidana penjara selama waktu tertentu sekali-kali tidak boleh melebihi dua puluh tahun.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 13',
            'isi_pasal' => 'Para terpidana dijatuhi pidana penjara dibagi-bagi atas beberapa golongan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 14',
            'isi_pasal' => 'Terpidana yang dijatuhkan pidana penjara wajib menjalankan segala pekerjaan yang dibebankan kepadanya berdasarkan ketentuan pelaksanaan pasal 29.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 14a',
            'isi_pasal' => '(1) Apabila hakim menjatuhkan pidana paling lama satu tahun atau pidana kurungan, tidak termasuk pidana kurungan pengganti maka dalam putusnya hakim dapat memerintahkan pula bahwa pidana tidak usah dijalani, kecuali jika dikemudian hari ada putusan hakim yang menentukan lain, disebabkan karena si terpidana melakukan suatu tindak pidana sebelum masa percobaan yang ditentukan dalam perintah tersebut diatas habis, atau karena si terpidana selama masa percobaan tidak memenuhi syarat khusus yang mungkin ditentukan lain dalam perintah itu. (2) Hakim juga mempunyai kewenangan seperti di atas, kecuali dalam perkara-perkara yang mengenai penghasilan dan persewaan negara apabila menjatuhkan pidana denda, tetapi harus ternyata kepadanya bahwa pidana denda atau perampasan yang mungkin diperintahkan pula akan sangat memberatkan si terpidana. Dalam menerapkan ayat ini, kejahatan dan pelanggaran candu hanya dianggap sebagai perkara mengenai penghasilan negara, jika terhadap kejahatan dan pelanggaran itu ditentukan bahwa dalam hal dijatuhkan pidana denda, tidak diterapkan ketentuan pasal 30 ayat 2. (3) Jika hakim tidak menentukan lain, maka perintah mengenai pidana pokok juga mengenai pidana tambahan. (4) Perintah tidak diberikan, kecuali hakim setelah menyelidiki dengan cermat berkeyakinan bahwa dapat diadakan pengawasan yang cukup untuk dipenuhinya syarat umum, bahwa terpidana tidak akan melakukan tindak pidana, dan syarat-syarat khusus jika sekiranya ditetapkan. (5) Perintah tersebut dalam ayat 1 harus disertai hal-hal atau keadaan-keadaan yang menjadi alasan perintah itu.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 14b',
            'isi_pasal' => '(1) Masa percobaan bagi kejahatan dan pelanggaran dalam pasal-pasal 492, 504, 505, 506, dan 536 paling lama tiga tahun dan bagi pelanggaran lainnya paling lama dua tahun. (2) Masa percobaan dimulai pada saat putusan telah menjadi tetap dan telah diberitahukan kepada terpidana menurut cara yang ditentukan dalam undang-undang. (3) Masa percobaan tidak dihitung selama terpidana ditahan secara sah.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 14c',
            'isi_pasal' => '(1) Dengan perintah yang dimaksud pasal 14a, kecuali jika dijatuhkan pidana denda, selain menetapkan syarat umum bahwa terpidana tidak akan melakukan tindak pidana, hakim dapat menetapkan syarat khusus bahwa terpidana dalam waktu tertentu, yang lebih pendek daripada masa percobaannya, harus mengganti segala atau sebagian kerugian yang ditimbulkan oleh tindak pidana tadi. (2) Apabila hakim menjatuhkan pidana penjara lebih dari tiga bulan atau pidana kurungan atas salah satu pelanggaran berdasarkan pasal-pasal 492, 504, 505, 506, dan 536, maka boleh diterapkan syarat-syarat khusus lainnya mengenai tingkah laku terpidana yang harus dipenuhi selama masa percobaan atau selama sebagian dari masa percobaan. (3) Syarat-syarat tersebut di atas tidak boleh mengurangi kemerdekaan beragama atau kemerdekaan berpolitik terpidana.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 14d',
            'isi_pasal' => '(1) Yang diserahi mengawasi supaya syarat-syarat dipenuhi, ialah pejabat yang berwenang menyuruh menjalankan putusan, jika kemudian ada perintah untuk menjalankan putusan. (2) Jika ada alasan, hakim dapat perintah boleh mewajibkan lembaga yang berbentuk badan hukum dan berkedudukan di Indonesia, atau kepada pemimpin suatu rumah penampungan yang berkedudukan di situ, atau kepada pejabat tertentu, supaya memberi pertolongan atau bantuan kepada terpidana dalam memenuhi syarat-syarat khusus. (3) Aturan-aturan lebih lanjut mengenai pengawasan dan bantuan tadi serta mengenai penunjukan lembaga dan pemimpin rumah penampungan yang dapat diserahi dengan bantuan itu, diatur dengan undang-undang.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 14e',
            'isi_pasal' => 'Atas usul pejabat dalam pasal ayat 1, atau atas permintaan terpidana, hakim yang memutus perkara dalam tingkat pertama, selama masa percobaan, dapat mengubah syarat-syarat khusus dalam masa percobaan. Hakim juga boleh memerintahkan orang lain daripada orang yang diperintahkan semula, supaya memberi bantuan kepada terpidana dan juga boleh memperpanjang masa percobaan satu kali, paling banyak dengan separuh dari waktu yang paling lama dapat diterapkan untuk masa percobaan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 14f',
            'isi_pasal' => '(1) Tanpa mengurangi ketentuan pasal diatas, maka atas usul pejabat tersebut dalam pasal 14d ayat 1, hakim yang memutus perkara dalam tingkat pertama dapat memerintahkan supaya pidananya dijalankan, atau memerintahkan supaya atas namanya diberi peringatan pada terpidana, yaitu jika terpidana selama masa percobaan melakukan tindak pidana dan karenanya ada pemidanaan yang menjadi tetap, atau jika salah satu syarat lainnya tidak dipenuhi, ataupun jika terpidana sebelum masa percobaan habis dijatuhi pemidanaan yang menjadi tetap, karena melakukan tindak pidana selama masa percobaan mulai berlaku. Ketika memberi peringatan, hakim harus menentukan juga cara bagaimana memberikan peringatan itu. (2) Setelah masa percobaan habis, perintah supaya pidana dijalankan tidak dapat diberikan lagi, kecuali jika sebelum masa percobaan habis, terpidana dituntut karena melakukan tindak pidana di dalam masa percobaan dan penuntutan itu kemudian berakhir dengan pemidanan yang menjadi tetap. Dalam hal itu, dalam waktu dua bulan setelah pemidanaan menjadi tetap, hakim masih boleh memerintahkan supaya pidananya dijalankan, karena melakukan tindak pidana tadi.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 15',
            'isi_pasal' => '(1) Jika terpidana telah menjalani dua pertiga dari lamanya pidana penjara yang dijatuhkan kepadanya, sekurang-kurangnya harus sembilan bulan, maka ia dapat dikenakan pelepasan bersyarat. Jika terpidana harus menjalani beberapa pidana berturut-turut, pidana itu dianggap sebagai satu pidana. (2) Ketika memberikan pelepasan bersyarat, ditentukan pula suatu masa percobaan, serta ditetapkan syarat-syarat yang harus dipenuhi selama masa percobaan. (3) Masa percobaan itu lamanya sama dengan sisa waktu pidana penjara yang belum dijalani, ditambah satu tahun. Jika terpidana ada dalam tahanan yang sah, maka waktu itu tidak termasuk masa percobaan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 15a',
            'isi_pasal' => '(1) Pelepasan bersyarat diberikan dengan syarat umum bahwa terpidana tidak akan melakukan tindak pidana dan perbuatan lain yang tidak baik. (2) Selain itu, juga boleh ditambahkan syarat-syarat khusus mengenai kelakuan terpidana, asal saja tidak mengurangi kemerdekaan beragama dan kemerdekaan berpolitik. (3) Yang diserahi mengawasi supaya segala syarat dipenuhi ialah pejabat tersebut dalam pasal 14d ayat 1. (4) Agar supaya syarat-syarat dipenuhi, dapat diadakan pengawasan khusus yang semata-mata harus bertujuan memberi bantuan kepada terpidana. (5) Selama masa percobaan, syarat-syarat dapat diubah atau dihapus atau dapat diadakan syarat-syarat khusus baru; begitu juga dapat diadakan pengawasan khusus. Pengawasan khusus itu dapat diserahkan kepada orang lain daripada orang yang semula diserahi.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 15b',
            'isi_pasal' => '(1) Jika orang yang diberi pelepasan bersyarat selama masa percobaan melakukan hal-hal yang melanggar syarat-syarat tersebut dalam surat pasnya, maka pelepasan bersyarat dapat dicabut. Jika ada sangkaan keras bahwa hal-hal di atas dilakukan, Menteri Kehakiman dapat menghentikan pelepasan bersyarat tersebut untuk sementara waktu. (2) Waktu selama terpidana dilepaskan bersyarat sampai menjalani pidana lagi, tidak termasuk waktu pidananya. (3) Jika tiga bulan setelah masa percobaan habis, pelepasan bersyarat tidak dapat dicabut kembali, kecuali jika sebelum waktu tiga bulan lewat, terpidana dituntut karena melakukan tindak pidana pada masa percobaan, dan tuntutan berakhir dengan putusan pidana yang menjadi tetap. Pelepasan bersyarat masih dapat dicabut dalam waktu tiga bulan setelah putusan menjadi tetap berdasarkan pertimbangan bahwa terpidana melakukan tindak pidana selama masa percobaan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 16',
            'isi_pasal' => '(1) Ketentuan pelepasan bersyarat ditetapkan oleh Menteri Kehakiman atas usul atau setelah mendapat kabar dari pengurus penjara tempat terpidana, dan setelah mendapat keterangan dari jaksa tempat asal terpidana. Sebelum menentukan, harus ditanya dahulu pendapat Dewan Reklasering Pusat, yang tugasnya diatur oleh Menteri Kehakiman. (2) Ketentuan mencabut pelepasan bersyarat, begitu juga hal-hal yang tersebut dalam pasal 15a ayat 5, ditetapkan oleh Menteri Kehakiman atas usul atau setelah mendapat kabar dari jaksa tempat asal terpidana. Sebelum memutus, harus ditanya dahulu pendapat Dewan Reklasering Pusat. (3) Selama pelepasan masih dapat dicabut, maka atas perintah jaksa tempat dimana dia berada, orang yang dilepaskan bersyarat dapat ditahan guna menjaga ketertiban umum, jika ada sangkaan yang beralasan bahwa orang itu selama masa percobaan telah berbuat hal-hal yang melanggar syarat-syarat tersebut dalam surat pasnya. Jaksa harus segera memberitahukan penahanan itu kepada Menteri Kehakiman. (4) Waktu penahanan paling lama enam puluh hari. Jika penahanan disusul dengan penghentian untuk sementara waktu atau pencabutan pelepasan bersyarat, maka orang itu dianggap meneruskan menjalani pidananya mulai dari tahanan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 17',
            'isi_pasal' => 'Contoh surat pas dan peraturan pelaksanaan pasal-pasal 15, 15a, dan 16 diatur dengan undang-undang.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 18',
            'isi_pasal' => '(1) Pidana kurungan paling sedikit satu hari dan paling lama satu tahun. (2) Jika ada pidana yang disebabkan karena perbarengan atau pengulangan atau karena ketentuan pasal 52, pidana kurungan dapat ditambah menjadi satu tahun empat bulan. (3) Pidana kurungan sekali-kali tidak boleh lebih dari satu tahun empat bulan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 19',
            'isi_pasal' => '(1) Orang yang dijatuhi pidana kurungan wajib menjalankan pekerjaan yang dibebankan kepadanya, sesuai dengan aturan-aturan pelaksanaan pasal 29. (2) Ia diserahi pekerjaan yang lebih ringan daripada orang yang dijatuhi pidana penjara.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 20',
            'isi_pasal' => '(1) Hakim yang menjatuhkan pidana penjara atau pidana kurungan paling lama satu bulan, boleh menetapkan bahwa jaksa dapat mengizinkan terpidana bergerak dengan bebas di luar penjara sehabis waktu kerja. (2) Jika terpidana yang mendapat kebebasan itu tidak datang pada waktu dan tempat yang telah ditentukan untuk menjalani pekerjaan yang dibebankan kepadanya, maka ia harus menjalani pidananya seperti biasa kecuali kalau tidak datangnya itu bukan karena kehendak sendiri. (3) Ketentuan dalam ayat 1 tidak diterapkan kepada terpidana jika pada waktu melakukan tindak pidana belum ada dua tahun sejak ia habis menjalani pidana penjara atau pidana kurungan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 21',
            'isi_pasal' => 'Pidana kurungan harus dijalani dalam daerah dimana si terpidana berdiam ketika putusan hakim dijalankan, atau jika tidak punya tempat kediaman, di dalam daerah dimana ia berada, kecuali kalau Menteri Kehakiman atas permintaannya terpidana membolehkan menjalani pidananya di daerah lain.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 22',
            'isi_pasal' => '(1) Terpidana yang sedang menjalani pidana hilang kemerdekaan di suatu tempat yang digunakan untuk menjalani pidana penjara, atau pidana kurungan, atau kedua-duanya, segera sehabis pidana habis hilang kemerdekaan itu selesai, kalau diminta, boleh menjalani kurungan di tempat itu juga. (2) Pidana kurungan karena sebab di atas dijalani di tempat yang khusus untuk menjalani pidana penjara, tidak berubah sifatnya oleh karena itu.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 23',
            'isi_pasal' => 'Orang yang dijatuhi pidana kurungan, dengan biaya sendiri boleh sekedar meringankan nasibnya menurut aturan-aturan yang akan ditetapkan dengan undang-undang.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 24',
            'isi_pasal' => 'Orang yang dijatuhi pidana penjara atau pidana kurungan boleh diwajibkan bekerja di dalam atau di luar tembok tempat orang-orang terpidana.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 25',
            'isi_pasal' => 'Yang tidak boleh diserahi pekerjaan di luar tembok tempat tersebut ialah: 1. Orang-orang yang dijatuhi pidana penjara seumur hidup; 2. Para wanita; 3. Orang-orang yang menurut pemeriksaan dokter tidak boleh menjalankan pekerjaan demikian.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 26',
            'isi_pasal' => 'Jikalau mengingat keadaan diri atau masyarakat terpidana, hakim menimbang ada alasan, maka dalam putusan ditentukan bahwa terpidana tidak boleh diwajibkan bekerja di luar tembok tempat orang-orang terpidana.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 27',
            'isi_pasal' => 'Lamanya pidana penjara untuk waktu tertentu dan pidana kurungan dalam putusan hakim dinyatakan dengan hari, minggu, bulan, dan tahun; tidak boleh dengan pecahan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 28',
            'isi_pasal' => 'Pidana penjara dan pidana kurungan dapat dilaksanakan di satu tempat asal saja terpisah.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 29',
            'isi_pasal' => '(1) Hal menunjuk tempat untuk menjalani pidana penjara, pidana kurungan, atau kedua-duanya, begitu juga hal mengatur dan mengurus tempat-tempat itu, hal membedakan orang terpidana dalam golongan-golongan, hal mengatur pemberian pengajaran, penyelenggaraan ibadat, hal tata tertib, hal tempat untuk tidur, hal makanan, dan pakaian, semuanya itu diatur dengan undang-undang sesuai dengan kitab undang-undang ini. (2) Jika perlu, Menteri Kehakiman menetapkan aturan rumah tangga untuk tempat-tempat orang terpidana.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 30',
            'isi_pasal' => '(1) Pidana denda paling sedikit tiga rupiah tujuh puluh lima sen. (2) Jika pidana denda tidak dibayar, ia diganti dengan pidana kurungan. (3) Lamanya pidana kurungan pengganti paling sedikit satu hari dan paling lama enam bulan. (4) Dalam putusan hakim, lamanya pidana kurungan pengganti ditetapkan demikian; jika pidana dendanya tujuh rupiah lima puluh dua sen atau kurungan, dihitung satu hari; jika lebih dari lima rupiah lima puluh sen, tiap-tiap tujuh rupiah lima puluh sen dihitung paling banyak satu hari demikian pula sisanya yang tidak cukup tujuh rupiah lima puluh sen. (5) Jika ada pemberatan pidana denda disebabkan karena perbarengan atau pengulangan, atau karena ketentuan pasal 52, maka pidana kurungan pengganti paling lama delapan bulan. (6) Pidana kurungan pengganti sekali-kali tidak boleh lebih dari delapan bulan.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 31',
            'isi_pasal' => '(1) Terpidana dapat menjalani pidana kurungan pengganti tanpa menunggu batas waktu pembayaran denda. (2) Ia selalu berwenang membebaskan dirinya dari pidana kurungan pengganti dengan membayar dendanya. (3) Pembayaran sebagian dari pidana denda, baik sebelum maupun sesudah mulai menjalani pidana kurungan yang seimbang dengan bagian yang dibayarnya.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 32',
            'isi_pasal' => '(1) Pidana penjara dan pidana kurungan mulai berlaku bagi terpidana yang sudah di dalam tahanan sementara, pada hari ketika putusan hakim menjadi tetap, dan bagi terpidana lainnya pada hari ketika putusan hakim mulai dijalankan. (2) jika dalam putusan hakim dijatuhkan pidana penjara dan pidana kurungan atas beberapa perbuatan pidana, dan kemudian putusan itu bagi kedua pidana tadi menjadi tetap pada waktu yang sama, sedangkan terpidana sudah ada dalam tahanan sementara karena kedua atau salah satu perbuatan pidana itu, maka pidana penjara mulai berlaku pada saat ketika putusan hakim menjadi tetap, dan pidana kurungan mulai berlaku setelah pidana penjara habis.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 33',
            'isi_pasal' => '(1) Hakim dalam putusannya boleh menentukan bahwa waktu terpidana ada dalam tahanan sementara sebelum putusan menjadi tetap, seluruhnya atau sebagian dipotong dari pidana penjara selama waktu tertentu dari pidana kurungan atau dari pidana denda yang dijatuhkan kepadanya; dalam hal pidana denda dengan memakai ukuran menurut pasal 31 ayat 3. (2) Waktu selama seorang terdakwa dalam tahanan sementara yang tidak berdasarkan surat perintah, tidak dipotong dari pidananya, kecuali jika pemotongan itu dinyatakan khusus dalam putusan hakim. (3) Ketentuan pasal ini berlaku juga dalam hal terdakwa oleh sebab dituntut bareng karena melakukan beberapa tindak pidana, kemudian dipidana karena perbuatan lain daripada yang didakwakan kepadanya waktu ditahan sementara.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 33a',
            'isi_pasal' => 'Jika orang yang ditahan sementara dijatuhi pidana penjara atau pidana kurungan, dan kemudian dia sendiri atau orang lain dengan persetujuannya mengajukan permohonan ampun, waktu mulai permohonan diajukan hingga ada putusan Presiden, tidak dihitung sebagai waktu menjalani pidana, kecuali jika Presiden, dengan mengingat keadaan perkaranya, menentukan bahwa waktu itu seluruhnya atau sebagian dihitung sebagai waktu menjalani pidana.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 34',
            'isi_pasal' => 'Jika terpidana selama menjalani pidana melarikan diri, maka waktu selama di luar tempat menjalani pidana tidak dihitung sebagai waktu menjalani pidana.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 35',
            'isi_pasal' => '(1) Hak-hak terpidana yang dengan putusan hakim dapat dicabut dalam hal-hal yang ditentukan dalam kitab undang-undang ini, atau dalam aturan umum lainnya ialah: 1. hak memegang jabatan pada umumnya atau jabatan yang tertentu; 2. hak memasuki Angkatan Bersenjata; 3. hak memilih dan dipilih dalam pemilihan yang diadakan berdasarkan aturan-aturan umum. 4. hak menjadi penasehat hukum atau pengurus atas penetapan pengadilan, hak menjadi wali, wali pengawas, pengampu atau pengampu pengawas, atas orang yang bukan anak sendiri; 5. hak menjalankan kekuasaan bapak, menjalankan perwalian atau pengampuan atas anak sendiri; 6. hak menjalankan mata pencarian tertentu.',
            ],
            [
            'buku' => 'BUKU KESATU ATURAN UMUM',
            'nomor_bab' => 'II',
            'nomor_pasal' => 'Pasal 36',
            'isi_pasal' => 'Hak memegang jabatan pada umumnya atau jabatan tertentu dan hak memasuki Angkatan Bersenjata, kecuali dalam hal yang diterangkan dalam Buku Kedua, dapat dicabut dalam hal pemidanaan karena kejahatan jabatan atau kejahatan yang melanggar kewajiban khusus sesuatu jabatan, atau karena memakai kekuasaan, kesempatan atau sarana yang diberikan pada terpidana karena jabatannya.',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 37',
                'isi_pasal' => '(1) Kekuasaan bapak, kekuasaan wali, wali pengawas, pengampu, dan pengampu pengawas, baik atas anak sendiri maupun atas orang lain, dapat dicabut dalam hal pemidanaan:
        1. orang tua atau wali yang dengan sengaja melakukan kejahatan bersama-sama dengan anak yang belum dewasa yang ada di bawah kekuasaannya;
        2. orang tua atau wali terhadap anak yang belum dewasa yang ada di bawah kekuasaannya, melakukan kejahatan, yang tersebut dalam bab XIII, XIV, XV, XVIII, XIX, dan XX Buku Kedua.
        (2) Pencabutan tersebut dalam ayat 1 tidak boleh dilakukan oleh hakim pidana terhadap orang-orang yang baginya diterapkan undang-undang hukum perdata tentang pencabutan kekuasaan orang tua, kekuasaan wali dan kekuasaan pengampu.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 38',
                'isi_pasal' => '(1) Jika dilakukan pencabutan hak, hakim menentukan lamanya pencabutan sebagai berikut:
        1. dalam hal pidana mati atau pidana penjara seumur hidup, lamanya pencabutan seumur hidup;
        2. dalam hal pidana penjara untuk waktu tertentu atau pidana kurungan, lamanya pencabutan paling sedikit dua tahun dan paling banyak lima tahun lebih lama dari pidana pokoknya;
        3. dalam hal pidana denda, lamanya pencabutan paling sedikit dua tahun dan paling banyak lima tahun.
        (2) Pencabutan hak mulai berlaku pada hari putusan hakim dapat dijalankan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 39',
                'isi_pasal' => '(1) Barang-barang kepunyaan terpidana yang diperoleh dari kejahatan atau yang sengaja dipergunakan untuk melakukan kejahatan, dapat dirampas.
        (2) Dalam hal pemidanaan karena kejahatan yang tidak dilakukan dengan sengaja atau karena pelanggaran, dapat juga dijatuhkan putusan perampasan berdasarkan hal-hal yang ditentukan dalam undang-undang.
        (3) Perampasan dapat dilakukan terhadap orang yang bersalah yang diserahkan kepada pemerintah, tetapi hanya atas barang-barang yang telah disita.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 40',
                'isi_pasal' => 'Jika seorang di bawah umur enam belas tahun mempunyai, memasukkan atau mengangkut barang-barang dengan melanggar aturan-aturan mengenai pengawasan pelayaran di bagian-bagian Indonesia yang tertentu, atau aturan-aturan mengenai larangan memasukkan, mengeluarkan, dan meneruskan pengangkutan barang-barang, maka hakim dapat menjatuhkan pidana perampasan atas barang-barang itu, juga dalam hal yang bersalah diserahkan kembali kepada orang tuanya, walinya atau pemeliharanya tanpa pidana apapun.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 41',
                'isi_pasal' => '(1) Perampasan atas barang-barang yang disita sebelumnya, diganti menjadi pidana kurungan, apabila barang-barang itu tidak diserahkan, atau harganya menurut taksiran dalam putusan hakim, tidak dibayar.
        (2) Pidana kurungan pengganti ini paling sedikit satu hari dan paling lama enam bulan.
        (3) Lamanya pidana kurungan pengganti ini dalam putusan hakim ditentukan sebagai berikut: tujuh rupiah lima puluh sen atau kurang dihitung satu hari; jika lebih dari tujuh rupiah lima puluh sen, tiap-tiap tujuh rupiah lima puluh sen dihitung paling banyak satu hari, demikian pula sisanya yang tidak cukup tujuh rupiah lima puluh sen.
        (4) Pasal 31 diterapkan bagi pidana kurungan pengganti ini.
        (5) Jika barang-barang yang dirampas diserahkan, pidana kurungan pengganti ini juga dihapus.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 42',
                'isi_pasal' => 'Segala biaya untuk pidana penjara dan pidana kurungan dipikul oleh negara, dan segala pendapatan dari pidana denda dan perampasan menjadi milik negara.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 43',
                'isi_pasal' => 'Apabila hakim memerintahkan supaya putusan diumumkan berdasarkan kitab undang-undang ini atau aturan-aturan umum lainnya, maka ia harus menetapkan pula bagaimana cara melaksanakan perintah itu atas biaya terpidana.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 44',
                'isi_pasal' => '(1) Barang siapa melakukan perbuatan yang tidak dapat dipertanggungkan kepadanya karena jiwanya cacat dalam pertumbuhan atau terganggu karena penyakit, tidak dipidana.
        (2) Jika ternyata perbuatan itu tidak dapat dipertanggungkan kepada pelakunya karena pertumbuhan jiwanya cacat atau terganggu karena penyakit, maka hakim dapat memerintahkan supaya orang itu dimasukkan ke rumah sakit jiwa, paling lama satu tahun sebagai waktu percobaan.
        (3) Ketentuan dalam ayat 2 hanya berlaku bagi Mahkamah Agung, Pengadilan Tinggi, dan Pengadilan Negeri.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 45',
                'isi_pasal' => 'Dalam hal penuntutan pidana terhadap orang yang belum dewasa karena melakukan suatu perbuatan sebelum umur enam belas tahun, hakim dapat menentukan: memerintahkan supaya yang bersalah dikembalikan kepada orang tuanya, walinya atau pemeliharanya, tanpa pidana apa pun; atau memerintahkan supaya yang bersalah diserahkan kepada pemerintah tanpa pidana apa pun, jika perbuatan merupakan kejahatan atau salah satu pelanggaran berdasarkan pasal-pasal 489, 490, 492, 496, 497, 503 - 505, 514, 517 - 519, 526, 531, 532, 536, dan 540 serta belum lewat dua tahun sejak dinyatakan bersalah karena melakukan kejahatan atau salah satu pelanggaran tersebut di atas, dan putusannya telah menjadi tetap; atau menjatuhkan pidana kepada yang bersalah.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 46',
                'isi_pasal' => '(1) Jika hakim memerintahkan supaya yang bersalah diserahkan kepada pemerintah, maka ia dimasukkan dalam rumah pendidikan negara supaya menerima pendidikan dari pemerintah atau di kemudian hari dengan cara lain, atau diserahkan kepada seorang tertentu yang bertempat tinggal di Indonesia atau kepada sesuatu badan hukum, yayasan atau lembaga amal yang berkedudukan di Indonesia untuk menyelenggarakan pendidikannya, atau di kemudian hari, atas tanggungan pemerintah, dengan cara lain; dalam kedua hal di atas, paling lama sampai orang yang bersalah itu mencapai umur delapan belas tahun.
        (2) Aturan untuk melaksanakan ayat 1 pasal ini ditetapkan dengan undang-undang.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 47',
                'isi_pasal' => '(1) Jika hakim menjatuhkan pidana, maka maksimum pidana pokok terhadap tindak pidananya dikurangi sepertiga.
        (2) Jika perbuatan itu merupakan kejahatan yang diancam dengan pidana mati atau pidana penjara seumur hidup, maka dijatuhkan pidana penjara paling lama lima belas tahun.
        (3) Pidana tambahan dalam pasal 10 butir b, nomor 1 dan 3, tidak dapat diterapkan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 48',
                'isi_pasal' => 'Barang siapa melakukan perbuatan karena pengaruh daya paksa (overmacht), tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 49',
                'isi_pasal' => '(1) Tidak dipidana, barang siapa melakukan perbuatan pembelaan terpaksa untuk diri sendiri maupun untuk orang lain, kehormatan kesusilaan atau harta benda sendiri maupun orang lain, karena ada serangan atau ancaman serangan yang sangat dekat pada saat itu yang melawan hukum.
        (2) Pembelaan terpaksa yang melampaui batas, yang langsung disebabkan oleh keguncangan jiwa yang hebat karena serangan atau ancaman serangan itu, tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 50',
                'isi_pasal' => 'Barang siapa melakukan perbuatan untuk melaksanakan ketentuan undang-undang, tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 51',
                'isi_pasal' => '(1) Barang siapa melakukan perbuatan untuk melaksanakan perintah jabatan yang diberikan oleh penguasa yang berwenang, tidak dipidana.
        (2) Perintah jabatan tanpa wewenang, tidak menyebabkan hapusnya pidana, kecuali jika yang diperintah, dengan itikad baik mengira bahwa perintah diberikan dengan wewenang dan pelaksanaannya termasuk dalam lingkungan pekerjaannya.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 52',
                'isi_pasal' => 'Bilamana seorang pejabat karena melakukan perbuatan pidana melanggar suatu kewajiban khusus dari jabatannya, atau pada waktu melakukan perbuatan pidana memakai kekuasaan, kesempatan atau sarana yang diberikan kepadanya karena jabatannya, pidananya dapat ditambah sepertiga.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 52a',
                'isi_pasal' => 'Bilamana pada waktu melakukan kejahatan digunakan bendera kebangsaan Republik Indonesia, pidana untuk kejahatan tersebut ditambah sepertiga.'
            ],
            // BAB IV PERCOBAAN
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 53',
                'isi_pasal' => '(1) Mencoba melakukan kejahatan dipidana, jika niat untuk itu telah ternyata dari adanya permulaan pelaksanaan, dan tidak selesainya pelaksanaan itu, bukan semata-mata disebabkan karena kehendaknya sendiri.
        (2) Maksimum pidana pokok terhadap kejahatan, dalam hal percobaan dikurangi sepertiga.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 54',
                'isi_pasal' => 'Mencoba melakukan pelanggaran tidak dipidana.'
            ],

            // BAB V PENYERTAAN DALAM TINDAK PIDANA
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 55',
                'isi_pasal' => '(1) Dipidana sebagai pelaku tindak pidana:
        1. mereka yang melakukan, yang menyuruh melakukan, dan yang turut serta melakukan perbuatan;
        2. mereka yang dengan memberi atau menjanjikan sesuatu dengan menyalahgunakan kekuasaan atau martabat, dengan kekerasan, ancaman atau penyesatan, atau dengan memberi kesempatan, sarana atau keterangan, sengaja menganjurkan orang lain supaya melakukan perbuatan.
        (2) Terhadap penganjur, hanya perbuatan yang sengaja dianjurkan sajalah yang diperhitungkan, beserta akibat-akibatnya.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 56',
                'isi_pasal' => 'Dipidana sebagai pembantu kejahatan:
        1. mereka yang sengaja memberi bantuan pada waktu kejahatan dilakukan;
        2. mereka yang sengaja memberi kesempatan, sarana atau keterangan untuk melakukan kejahatan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 57',
                'isi_pasal' => '(1) Dalam hal pembantuan, maksimum pidana pokok terhadap kejahatan, dikurangi sepertiga.
        (2) Jika kejahatan diancam dengan pidana mati atau pidana penjara seumur hidup, dijatuhkan pidana penjara paling lama lima belas tahun.
        (3) Pidana tambahan bagi pembantuan sama dengan kejahatannya sendiri.
        (4) Dalam menentukan pidana bagi pembantu, yang diperhitungkan hanya perbuatan yang sengaja dipermudah atau diperlancar olehnya, beserta akibat-akibatnya.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 58',
                'isi_pasal' => 'Dalam menggunakan aturan-aturan pidana, keadaan-keadaan pribadi seseorang, yang menghapuskan, mengurangi atau memberatkan pengenaan pidana, hanya diperhitungkan terhadap pembuat atau pembantu yang bersangkutan itu sendiri.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 59',
                'isi_pasal' => 'Dalam hal-hal di mana karena pelanggaran ditentukan pidana terhadap pengurus, anggota-anggota badan pengurus atau komisaris-komisaris, maka pengurus, anggota badan pengurus atau komisaris yang ternyata tidak ikut campur melakukan pelanggaran tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 60',
                'isi_pasal' => 'Membantu melakukan pelanggaran tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 61',
                'isi_pasal' => '(1) Mengenai kejahatan yang dilakukan dengan percetakan, penertiban selaku demikian tidak dituntut apabila dalam barang cetakkan disebut nama dan tempat tinggalnya, sedangkan pembuatnya dikenal, atau setelah dimulai penuntutan, pada waktu ditegur pertama kali lalu diberitahukan kepada penerbit.
        (2) Aturan ini tidak berlaku jika pelaku pada saat barang cetakkan terbit, tidak dapat dituntut atau sudah menetap di luar Indonesia.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 62',
                'isi_pasal' => '(1) Mengenai kejahatan yang dilakukan dengan percetakan, pencetaknya selaku demikian tidak dituntut apabila dalam barang cetakkan disebut nama dan tempat tinggalnya, sedangkan orang yang menyuruh mencetak dikenal, atau setelah dimulai penuntutan, pada waktu ditegur pertama kali lalu diberitahukan oleh pencetak.
        (2) Aturan ini tidak berlaku, jika orang yang menyuruh mencetak pada saat barang cetakkan terbit, tidak dapat dituntut atau sudah menetap di luar Indonesia.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 63',
                'isi_pasal' => '(1) Jika suatu perbuatan masuk dalam lebih dari satu aturan pidana, maka yang dikenakan hanya salah satu di antara aturan-aturan itu; jika berbeda-beda, yang dikenakan yang memuat ancaman pidana pokok yang paling berat.
        (2) Jika suatu perbuatan masuk dalam suatu aturan pidana yang umum, diatur pula dalam aturan pidana yang khusus, maka hanya yang khusus itulah yang diterapkan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 64',
                'isi_pasal' => '(1) Jika antara beberapa perbuatan, meskipun masing-masing merupakan kejahatan atau pelanggaran, ada hubungannya sedemikian rupa sehingga harus dipandang sebagai satu perbuatan berlanjut, maka hanya diterapkan satu aturan pidana; jika berbeda-beda, yang diterapkan yang memuat ancaman pidana pokok yang paling berat.
        (2) Demikian pula hanya dikenakan satu aturan pidana, jika orang dinyatakan bersalah melakukan pemalsuan atau perusakan mata uang, dan menggunakan barang yang dipalsu atau yang dirusak itu.
        (3) Akan tetapi, jika orang yang melakukan kejahatan-kejahatan tersebut dalam pasal-pasal 364, 373, 379, dan 407 ayat 1, sebagai perbuatan berlanjut dan nilai kerugian yang ditimbulkan jumlahnya melebihi dari tiga ratus tujuh puluh lima rupiah, maka ia dikenakan aturan pidana tersebut dalam pasal 362, 372, 378, dan 406.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 65',
                'isi_pasal' => '(1) Dalam hal perbarengan beberapa perbuatan yang harus dipandang sebagai perbuatan yang berdiri sendiri sehingga merupakan beberapa kejahatan, yang diancam dengan pidana pokok yang sejenis, maka dijatuhkan hanya satu pidana.
                (2) Maksimum pidana yang dijatuhkan ialah jumlah maksimum pidana yang diancam terhadap perbuatan itu, tetapi boleh lebih dari maksimum pidana yang terberat ditambah sepertiga.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 66',
                'isi_pasal' => '(1) Dalam hal perbarengan beberapa perbuatan yang masing-masing harus dipandang sebagai perbuatan yang berdiri sendiri sehingga merupakan beberapa kejahatan, yang diancam dengan pidana pokok yang tidak sejenis, maka dijatuhkan pidana atas tiap-tiap kejahatan, tetapi jumlahnya tidak boleh melebihi maksimum pidana yang terberat ditambah sepertiga.
                (2) Pidana denda adalah hal itu dihitung menurut lamanya maksimum pidana kurungan pengganti yang ditentukan untuk perbuatan itu.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 67',
                'isi_pasal' => 'Jika orang dijatuhi pidana mati atau pidana penjara seumur hidup, di samping itu tidak boleh dijatuhkan pidana lain lagi kecuali pencabutan hak-hak tertentu, dan pengumuman putusan hakim.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 68',
                'isi_pasal' => '(1) Berdasarkan hal-hal dalam pasal 65 dan 66, tentang pidana tambahan berlaku aturan sebagai berikut:
                1. pidana-pidana pencabutan hak yang sama dijadikan satu, yang lamanya paling sedikit dua tahun dan paling banyak lima tahun melebihi pidana pokok atau pidana-pidana pokok yang dijatuhkan. Jika pidana pokok hanya pidana denda saja, maka lamanya pencabutan hak paling sedikit dua tahun dan paling lama lima tahun;
                2. pidana-pidana pencabutan hak yang berlainan dijatuhkan sendiri-sendiri tanpa dikurangi;
                3. pidana-pidana perampasan barang-barang tertentu, begitu pula halnya dengan pidana kurungan pengganti karena barang-barang tidak diserahkan, dijatuhkan sendiri-sendiri tanpa dikurangi.
                (2) pidana kurungan-kurungan pengganti jumlahnya tidak boleh melebihi delapan bulan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 69',
                'isi_pasal' => '(1) Perbandingan beratnya pidana pokok yang tidak sejenis ditentukan menurut urut-urutan dalam pasal 10.
                (2) Jika hakim memilih antara beberapa pidana pokok, maka dalam perbandingan hanya terberatlah yang dipakai.
                (3) Perbandingan beratnya pidana-pidana pokok yang sejenis ditentukan menurut maksimumnya masing-masing.
                (4) Perbandingan lamanya pidana-pidana pokok yang sejenis ditentukan menurut maksimumnya masing-masing.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 70',
                'isi_pasal' => '(1) Jika ada perbarengan seperti yang dimaksudkan dalam pasal 65 dan 66, baik perbarengan pelanggaran dengan kejahatan, maupun pelanggaran dengan pelanggaran, maka untuk tiap-tiap pelanggaran dijatuhkan pidana sendiri-sendiri tanpa dikurangi.
                (2) Mengenai pelanggaran, jumlah lamanya pidana kurungan dan pidana kurungan pengganti paling banyak satu tahun empat bulan, sedangkan jumlah lamanya pidana kurungan pengganti, paling banyak delapan bulan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 70 bis',
                'isi_pasal' => 'Ketika menerapkan pasal-pasal 65, 66, dan 70, kejahatan-kejahatan berdasarkan pasal-pasal 302 ayat 1, 352, 364, 373,379, dan 482 dianggap sebagai pelanggaran, dengan pengertian jika dijatuhkan pidana-pidana penjara atas kejahatan-kejahatan itu, jumlah paling banyak delapan bulan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 71',
                'isi_pasal' => 'Jika seseorang telah dijatuhi pidana, kemudian dinyatakan bersalah lagi karena melakukan kejahatan atau pelanggaran lain sebelum ada putusan pidana itu, maka pidana yang dahulu diperhitungkan pada pidana yang akan dijatuhkan dengan menggunakan aturan-aturan dalam bab ini mengenai hal perkara-perkara diadili pada saat yang sama.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 72',
                'isi_pasal' => '(1) Selama orang yang terkena kejahatan yang hanya boleh dituntut atas pengaduan, dan orang itu umurnya belum cukup enam belas tahun dan lagi belum dewasa, atau selama ia berada di bawah pengampuan yang disebabkan oleh hal lain daripada keborosan, maka wakilnya yang sah dalam perkara perdata yang berhak mengadu;
                (2) Jika tidak ada wakil, atau wakil itu sendiri yang harus diadukan, maka penuntutan dilakukan atas pengaduan wali pengawas atau pengampu pengawas, atau majelis yang menjadi wali pengawas atau pengampu pengawas; juga mungkin atas pengaduan istrinya atau seorang keluarga sedarah dalam garis lurus, atau jika itu tidak ada, atas pengaduan seorang keluarga sedarah dalam garis menyimpang sampai derajat ketiga.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 73',
                'isi_pasal' => 'Jika yang terkena kejahatan meninggal di dalam tenggang waktu yang ditentukan dalam pasal berikut maka tanpa memperpanjang tenggang itu, penuntutan dilakukan atas pengaduan orang tuanya, anaknya, atau suaminya (istrinya) yang masih hidup kecuali kalau ternyata bahwa yang meninggal tidak menghendaki penuntutan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 74',
                'isi_pasal' => '(1) Pengaduan hanya boleh diajukan dalam waktu enam bulan sejak orang yang berhak mengadu mengetahui adanya kejahatan, jika bertempat tinggal di Indonesia, atau dalam waktu sembilan bulan jika bertempat tinggal di luar Indonesia.
                (2) Jika yang terkena kejahatan berhak mengadu pada saat tenggang waktu tersebut dalam ayat 1 belum habis, maka setelah saat itu, pengaduan masih boleh diajukan hanya selama sisa yang masih kurang pada tenggang waktu tersebut.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 75',
                'isi_pasal' => 'Orang yang mengajukan pengaduan, berhak menarik kembali dalam waktu tiga bulan setelah pengaduan diajukan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 76',
                'isi_pasal' => '(1) Kecuali dalam hal putusan hakim masih mungkin diulangi, orang tidak boleh dituntut dua kali karena perbuatan yang oleh hakim Indonesia terhadap dirinya telah diadili dengan putusan yang menjadi tetap. Dalam artian hakim Indonesia, termasuk juga hakim pengadilan swapraja dan adat, di tempat-tempat yang mempunyai pengadilan-pengadilan tersebut.
                (2) Jika putusan yang menjadi tetap itu berasal dari hakim lain, maka terhadap orang itu dan karena tindak pidana itu pula, tidak boleh diadakan penuntutan dalam hal:
                1. putusan berupa pembebasan dari tuduhan atau lepas dari tuntutan hukum;
                2. putusan berupa pemidanaan dan telah dijalani seluruhnya atau telah diberi ampun atau wewenang untuk menjalankannya telah hapus karena daluwarsa.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 77',
                'isi_pasal' => 'Kewenangan menuntut pidana hapus, jika tertuduh meninggal dunia.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 78',
                'isi_pasal' => '(1) Kewenangan menuntut pidana hapus karena daluwarsa:
                1. mengenai semua pelanggaran dan kejahatan yang dilakukan dengan percetakan sesudah satu tahun;
                2. mengenai kejahatan yang diancam dengan pidana denda, pidana kurungan, atau pidana penjara paling lama tiga tahun, sesudah enam tahun;
                3. mengenai kejahatan yang diancam dengan pidana penjara lebih dari tiga tahun, sesudah dua belas tahun;
                4. mengenai kejahatan yang diancam dengan pidana mati atau pidana penjara seumur hidup, sesudah delapan belas tahun.
                (2) Bagi orang yang pada saat melakukan perbuatan umurnya belum delapan belas tahun, masing-masing tenggang daluwarsa di atas dikurangi menjadi sepertiga.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 79',
                'isi_pasal' => 'Tenggang daluwarsa mulai berlaku pada hari sesudah perbuatan dilakukan, kecuali dalam hal-hal berikut:
                1. mengenai pemalsuan atau perusakan mata uang, tenggang mulai berlaku pada hari sesudah barang yang dipalsu atau mata uang yang dirusak digunakan;
                2. mengenai kejahatan dalam pasal-pasal 328, 329, 330, dan 333, tenggang dimulai pada hari sesudah orang yang langsung terkena oleh kejahatan dibebaskan atau meninggal dunia;
                3. mengenai pelanggaran dalam pasal 556 sampai dengan pasal 558a, tenggang dimulai pada hari sesudah daftar-daftar yang memuat pelanggaran-pelanggaran itu, menurut aturan-aturan umum yang menentukan bahwa register-register catatan sipil harus dipindah ke kantor panitera suatu pengadilan, dipindah ke kantor tersebut.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 80',
                'isi_pasal' => '(1) Tiap-tiap tindakan penuntutan menghentikan daluwarsa, asal tindakan itu diketahui oleh orang yang dituntut, atau telah diberitahukan kepadanya menurut cara yang ditentukan dalam aturan-aturan umum.
                (2) Sesudah dihentikan, dimulai tenggang daluwarsa baru.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 81',
                'isi_pasal' => 'Penundaan penuntutan pidana berhubung dengan adanya perselisihan prayudisial, menunda daluwarsa.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 82',
                'isi_pasal' => '(1) Kewenangan menuntut pelanggaran yang diancam dengan pidana denda saja menjadi hapus, kalau dengan suka rela dibayar maksimum denda dan biaya-biaya yang telah dikeluarkan kalau penuntutan telah dimulai, atas kuasa pejabat yang ditunjuk untuk itu oleh aturan-aturan umum, dan dalam waktu yang ditetapkan olehnya.
                (2) Jika di samping pidana denda ditentukan perampasan, maka barang yang dikenai perampasan harus diserahkan pula, atau harganya harus dibayar menurut taksiran pejabat dalam ayat 1.
                (3) Dalam hal-hal pidana diperberat karena pengulangan, pemberatan itu tetap berlaku sekalipun kewenangan menuntut pidana terhadap pelanggaran yang dilakukan lebih dahulu telah hapus berdasarkan ayat 1 dan ayat 2 pasal ini.
                (4) Ketentuan-ketentuan dalam pasal ini tidak berlaku bagi orang yang belum dewasa, yang pada saat melakukan perbuatan belum berumur enam belas tahun.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 83',
                'isi_pasal' => 'Kewenangan menjalankan pidana hapus jika terpidana meninggal dunia.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 84',
                'isi_pasal' => '(1) Kewenangan menjalankan pidana hapus karena daluwarsa.
                (2) Tenggang daluwarsa mengenai semua pelanggaran lamanya dua tahun, mengenai kejahatan yang dilakukan dengan sarana percetakan lamanya lima tahun, dan mengenai kejahatan-kejahatan lainnya lamanya sama dengan tenggang daluwarsa bagi penuntutan pidana, ditambah sepertiga.
                (3) Bagaimanapun juga, tenggang daluwarsa tidak boleh kurang dari lamanya pidana yang dijatuhkan.
                (4) Wewenang menjalankan pidana mati tidak daluwarsa.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 85',
                'isi_pasal' => '(1) Tenggang daluwarsa mulai berlaku pada esok harinya setelah putusan hakim dapat dijalankan.
                (2) Jika seorang terpidana melarikan diri selama menjalani pidana, maka pada esok harinya setelah melarikan diri itu mulai berlaku tenggang daluwarsa baru. Jika suatu pelepasan bersyarat dicabut, maka pada esok harinya setelah pencabutan, mulai berlaku tenggang daluwarsa baru.
                (3) Tenggang daluwarsa tertunda selama penjalanan pidana ditunda menurut perintah dalam suatu peraturan umum, dan juga selama terpidana dirampas kemerdekaannya, meskipun perampasan kemerdekaan itu berhubung dengan pemidanaan lain.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 86',
                'isi_pasal' => 'Apabila disebut kejahatan, baik dalam arti kejahatan pada umumnya maupun dalam arti suatu kejahatan tertentu, maka di situ termasuk pembantuan dan percobaan melakukan kejahatan, kecuali jika dinyatakan sebaliknya oleh suatu aturan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 87',
                'isi_pasal' => 'Dikatakan ada makar untuk melakukan suatu perbuatan, apabila niat untuk itu telah ternyata dari adanya permulaan pelaksanaan, seperti dimaksud dalam pasal 53.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 88',
                'isi_pasal' => 'Dikatakan ada permufakatan jahat, apabila dua orang atau lebih telah sepakat akan melakukan kejahatan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 88 bis',
                'isi_pasal' => 'Dengan penggulingan pemerintahan dimaksud meniadakan atau mengubah secara tidak sah bentuk pemerintahan menurut Undang-Undang Dasar.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 89',
                'isi_pasal' => 'Membuat orang pingsan atau tidak berdaya disamakan dengan menggunakan kekerasan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 90',
                'isi_pasal' => 'Luka berat berarti:
                - jatuh sakit atau mendapat luka yang tidak memberi harapan akan sembuh sama sekali, atau yang menimbulkan bahaya maut;
                - tidak mampu terus-menerus untuk menjalankan tugas jabatan atau pekerjaan pencarian;
                - kehilangan salah satu pancaindera;
                - mendapat cacat berat;
                - menderita sakit lumpuh;
                - terganggunya daya pikir selama empat minggu lebih;
                - gugur atau matinya kandungan seorang perempuan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 91',
                'isi_pasal' => '(1) Dalam kekuasaan bapak dicakup pula kekuasaan kepala keluarga.
                (2) Dengan orang tua, dimaksud pula kepala keluarga.
                (3) Dengan bapak, dimaksud pula orang yang menjalankan kekuasaan yang sama dengan bapak.
                (4) Dengan anak, dimaksud pula orang yang ada di bawah kekuasaan yang sama dengan kekuasaan bapak.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 92',
                'isi_pasal' => '(1) Yang disebut pejabat, termasuk juga orang-orang yang dipilih dalam pemilihan yang diadakan berdasarkan aturan-aturan umum, begitu juga orang-orang yang bukan karena pemilihan, menjadi anggota badan pembentuk undang-undang, badan pemerintahan, atau badan perwakilan rakyat, yang dibentuk oleh pemerintah atau atas nama pemerintah; begitu juga semua anggota dewan subak, dan semua kepala rakyat Indonesia asli dan kepala golongan Timur Asing, yang menjalankan kekuasaan yang sah.
                (2) Yang disebut pejabat dan hakim termasuk juga hakim wasit; yang disebut hakim termasuk juga orang-orang yang menjalankan peradilan administratif, serta ketua-ketua dan anggota-anggota pengadilan agama.
                (3) Semua anggota Angkatan Perang juga dianggap sebagai pejabat.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 92 bis',
                'isi_pasal' => 'Yang disebut pengusaha ialah tiap-tiap orang yang menjalankan perusahaan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 93',
                'isi_pasal' => '(1) Yang disebut nakoda ialah orang yang memegang kekuasaan di kapal atau yang mewakilinya.
                (2) Yang disebut penumpang ialah semua orang yang ada di kapal, kecuali nakoda.
                (3) Yang disebut anak buah kapal ialah semua perwira atau kelasi yang ada di dalam kapal.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 94',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No.1 Tahun 1946, pasal VIII, butir 11.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 95',
                'isi_pasal' => 'Yang disebut kapal Indonesia ialah kapal yang mempunyai surat laut atau pas kapal, atau surat izin sebagai pengganti sementara menurut aturan-aturan umum mengenai surat laut dan pas kapal di Indonesia.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 95a',
                'isi_pasal' => '(1) Yang dimaksud dengan pesawat udara Indonesia adalah pesawat udara yang didaftarkan di Indonesia.
                (2) Termasuk pula pesawat udara Indonesia adalah pesawat udara asing yang disewa tanpa awak pesawat dan dioperasikan oleh perusahaan penerbangan Indonesia.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 95b',
                'isi_pasal' => 'Yang dimaksud dengan dalam penerbangan adalah sejak saat pintu luar pesawat udara ditutup setelah naiknya penumpang (embarkasi) sampai saat pintu dibuka untuk penurunan penumpang (diembarkasi). Dalam hal terjadi pendaratan darurat, penerbangan dianggap terus berlangsung sampai saat penguasa yang berwenang mengambil alih tanggung jawab atas pesawat udara dan barang yang ada di dalamnya.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 95c',
                'isi_pasal' => 'Yang dimaksud dengan dalam dinas adalah jangka waktu sejak pesawat udara disiapkan oleh awak darat atau oleh awak pesawat untuk penerbangan tertentu, hingga setelah 24 jam lewat sesudah setiap pendaratan.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 96',
                'isi_pasal' => '(1) Yang disebut musuh termasuk juga pemberontak. Begitu juga termasuk di situ negara atau kekuasaan yang akan menjadi lawan perang.
                (2) Yang disebut perang termasuk juga permusuhan dengan daerah-daerah swapraja, begitu juga perang saudara.
                (3) Yang disebut masa perang termasuk juga waktu selama perang sedang mengancam. Begitu juga dikatakan masih ada masa perang, segera sesudah diperintahkan mobilisasi Angkatan Perang dan selama mobilisasi itu berlaku.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 97',
                'isi_pasal' => 'Yang disebut hari adalah waktu selama dua puluh empat jam; yang disebut bulan adalah waktu selama tiga puluh hari.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 98',
                'isi_pasal' => 'Yang disebut waktu malam yaitu waktu antara matahari terbenam dan matahari terbit.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 99',
                'isi_pasal' => 'Yang disebut memanjat termasuk juga masuk melalui lubang yang memang sudah ada, tetapi bukan untuk masuk atau masuk melalui lubang di dalam tanah yang dengan sengaja digali; begitu juga menyeberangi selokan atau parit yang digunakan sebagai batas penutup.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 100',
                'isi_pasal' => 'Yang disebut anak kunci palsu termasuk juga segala perkakas yang tidak dimaksud untuk membuka kunci.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 101',
                'isi_pasal' => 'Yang disebut ternak yaitu semua binatang yang berkuku satu, binatang memamah biak, dan babi.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 101 bis',
                'isi_pasal' => '(1) Yang dimaksud bangunan listrik yaitu bangunan-bangunan yang gunanya untuk membangkitkan, mengalirkan, mengubah, atau menyerahkan tenaga listrik; begitu pula alat-alat yang berhubungan dengan itu, yaitu alat-alat penjaga keselamatan, alat-alat pemasang, alat-alat pendukung, dan alat-alat peringatan.
                (2) Dengan bangunan-bangunan telegrap dan telepon tidak dimaksudkan bangunan listrik.'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 102',
                'isi_pasal' => 'Ditiadakan dengan Staatsblad 1920 No. 382'
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 103',
                'isi_pasal' => 'Ketentuan-ketentuan dalam Bab I sampai Bab VIII buku ini juga berlaku bagi perbuatan-perbuatan yang oleh ketentuan perundang-undangan lainnya diancam dengan pidana, kecuali jika oleh undang-undang ditentukan lain.'
            ],
            // Buku Kedua Kejahatan
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 104',
                'isi_pasal' => 'Makar dengan maksud untuk membunuh, atau merampas kemerdekaan, atau meniadakan kemampuan Presiden atau Wakil Presiden memerintah, diancam dengan pidana mati atau pidana penjara seumur hidup atau pidana penjara sementara paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 105',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal VIII, butir 13.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 106',
                'isi_pasal' => 'Makar dengan maksud supaya seluruh atau sebagian dari wilayah negara, diancam dengan pidana penjara seumur hidup atau pidana penjara sementara paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 107',
                'isi_pasal' => '(1) Makar dengan maksud untuk menggulingkan pemerintah, diancam dengan pidana penjara paling lama lima belas tahun. (2) Para pemimpin dan pengatur makar tersebut dalam ayat 1, diancam dengan pidana penjara seumur hidup atau pidana penjara sementara paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 108',
                'isi_pasal' => '(1) Barang siapa bersalah karena pemberontakan, diancam dengan pidana penjara paling lama lima belas tahun: 1. orang yang melawan pemerintah Indonesia dengan senjata; 2. orang yang dengan maksud melawan Pemerintah Indonesia menyerbu bersama-sama atau menggabungkan diri pada gerombolan yang melawan Pemerintah dengan senjata. (2) Para pemimpin dan para pengatur pemberontakan diancam dengan penjara seumur hidup atau pidana penjara sementara paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 109',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan S. 1930 No. 31.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 110',
                'isi_pasal' => '(1) Permufakatan jahat untuk melakukan kejahatan menurut pasal 104, 106, 107, dan 108 diancam berdasarkan ancaman pidana dalam pasal-pasal tersebut. (2) Pidana yang sama diterapkan terhadap orang-orang yang dengan maksud berdasarkan pasal 104, 106, dan 108, mempersiapkan atau memperlancar kejahatan: 1. berusaha menggerakkan orang lain untuk melakukan, menyuruh melakukan atau turut serta melakukan agar memberi bantuan pada waktu melakukan atau memberi kesempatan, sarana atau keterangan untuk melakukan kejahatan; 2. berusaha memperoleh kesempatan, sarana atau keterangan untuk melakukan kejahatan bagi diri sendiri atau orang lain; 3. memiliki persediaan barang-barang yang diketahuinya berguna untuk melakukan kejahatan; 4. mempersiapkan atau memiliki rencana untuk melaksanakan kejahatan yang bertujuan untuk memberitahukan kepada orang lain; 5. berusaha mencegah, merintangi atau menggagalkan tindakan yang diadakan pemerintah untuk mencegah atau menindas pelaksanaan kejahatan. (3) Barang-barang sebagaimana dimaksud dalam butir 3 ayat sebelumnya, dapat dirampas. (4) Tidak dipidana barang siapa yang ternyata bermaksud hanya mempersiapkan atau memperlancar perubahan ketatanegaraan dalam artian umum. (5) Jika dalam salah satu hal seperti yang dimaksud dalam ayat 1 dan 2 pasal ini, kejahatan sungguh terjadi, pidananya dapat dilipatkan dua kali.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 111',
                'isi_pasal' => '(1) Barang siapa mengadakan hubungan dengan negara asing dengan maksud menggerakkannya untuk melakukan perbuatan permusuhan atau perang terhadap negara, memperkuat niat mereka, menjanjikan bantuan atau membantu mempersiapkan mereka untuk melakukan perbuatann permufakatan atua perang terhadap negara, diancam dengan pidana penjara paling lama lima belas tahun. (2) Jika perbuatan permusuhan dilakukan atau terjadi perang, diancam dengan pidana mati atua pidana penjara seumur hidup atau pidana penjara sementara paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 111 bis',
                'isi_pasal' => '(1) Dengan pidana penjara paling lama enam tahun diancam: 1. barang siapa mengadakan hubungan dengan orang atau badan yang berkedudukan di luar Indonesia, dengan maksud untuk menggerakan orang atau badan itu supaya membantu mempersiapkan, memperlancar atau menggerakkan untuk menggulingkan pemerintah, untuk memperkuat niat orang atau badan itu atua menjanjikan atau memberi bantuan kepada orang atau badan itu atau menyiapkan, memperlancar atau menggerakkan penggulingan pemerintah; 2. barang siapa memaksudkan suatu benda yang dapat digunakan untuk memberi bantuan material dalam mempersiapkan, memperlancar atau menggerakkan penggulingan pemerintah, sedangkan diketahuinya atau ada alasan kuat untuk memnduga bahwa benda tersebut akan dipergunakan untuk perbuatan tersebut; 3. orang yang mempunyai atau mengadakan perjanjian mengenai suatu benda yang dapat dipergunakan untuk memberikan bantuan material dalam mempersiapkan, memperlancar atau menggerakkan penggulingan pemerintah, sedangkan diketahuinya atau ada alasan baginya untuk menduga bahwa benda itu akan dipergunakan untuk perbuatan tersebut atau benda itu atau barang lainsebagai penggantinya, dimaksudkan dengan tujuan tersebut atau untuk untuk diperuntukkan bagi tujuan itu oleh orang atau benda yang berkedudukan di luar Indonesia. (2) Benda-benda yang dengan mana atau yang ada hubungan dengan ayat 1 ke-2 dan ke-3 yang dipakai untuk melakukan kejahatan, dapat dirampas.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 112',
                'isi_pasal' => 'Barang siapa dengan sengaja mengumumkan surat-surat, berita-berita atau keterangan-keterangan yang diketahuinya bahwa harus dirahasiakan untuk kepentingan negara, atau dengan sengaja memberitahukan atau memberikannya kepada negara asing, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 113',
                'isi_pasal' => '(1) Barang siapa dengan sengaja, untuk seluruhnya atau sebagian mengumumkan, atau memberitahukan maupun menyerahkan kepada orang yang tidak berwenang mengetahui, surat-surat, peta-peta, rencana-rencana, gambar-gambar atau benda-benda yang bersifat rahasia yang bersangkutan dengan pertahanan atau keamanan Indonesia terhadap serangan dari luar, yang ada padanya atau yang isinya, bentuknya atau susunanya benda-benda itu diketahui olehnya, diancam dengan pidana penjara paling lama empat tahun. (2) Jika surat-surat atau benda-benda ada pada yang bersalah, atau pengetahuannya tentang itu karena pencariannya, pidananya dapat ditambah sepertiga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 114',
                'isi_pasal' => 'Barang siapa karena kesalahannya (kealpaannya) menyebabkan surat-surat atau benda-benda rahasia sebagaimana yang dimaksudkan dalam pasal 113 harus menjadi tugasnya untuk menyimpan atau menaruhnya, bentuk atau susunannya atau seluruh atau sebagian diketahui oleh umum atau dikuasai atau diketahui oleh orang lain (atau) tidak berwenang mengetahui, diancam dengan pidana penjara paling lama satu tahun enam bulan atau pidana kurungan paling lama satu tahun atau pidana denda paling tinggi empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 115',
                'isi_pasal' => 'Barang siapa melihat atau membaca surat-surat atau benda-benda rahasia sebagaimana dimaksud dalam pasal 113, untuk seluruhnya atau sebagian, sedangkan diketahui atau selayaknya harus diduganya bahwa benda-benda itu tidak dimaksud untuk diketahui olehnya, begitu pula jika membuat atau menyuruh membuat salinan atau ikhtisar dengan huruf atau dalam bahasa apa pun juga, membuat atau menyuruh buat teraan, gambaran atau jika tidak menyerahkan benda-benda itu kepada pejabat kehakiman, kepolisian atau pamong praja, dalam hal benda-benda itu ke tangannya, diancam dengan pidana penjara paling lama tiga tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 116',
                'isi_pasal' => 'Permufakatan jahat untuk melakukan kejahatan sebagaimana dimaksud dalam pasal 113 dan 115, diancam dengan pidana penjara paling lama satu tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 117',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama enam bulan atau denda paling banyak empat ribu lima ratus rupiah, barang siapa tanpa wenang: 1. dengan sengaja memasuki bangunan Angkatan Darat atau Angkatan Laut, atau memasuki kapal perang melalui jalan yang bukan jalan biasa; 2. dengan sengaja memasuki daerah, yang oleh Presiden atau atas namanya, atau oleh penguasa tentara ditentukan sebagai daerah tentara yang dilarang; 3. dengan sengaja membuat, mengumpulkan, mempunyai, menyimpan, menyembunyikan atau mengangkut gambar potret atau gambar tangan maupun keterangan-keterangan atau petunjuk-petunjuk lain mengenai daerah seperti tersebut dalam pasal ke-2, beserta segala sesuatu yang ada disitu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 118',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama dua tahun atau denda sembilan ribu rupiah, barang siapa tanpa wenang, sengaja membuat, mengumpulkan, mempunyai, menyimpan, menyembunyikan atau petunjuk-petunjuk lain mengenai sesuatu hal yang bersangkutan dengan kepentingan tentara.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 119',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama satu tahun: 1. barang siapa memberi pondokan kepada orang lain, yang diketahuinya mempunyai niat atau sedang mencoba untuk mengetahui benda-benda rahasia seperti tersebut dalam pasal 113, padahal tidak wenang untuk itu, atau mempunyai niat atau sedang mencoba untuk mengetahui letak, bentuk, susunan, persenjataan, perbekalan, perlengkapan mesin, atau kekuatan orang dari bangunan pertahanan atau sesuatu hal lain yang bersangkutan dengan kepentingan tentara; 2. barang siapa menyembunyikan benda-benda yang diketahuinya bahwa dengan cara apapun juga, akan diperlukan dalam melaksanakan niat seperti tersebut pada ke-1.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 120',
                'isi_pasal' => 'Jika kejahatan tersebut pasal 113, 115, 117, 118, 119 dilakukan dengan akal curang seperti penyesatan, menyamakan, pemakaian nama atau kedudukan palsu, atau dengan menawarkan atau menerima, membayangkan atau menjanjikan hadiah, keuntungan atau upah dalam bentuk apapun juga, atau dilakukan dengan kekerasan atau ancaman kekerasan, maka pidana hilang kemerdekaan dapat diperberat lipat dua.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 121',
                'isi_pasal' => 'Barang siapa ditugaskan pemerintah untuk berunding dengan suatu negara asing, dengan sengaja merugikan negara, diancam dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 122',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tujuh tahun: 1. barang siapa dalam masa perang yang tidak menyangkut Indonesia, dengan sengaja melakukan perbuatan yang membahayakan kenetralan negara, atau dengan sengaja melanggar suatu aturan yang dikeluarkan dan diumumkan oleh pemerintah, khusus untuk mempertahankan kenetralan tersebut; 2. barang siapa dalam masa perang dengan sengaja melanggar aturan yang dikeluarkan dan diumumkan oleh pemerintah guna keselamatan negara.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 123',
                'isi_pasal' => 'Seorang warga negara Indonesia yang dengan suka rela masuk tentara negara asing, padahal ia mengetahui bahwa negara itu sedang perang dengan negara Indonesia, atau akan menghadapi perang dengan Indonesia, diancam dalam hal terakhir jika pecah perang, dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 124',
                'isi_pasal' => '(1) Barang siapa dalam masa perang dengan sengaja memberi bantuan kepada musuh atau merugikan negara terhadap musuh, diancam dengan pidana penjara lima belas tahun. (2) Diancam dengan pidana penjara seumur hidup atau selama waktu tertentu atau paling lama dua puluh tahun jika si pembuat: 1. memberitahukan atau memberikan kepada musuh peta, rencana, gambar, atau penulisan mengenai bangunan-bangunan tentara; 2. menjadi mata-mata musuh, atau memberikan pondokan kepadanya. (3) Pidana mati atau pidana seumur hidup atau selama waktu tertentu paling lama dua puluh tahun dijatuhkan jika si pembuat: 1. memberitahukan atau menyerahkan kepada musuh, menghancurkan atau merusakkan sesuatu tempat atau pos yang diperkuat atau diduduki, suatu alat perhubungan, gudang persediaan perang, atau kas perang ataupun Angkatan Laut, Angkatan Darat atau bagian daripadanya, merintangi, menghalang-halangi atau menggagalkan suatu untuk menggenangi air atau karya tentara lainnya yang direncanakan atau diselenggarakan untuk menangkis atau menyerang; 2. menyebabkan atau memperlancar timbulnya huru-hara, pemberontakan atau desersi di kalangan Angkatan Perang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 125',
                'isi_pasal' => 'Permufakatan jahat untuk melakukan kejahatan sebagaimana dimaksudkan dalam pasal 124, diancam dengan pidana paling lama enam tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 126',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tujuh tahun barang siapa dalam masa perang, tidak dengan maksud membantu musuh atau merugikan negara sehingga menguntungkan musuh, dengan sengaja: 1. memberikan pondokan kepada mata-mata musuh, menyembunyikannya atau membantunya melarikan diri; 2. menggerakkan atau memperlancar pelarian (desersi) prajurit yang bertugas untuk negara.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 127',
                'isi_pasal' => '(1) Barang siapa dalam masa perang menjalankan tipu muslihat dalam penyerahan barang-barang keperluan Angkatan Laut atau Angkatan Darat, diancam dengan pidana penjara paling lama dua belas tahun. (2) Diancam dengan pidana yang sama barang siapa diserahi mengawasi penyerahan barang-barang, membiarkan tipu muslihat itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 128',
                'isi_pasal' => '(1) Dalam hal pemidanaan berdasarkan kejahatan pasal 104, dapat dipidana pencabutan hak-hak berdasarkan pasal 35 no. 1-5. (2) Dalam hal pemidanaan berdasarkan kejahatan pasal-pasal 106-108, 110-125, dapat dipidana pencabutan hak-hak berdasarkan pasal 35 no. 1-3. (3) Dalam hal pemidanaan berdasarkan kejahatan pasal 127, yang bersalah dapat dilarang menjalankan pencarian yang dijalankannya ketika melakukan kejahatan itu, dicabut hak-hak berdasarkan pasal 35 no. 1-4, dan dapat diperintahkan supaya putusan hakim diumumkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 129',
                'isi_pasal' => 'Pidana-pidana yang berdasarkan terhadap perbuatan-perbuatan dalam pasal-pasal 124-127, diterapkan jika salah satu perbuatan dilakukan terhadap atau bersangkutan dengan negara sekutu dalam perang bersama.'
            ],

            // BAB II KEJAHATAN-KEJAHATAN TERHADAP MARTABAT PRESIDEN DAN WAKIL PRESIDEN
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 130',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal VIII, butir 21.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 131',
                'isi_pasal' => 'Tiap-tiap penyerangan terhadap diri presiden atau Wakil Presiden, yang tidak termasuk dalam ketentuan pidana lain yang lebih berat, diancam dengan pidana penjara paling lama delapan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 132',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal VIII, butir 23.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 133',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal VIII, butir 23.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 134',
                'isi_pasal' => 'Penghinaan dengan sengaja terhadap Presiden atua Wakil Presiden diancam dengan pidana penjara paling lama enam tahun, atau pidana denda paling banyak empat ribu lima ratus ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 135',
                'isi_pasal' => 'Pasal ini ditiadakan bersarkan Undang-undang No. 1 Tahun 1946, pasal VIII, butir 25.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 136',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal VIII butir 25.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 136 bis',
                'isi_pasal' => 'Pengertian penghinaan sebagaimana dimaksud dalam pasal 134 mencakup juga perumusan perbuatan dalam pasal 135, jika itu dilakukan diluar kehadiran yang dihina, baik dengan tingkah laku di muka umum, maupun tidak dimuka umum baik lidsan atau tulisan, namun dihadapan lebih dari empat orang, atau di hadapan orang ketiga, bertentangan dengan kehendaknya dan oleh karena itu merasa tersinggung.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 137',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukan, atau menempelkan di muka umum tulisan atau lukisan yang berisi penghinaan terhadap Presiden atau Wakil Presiden, dengan maksud supaya isi penghinaan diketahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika yang bersalah melakukan kejahatan pada waktu menjalankan pencariannya, dan pada waktu itu belum lewat dua tahun sejak adanya pemidanaan menjadi tetap karena kejahatan semacam itu juga, maka terhadapnya dapat dilarang menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 138',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal VIII, butir 28.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'nomor_pasal' => 'Pasal 139',
                'isi_pasal' => '(1) Ayat ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal VIII, butir 29. (2) Dalam hal pemidanaan berdasarkan perumusan kejahatan dalam pasal 131, dapat dipidana pencabutan hak berdasarkan pasal 35 no. 1-4. (3) Dalam hal pemidanaan berdasarkan perumusan kejahatan dalam pasal 134, dapat dipidana pencabutan hak berdasarkan pasal 35 no. 1-3.'
            ],

            // BAB III KEJAHATAN-KEJAHATAN TERHADAP NEGARA SAHABAT DAN TERHADAP KEPALA NEGARA SAHABAT SERTA WAKILNYA
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 139a',
                'isi_pasal' => 'Makar dengan maksud melepaskan wilayah atau daerah lain dari suatu negara sahabat untuk seluruhnya atau sebagian dari kekuasaan pemerintah yang berkuasa di situ, diancam dengan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 139b',
                'isi_pasal' => 'Makar dengan maksud meniadakan atau mengubah secara tidak sah bentuk pemerintahan negara sahabat atau daerahnya yang lain, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 139c',
                'isi_pasal' => 'Permufakatan jahat untuk melakukan kejahatan sebagaimana dirumuskan dalam pasal-pasal 139a dan 139b, diancam dengan pidana penjara paling lama satu tahun enam bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 140',
                'isi_pasal' => '(1) Makar terhadap nyawa atau kemerdekaan raja yang memerintah atau kepala negara sahabat, diancam dengan pidana penjara paling lama lima belas tahun. (2) Jika makar terhadap nyawa mengakibatkan kematian atau dilakukan dengan rencana terlebih dahulu mengakibatkan kematian, diancam dengan pidana mati atau pidana penjara seumur hidup atau pidana penjara sementara paling lama dua puluh tahun. (3) Jika makar terhadap nyawa dilakukan dengan rencana terlebih dahulu mengakibatkan kematian, diancam dengan pidana mati atau pidana penjara seumur hidup atau pidana penjara sementara paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 141',
                'isi_pasal' => 'Tiap-tiap perbuatan penyerangan terhadap diri raja yang memerintah atau kepala negara sahabat, yang tidak termasuk dalam ketentuan pidana yang lebih berat, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 142',
                'isi_pasal' => 'Penghinaan dengan sengaja terhadap raja yang memerintah atau kepala negara sahabat, diancam dengan pidana penjara paling lama lima tahun atau pidana paling banyak empat ribu lima ratus ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 142a',
                'isi_pasal' => 'Barang siapa menodai bendera kebangsaan negara sahabat diancam dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 143',
                'isi_pasal' => 'Penghinaan yang dilakukan dengan sengaja terhadap orang yang mewakili negara asing di Indonesia, diancam dengan pidana penjara paling lama lima tahun atau pidana denda paling banyak tiga ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 144',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukkan atau menempelkan dimuka umum tulisan atau lukisan yang berisi penghinaan terhadap raja yang memerintah, atau kepala negara sahabat, atau wakil negara asing di Indonesia dalam pangkatnya, dengan maksud supaya penghinaan itu diketahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika yang bersalah melakukan kejahatan itu pada waktu menjalankan pencarianya, dan pada saat itu belum lewat dua tahun sejak ada pemidanaan yang tetap karena kejahatan semacam itu juga, ia dapat dilarang menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 145',
                'isi_pasal' => '(1) Dalam hal pemidanaan berdasarkan perumusan kejahatan dalam pasal 140, dapat dipidanan pencabutan hak berdasarkan pasal 35 no. 1-5. (2) Dalam hal pemidanaan berdasarkan perumusan kejahatan dalam pasal 141, dapat dipidana pencabutan hak berdasarkan pasal 35 no. 1-4. (3) Dalam hal pemidanaan berdasarkan perumusan kejahatan dalam pasal-pasal 139a, 139b, 139c, 142, dan 143, dapat dipidana pencabutan hak berdasarkan pasal 35 no. 1-3.'
            ],
            // BAB IV KEJAHATAN TERHADAP MELAKUKAN KEWAJIBAN DAN HAK KENEGARAAN
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 146',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan membubarkan rapat badan pembentuk undang-undang, badan pemerintahan atau badan perwakilan rakyat, yang dibentuk oleh atau atas nama Pemerintah, atau memaksa badan-badan itu supaya mengambil atau tidak mengambil sesuatu putusan atau mengambil sesuatu putusan atau mengusir ketua atau anggota rapat itu, diancam dengan ancaman penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 147',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan, dengan sengaja merintangi ketua atau anggota badan pembentuk undang-undang, badan pemerintahan atau badan perwakilan rakyat, yang dibentuk oleh atau atas nama Pemerintah, untuk menghadiri rapat badan-badan itu, diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 148',
                'isi_pasal' => 'Barang siapa pada waktu diadakan pemilihan berdasarkan aturan-aturan umum, dengan kekerasan atau ancaman kekerasan, dengan sengaja merintangi seseorang memakai hak pilihnya dengan bebas dan tidak terganggu, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 149',
                'isi_pasal' => '(1) Barang siapa pada waktu diadakan pemilihan berdasarkan aturan-aturan umum, dengan memberi atau menjanjikan sesuatu, menyuap seseorang supaya tidak memakai hak pilihnya atau supaya memakai hak itu menurut cara tertentu, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling lama empat ribu lima ratus rupiah. (2) Pidana yang sama diterapkan kepada pemilih, yang dengan menerima pemberian atau janji, mau disuap.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 150',
                'isi_pasal' => 'Barang siapa pada waktu diadakan pemilihan berdasarkan aturan-aturan umum, melakukan tipu muslihat sehingga suara seorang pemilih menjadi tidak berharga atau menyebabkan orang lain daripada yang dimaksud oleh pemilih yang ditunjuk, diancam dengan pidana penjara paling lama sembilan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 151',
                'isi_pasal' => 'Barang siapa memakai nama orang lain untuk ikut dalam pemilihan berdasarkan aturan-aturan umum, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 152',
                'isi_pasal' => 'Barang siapa pada waktu diadakan pemilihan berdasarkan aturan-aturan umum dengan sengaja menggagalkan pemungutan suara yang telah diadakan atau mengadakan tipu muslihat yang menyebabkan putusan pemungutan suara itu lain dari yang seharusnya diperoleh berdasarkan kartu-kartu pemungutan suara yang masuk secara sah atau berdasarkan suara-suara yang dikeluarkan secara sah, diancam dengan pidana penjara paling lama dua tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'nomor_pasal' => 'Pasal 153',
                'isi_pasal' => '(1) Dalam hal pemidanaan berdasarkan perumusan kejahatan dalam pasal 146, dapat dipidana pencabutan hak berdasarkan pasal 35 ke 1-3. (2) Dalam hal pemidanaan berdasarkan perumusan kejahatan dalam pasal 147-152, dapat dipidana pencabutan hak berdasarkan pasal 35 ke-3.'
            ],

            // BAB V KEJAHATAN TERHADAP KETERTIBAN UMUM
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 153 bis',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal 8, butir 32.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 153 ter',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal 8, butir 32.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 154',
                'isi_pasal' => 'Barang siapa di muka umum menyatakan perasaan permusuhan, kebencian atau penghinaan terhadap Pemerintah Indonesia, diancam dengan pidana penjara paling lama tujuh tahun atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 154a',
                'isi_pasal' => 'Barang siapa menodai bendera kebangsaan Republik Indonesia dan lambang Negara Republik Indonesia, diancam dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak empat puluh lima ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 155',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukkan atau menempelkan tulisan atau lukisan di muka umum yang mengandung pernyataan perasaan permusuhan, kebencian atau penghinaan terhadap Pemerintah Indonesia, dengan maksud supaya isinya diketahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama empat tahun enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika yang bersalah melakukan kejahatan tersebut pada waktu menjalankan pencariannya dan pada saat itu belum lewat lima tahun sejak pemidanaannya menjadi tetap karena melakukan kejahatan semacam itu juga, yang bersangkutan dapat dilarang menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 156',
                'isi_pasal' => 'Barang siapa di muka umum menyatakan perasaan permusuhan, kebencian atau penghinaan terhadap suatu atau beberapa golongan rakyat Indonesia, diancam dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak empat ribu lima ratus rupiah. Perkataan golongan dalam pasal ini dan pasal berikutnya berarti tiap-tiap bagian dari rakyat Indonesia yang berbeda dengan suatu atau beberapa bagian lainnya karena ras, negeri asal, agama, tempat asal, keturunan, kebangsaan atau kedudukan menurut hukum tata negara.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 156a',
                'isi_pasal' => 'Dipidana dengan pidana penjara selama-lamanya lima tahun barang siapa dengan sengaja di muka umum mengeluarkan perasaan atau melakukan perbuatan: a. yang pada pokoknya bersifat permusuhan, penyalahgunaan atau penodaan terhadap suatu agama yang dianut di Indonesia; b. dengan maksud agar supaya orang tidak menganut agama apa pun juga, yang bersendikan Ketuhanan Yang Maha Esa.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 157',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukkan atau menempelkan tulisan atau lukisan di muka umum, yang isinya mengandung pernyataan perasaan permusuhan, kebencian atau penghinaan di antara atau terhadap golongan-golongan rakyat Indonesia, dengan maksud supaya isinya diketahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama dua tahun enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika yang bersalah melakukan kejahatan tersebut pada waktu menjalankan pencariannya dan pada saat itu belum lewat lima tahun sejak pemidanaannya menjadi tetap karena kejahatan semacam itu juga, yang bersangkutan dapat dilarang menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 158',
                'isi_pasal' => 'Barang siapa menyelenggarakan pemilihan anggota untuk suatu lembaga kenegaraan asing di Indonesia, atau menyiapkan ataupun memudahkan pemilihan itu, baik yang diadakan di Indonesia maupun di luar negeri, diancam dengan pidana penjara paling lama dua tahun atau pidana denda paling banyak tujuh ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 159',
                'isi_pasal' => 'Barang siapa turut serta dalam pemilihan umum, baik yang diadakan di Indonesia maupun di luar negeri, seperti yang dimaksudkan dalam pasal 158, diancam dengan pidana penjara paling lama enam bulan atau pidana denda paling banyak seribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 160',
                'isi_pasal' => 'Barang siapa di muka umum dengan lisan atau tulisan menghasut supaya melakukan perbuatan pidana, melakukan kekerasan terhadap penguasa umum atau tidak menuruti baik ketentuan undang-undang maupun perintah jabatan yang diberikan berdasar ketentuan undang-undang, diancam dengan pidana penjara paling lama enam tahun atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 161',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukkan atau menempelkan di muka umum tulisan yang menghasut supaya melakukan perbuatan pidana, menentang penguasa umum dengan kekerasan, atau menentang sesuatu hal lain seperti tersebut dalam pasal di atas, dengan maksud supaya isi yang menghasut diketahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika yang bersalah melakukan kejahatan tersebut pada waktu menjalankan pencariannya dan pada saat itu belum lewat lima tahun sejak pemidanaannya menjadi tetap karena kejahatan semacam itu juga, yang bersangkutan dapat dilarang menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 161 bis',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No. 1 Tahun 1946, pasal 8, butir 34.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 162',
                'isi_pasal' => 'Barang siapa di muka umum dengan lisan atau tulisan menawarkan untuk memberi keterangan, kesempatan atau sarana guna melakukan tindak pidana, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 163',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukkan atau menempelkan di muka umum tulisan yang berisi penawaran untuk memberi keterangan, kesempatan atau sarana guna melakukan tindak pidana dengan maksud supaya penawaran itu diketahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika yang bersalah melakukan kejahatan tersebut pada waktu menjalankan pencariannya dan pada saat itu belum lewat lima tahun sejak pemidanaannya menjadi tetap karena kejahatan semacam itu juga, yang bersangkutan dapat dilarang menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 163 bis',
                'isi_pasal' => '(1) Barang siapa dengan menggunakan salah satu sarana tersebut dalam pasal 55 ke-2 berusaha menggerakkan orang lain supaya melakukan kejahatan, dan kejahatan itu atau percobaan untuk itu dapat dipidana tidak terjadi, diancam dengan pidana penjara paling lama enam tahun atau pidana denda paling banyak tiga ratus rupiah, tetapi dengan pengertian bahwa sekali-kali tidak dapat dijatuhkan pidana yang lebih berat daripada yang dapat dijatuhkan karena percobaan kejahatan atau apabila percobaan itu tidak dapat dipidana karena kejahatan itu sendiri. (2) Aturan tersebut tidak berlaku, jika tidak mengakibatkan kejahatan atau percobaan kejahatan disebabkan karena kehendaknya sendiri.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 164',
                'isi_pasal' => 'Barang siapa mengetahui ada sesuatu permufakatan untuk melakukan kejahatan berdasarkan pasal-pasal 104, 106, 107, dan 108, 113, 115, 124, 187 atau 187 bis, sedang masih ada waktu untuk mencegah kejahatan itu, dan dengan sengaja tidak segera memberitahukan tentang hal itu kepada pejabat kehakiman atau kepolisian atau kepada orang yang terancam oleh kejahatan itu, dipidana jika kejahatan itu jadi dilakukan, dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak tiga ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 165',
                'isi_pasal' => '(1) Barang siapa mengetahui ada niat untuk melakukan salah satu kejahatan berdasarkan pasal-pasal 104, 106, 107, dan 108, 110 - 113, dan 115 - 129 dan 131 atau niat untuk lari dari tentara dalam masa perang, untuk desersi, untuk membunuh dengan rencana, untuk menculik atau memperkosa atau mengetahui adanya niat untuk melakukan kejahatan tersebut dalam bab 8 dalam kitab undang-undang ini, sepanjang kejahatan itu membahayakan nyawa orang atau untuk melakukan salah satu kejahatan berdasarkan pasal-pasal 224 228, 250 atau salah satu kejahatan berdasarkan pasal-pasal 264 dan 275 sepanjang mengenai surat kredit yang diperuntukkan bagi peredaran, sedang masih ada waktu untuk mencegah kejahatan itu, dan dengan sengaja tidak segera memberitahukan hal itu kepada pejabat kehakiman atau kepolisian atau kepada orang yang terancam oleh kejahatan itu, dipidana jika kejahatan itu jadi dilakukan, dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Pidana tersebut diterapkan terhadap orang yang mengetahui bahwa sesuatu kejahatan berdasarkan ayat 1 telah dilakukan, dan telah membahayakan nyawa orang pada saat akibat masih dapat dicegah, dengan sengaja tidak memberitahukannya kepada pihak-pihak tersebut dalam ayat 1.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 166',
                'isi_pasal' => 'Ketentuan dalam pasal 164 dan 165 tidak berlaku bagi orang yang dengan memberitahukan itu mungkin mendatangkan bahaya penuntutan pidana bagi diri sendiri, bagi seorang keluarganya sedarah atau semenda dalam garis lurus atau garis menyimpang derajat kedua atau ketiga, bagi suami atau bekas suaminya, atau bagi orang lain yang jika dituntut, berhubung dengan jabatan atau pencariannya, dimungkinkan pembebasan menjadi saksi terhadap orang tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 167',
                'isi_pasal' => '(1) Barang siapa memaksa masuk ke dalam rumah, ruangan atau pekarangan tertutup yang dipakai orang lain dengan melawan hukum atau berada di situ dengan melawan hukum, dan atas permintaan yang berhak atau suruhannya tidak pergi dengan segera, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Barang siapa masuk dengan merusak atau memanjat, dengan menggunakan anak kunci palsu, perintah palsu atau pakaian jabatan palsu, atau barang siapa tidak setahu yang berhak lebih dahulu serta bukan karena kekhilafan masuk dan kedapatan di situ pada waktu malam, dianggap memaksa masuk. (3) Jika mengeluarkan ancaman atau menggunakan sarana yang dapat menakutkan orang, diancam dengan pidana penjara paling lama satu tahun empat bulan. (4) Pidana tersebut dalam ayat 1 dan 3 dapat ditambah sepertiga jika yang melakukan kejahatan dua orang atau lebih dengan bersekutu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 168',
                'isi_pasal' => '(1) Barang siapa memaksa masuk ke dalam ruangan untuk dinas umum, atau berada di situ dengan melawan hukum, dan atas permintaan pejabat yang berwenang tidak pergi dengan segera, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Barang siapa masuk dengan merusak atau memanjat, dengan menggunakan anak kunci palsu, perintah palsu, atau pakaian jabatan palsu, atau barang siapa tidak setahu pejabat yang berwenang lebih dahulu serta bukan karena kekhilafan masuk dan kedapatan di situ pada waktu malam, dianggap memaksa masuk. (3) Jika ia mengeluarkan ancaman atau menggunakan sarana yang dapat menakutkan orang, diancam dengan pidana penjara menjadi paling lama satu tahun empat bulan. (4) Pidana tersebut dalam ayat 1 dan 3 dapat ditambah sepertiga, jika yang melakukan kejahatan dua orang atau lebih dengan bersekutu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 169',
                'isi_pasal' => '(1) Turut serta dalam perkumpulan yang bertujuan melakukan kejahatan, atau turut serta dalam perkumpulan lainnya yang dilarang oleh aturan-aturan umum, diancam dengan pidana penjara paling lama enam tahun. (2) Turut serta dalam perkumpulan yang bertujuan melakukan pelanggaran, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (3) Terhadap pendiri atau pengurus, pidana dapat ditambah sepertiga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 170',
                'isi_pasal' => '(1) Barang siapa dengan terang-terangan dan dengan tenaga bersama menggunakan kekerasan terhadap orang atau barang, diancam dengan pidana penjara paling lama lima tahun enam bulan. (2) Yang bersalah diancam: 1. dengan pidana penjara paling lama tujuh tahun, jika ia dengan sengaja menghancurkan barang atau jika kekerasan yang digunakan mengakibatkan luka-luka; 2. dengan pidana penjara paling lama sembilan tahun, jika kekerasan mengakibatkan luka berat; 3. dengan pidana penjara paling lama dua belas tahun, jika kekerasan mengakibatkan maut. (3) Pasal 89 tidak diterapkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 171',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang no. 1 Tahun 1946, pasal 8, butir 37.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 172',
                'isi_pasal' => 'Barang siapa dengan sengaja mengganggu ketenangan dengan mengeluarkan teriakan-teriakan, atau tanda-tanda bahaya palsu, diancam dengan pidana penjara paling lama tiga minggu atau pidana denda paling banyak sembilan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 173',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan merintangi rapat, umum yang diizinkan, diancam dengan pidana penjara paling lama satu tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 174',
                'isi_pasal' => 'Barang siapa dengan sengaja mengganggu rapat umum yang diizinkan dengan jalan menimbulkan kekacauan atau suara gaduh, diancam dengan pidana penjara paling lama tiga minggu atau pidana denda paling banyak sembilan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 175',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan merintangi pertemuan keagamaan yang bersifat umum dan diizinkan, atau upacara keagamaan yang diizinkan, atau upacara penguburan jenazah, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 176',
                'isi_pasal' => 'Barang siapa dengan sengaja mengganggu pertemuan keagamaan yang bersifat umum dan diizinkan, atau upacara keagamaan yang diizinkan atau upacara penguburan jenazah, dengan menimbulkan kekacauan atau suara gaduh, diancam dengan pidana penjara paling lama satu bulan dua minggu atau pidana denda paling banyak seribu delapan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 177',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak seribu delapan ratus rupiah: 1. barang siapa menertawakan seorang petugas agama dalam menjalankan tugas yang diizinkan; 2. barang siapa menghina benda-benda untuk keperluan ibadat di tempat atau pada waktu ibadat dilakukan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 178',
                'isi_pasal' => 'Barang siapa dengan sengaja merintangi atau menghalang-halangi jalan masuk atau pengangkutan mayat ke kuburan yang diizinkan, diancam dengan pidana penjara paling lama satu bulan dua minggu atau pidana denda paling banyak seribu delapan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 179',
                'isi_pasal' => 'Barang siapa dengan sengaja menodai kuburan atau dengan sengaja dan melawan hukum menghancurkan atau merusak tanda peringatan di tempat kuburan, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 180',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum menggali atau mengambil jenazah atau memindahkan atau mengangkut jenazah yang sudah digali atau diambil, diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 181',
                'isi_pasal' => 'Barang siapa mengubur, menyembunyikan, membawa lari atau menghilangkan mayat dengan maksud menyembunyikan kematian atau kelahirannya, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            // Lanjutan ke BAB VI dan BAB VII
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 182',
                'isi_pasal' => '(1) Barang siapa menantang seorang untuk perkelahian tanding atau menyuruh orang menerima tantangan, bilamana hal itu mengakibatkan perkelahian tanding; (2) barang siapa dengan sengaja meneruskan tantangan, bilamana hal itu mengakibatkan perkelahian tanding.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 183',
                'isi_pasal' => 'Barang siapa di muka umum atau di hadapan pihak ketiga menceraca atau mengejek seseorang oleh karena yang bersangkutan tidak mau menentang atau menolak tantangan untuk perkelahian tanding, diancam dengan pidana penjara paling lama enam bulan atau pidana denda paling tinggi tiga ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 184',
                'isi_pasal' => '(1) Seseorang diancam dengan pidana penjara paling lama sembilan bulan, jika ia dalam perkelahian tanding itu tidak melukai tubuh pihak lawannya. (2) Diancam dengan pidana penjara paling lama satu tahun dan empat bulan, barang siapa melukai tubuh lawannya. (3) Diancam dengan pidana penjara paling lama empat tahun, barang siapa melukai berat tubuh lawannya. (4) Barang siapa yang merampas nyawa lawannya, diancam dengan pidana penjara paling lama tujuh tahun, atau jika perkelahian tanding itu dilakukan dengan perjanjian hidup atau mati, diancam dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 185',
                'isi_pasal' => 'Barang siapa dalam perkelahian tanding merampas nyawa pihak lawan atau melukai tubuhnya, maka diterapkan ketentuan-ketentuan mengenai pembunuhan berencana, pembunuhan atau penganiayaan: 1. jika persyaratan tidak diatur terlebih dahulu; 2. jika perkelahian tanding tidak dilakukan di hadapan saksi kedua belah pihak; 3. jika pelaku dengan sengaja dan merugikan pihak lawan, bersalah melakukan perbuatan penipuan atau yang menyimpang dari persyaratan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VI',
                'nomor_pasal' => 'Pasal 186',
                'isi_pasal' => '(1) Para saksi dan dokter yang menghadiri perkelahian tanding, tidak dipidana. (2) Para saksi diancam: 1. dengan pidana penjara paling lama tiga tahun, jika persyaratan tidak diatur terlebih dahulu, atau jika para saksi menghasut para pihak untuk perkelahian tanding; 2. dengan pidana penjara paling lama empat tahun, jika para saksi dengan sengaja dan merugikan salah satu atau kedua belah pihak, bersalah melakukan perbuatan penipuan atau membiarkan para pihak melakukan perbuatan penipuan, atau membiarkan dilakukan penyimpangan daripada syarat-syarat; 3. ketentuan-ketentuan mengenai pembunuhan berencana, pembunuhan atau penganiayaan diterapkan terhadap saksi dalam perkelahian tanding, di mana satu pihak dirampas nyawanya atau menderita karena dilukai tubuhnya, jika ia dengan sengaja dan merugikan pihak itu bersalah melakukan perbuatan penipuan atau membiarkan penyimpangan dari persyaratan yang merugikan yang dikalahkan atau dilukai.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 187',
                'isi_pasal' => 'Barang siapa dengan sengaja menimbulkan kebakaran, ledakan atau banjir, diancam: 1. dengan pidana penjara paling lama dua belas tahun, jika karena perbuatan tersebut di atas timbul bahaya umum bagi barang; 2. dengan pidana penjara paling lama lima belas tahun, jika karena perbuatan tersebut di atas timbul bahaya bagi nyawa orang lain; 3. dengan pidana penjara seumur hidup atau selama waktu tertentu paling lama dua puluh tahun, jika karena perbuatan tersebut di atas timbul bahaya bagi nyawa orang lain dan mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 187 bis',
                'isi_pasal' => '(1) Barang siapa membuat, menerima, berusaha memperoleh, mempunyai persediaan, menyembunyikan, mengangkut atau memasukkan ke Indonesia bahan-bahan, benda-benda atau perkakas-perkakas yang diketahui atau selayaknya harus diduga bahwa diperuntukkan, atau kalau ada kesempatan akan diperuntukkan, untuk menimbulkan ledakan yang membahayakan nyawa orang atau menimbulkan bahaya umum bagi barang, diancam dengan pidana penjara paling lama delapan tahun atau pidana kurungan paling lama satu tahun. (2) Tidak mampunya bahan-bahan, benda-benda atau perkakas-perkakas untuk menimbulkan ledakan; seperti tersebut di atas, tidak menghapuskan pengenaan pidana.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 187 ter',
                'isi_pasal' => 'Permufakatan jahat, untuk melakukan salah satu kejahatan tersebut dalam pasal 187 dan 187 bis, diancam dengan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 188',
                'isi_pasal' => 'Barang siapa karena kesalahan (kealpaan) menyebabkan kebakaran, ledakan atau banjir, diancam dengan pidana penjara paling lama lima tahun atau pidana kurungan paling lama satu tahun atau pidana denda paling banyak empat ribu lima ratus rupiah, jika karena perbuatan itu timbul bahaya umum bagi barang; jika karena perbuatan itu timbul bahaya bagi nyawa orang lain, atau jika karena perbuatan itu mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 189',
                'isi_pasal' => 'Barang siapa pada waktu ada atau akan ada kebakaran, dengan sengaja dan melawan hukum menyembunyikan atau membikin tak dapat dipakai perkakas-perkakas atau alat-alat pemadam api atau dengan cara apa pun merintangi atau menghalang-halangi pekerjaan memadamkan api, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 190',
                'isi_pasal' => 'Barang siapa pada waktu ada, atau akan ada banjir, dengan sengaja dan melawan hukum menyembunyikan atau membikin tak dapat dipakai bahan-bahan untuk tanggul atau perkakas-perkakas atau menggagalkan usaha untuk membetulkan tanggul-tanggul atau bangunan-bangunan pengairan, atau merintangi usaha untuk mencegah atau menahan banjir, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 191',
                'isi_pasal' => 'Barang siapa dengan sengaja menghancurkan, membikin tak dapat dipakai atau merusak bangunan untuk menahan atau menyalurkan air, diancam dengan pidana penjara paling lama tujuh tahun jika karena perbuatan itu timbul bahaya banjir.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 191 bis',
                'isi_pasal' => 'Barang siapa dengan sengaja menghancurkan, merusak atau membikin tak dapat dipakai bangunan listrik, atau menyebabkan jalan atau bekerjanya bangunan itu terganggu, atau menggagalkan atau mempersukar usaha untuk menyelamatkan atau membetulkan bangunan itu, diancam: 1. dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika karena perbuatan itu timbul rintangan atau kesukaran dalam penyerahan tenaga listrik untuk kepentingan umum; 2. dengan pidana penjara paling lama tujuh tahun, jika karena perbuatan itu timbul bahaya umum bagi barang; 3. dengan pidana penjara paling lama sembilan tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain; 4. dengan pidana penjara paling lama lima belas tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain dan mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 191 ter',
                'isi_pasal' => 'Barang siapa karena kesalahannya (kealpaannya) menyebabkan suatu bangunan listrik hancur, rusak atau tak dapat dipakai atau menyebabkan jalannya atau bekerjanya bangunan itu terganggu, atau usaha untuk menyelamatkan atau membetulkan bangunan itu gagal atau menjadi sukar, diancam: 1. dengan pidana penjara paling lama empat bulan dua minggu atau pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika menimbulkan rintangan atau kesukaran dalam memberikan tenaga listrik untuk kepentingan umum atau menimbulkan bahaya umum bagi barang; 2. dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika membahayakan nyawa orang lain; 3. dengan pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun, jika mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 192',
                'isi_pasal' => 'Barang siapa dengan sengaja menghancurkan, membikin tak dapat dipakai atau merusak bangunan untuk lalu lintas umum, atau merintangi jalan umum darat atau air, atau menggagalkan usaha untuk pengamanan bangunan atau jalan itu, diancam: 1. dengan pidana penjara paling lama sembilan tahun, jika karena perbuatan itu timbul bahaya bagi keamanan lalu lintas; 2. dengan pidana penjara paling lama lima belas tahun, jika karena perbuatan itu timbul bahaya bagi keamanan lalu lintas dan mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 193',
                'isi_pasal' => 'Barang siapa karena kesalahannya (kealpaannya) menyebabkan bangunan untuk lalu lintas umum dihancurkan, tidak dapat dipakai atau merusak, atau menyebabkan jalan umum darat atau air dirintangi, atau usaha untuk pengamanan bangunan atau jalan itu digagalkan, diancam: 1. dengan pidana penjara paling lama empat bulan dua minggu atau pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika karena perbuatan itu timbul bahaya bagi keamanan lalu lintas; 2. dengan pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun, jika karena perbuatan itu mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 194',
                'isi_pasal' => '(1) Barang siapa dengan sengaja menimbulkan bahaya bagi lalu lintas umum yang digerakkan oleh tenaga uap atau berkekuatan mesin lain di jalan kereta api atau trem, diancam dengan pidana penjara paling lama lima belas tahun. (2) Jika perbuatan itu mengakibatkan orang mati, yang bersalah diancam dengan pidana penjara seumur hidup atau pidana penjara selama waktu tertentu paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 195',
                'isi_pasal' => '(1) Barang siapa karena kesalahannya (kealpaannya) menimbulkan bahaya bagi lalu lintas umum yang digerakkan oleh tenaga uap atau kekuatan mesin lain di jalan kereta api atau trem, diancam dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika perbuatan itu mengakibatkan orang mati, yang bersalah diancam pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 196',
                'isi_pasal' => 'Barang siapa dengan sengaja menghancurkan, merusak, mengambil atau memindahkan tanda untuk keamanan pelayaran, atau menggagalkan bekerjanya atau memasang tanda yang keliru, diancam: 1. dengan pidana penjara paling lama dua belas tahun, jika karena perbuatan itu timbul bahaya bagi keamanan pelayaran; 2. dengan pidana penjara paling lama lima belas tahun, jika karena perbuatan itu timbul bahaya bagi keamanan pelayaran dan mengakibatkan tenggelam atau terdamparnya kapal; 3. dengan pidana penjara seumur hidup atau pidana penjara selama waktu tertentu paling lama dua puluh tahun, jika karena perbuatan itu timbul bahaya bagi keamanan pelayaran dan mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 197',
                'isi_pasal' => 'Barang siapa karena kesalahan (kealpaan) menyebabkan tanda untuk keamanan dihancurkan, dirusak; diambil atau dipindahkan, atau menyebabkan dipasang tanda yang keliru, diancam: 1. dengan pidana penjara paling lama empat bulan dua minggu atau pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika karena perbuatan itu pelayaran tidak aman; 2. dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika karena perbuatan itu mengakibatkan tenggelam atau terdamparnya kapal; 3. dengan pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun, jika karena perbuatan itu mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 198',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum menenggelamkan atau mendamparkan, menghancurkan, membikin tidak dapat dipakai atau merusak kapal, diancam: 1. dengan pidana penjara paling lama lima belas tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain; 2. dengan pidana penjara seumur hidup atau pidana penjara selama waktu tertentu paling lama dua puluh tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain dan mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 199',
                'isi_pasal' => 'Barang siapa karena kesalahan (kealpaannya) menyebabkan kapal tenggelam atau terdampar, dihancurkan, tidak dapat dipakai atau dirusak, diancam: 1. dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan or pidana denda paling banyak empat ribu lima ratus rupiah, jika karena perbuatan itu timbul bahaya bagi orang lain; 2. dengan pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun, jika karena perbuatan itu mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 200',
                'isi_pasal' => 'Barang siapa dengan sengaja menghancurkan atau merusak gedung atau bangunan diancam: 1. dengan pidana penjara paling lama dua belas tahun, jika karena perbuatan itu timbul bahaya umum bagi barang; 2. dengan pidana penjara paling lama lima belas tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain; 3. dengan pidana penjara seumur hidup atau pidana penjara selama waktu tertentu paling lama dua puluh tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain dan mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 201',
                'isi_pasal' => 'Barang siapa karena kesalahannya (kealpaannya) menyebabkan gedung atau bangunan dihancurkan atau dirusak, diancam: 1. dengan pidana penjara paling lama empat bulan dua minggu atau pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika perbuatan itu menimbulkan bahaya umum bagi barang; 2. dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, jika perbuatan itu menimbulkan bahaya bagi nyawa orang; 3. dengan pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun jika perbuatan itu mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 202',
                'isi_pasal' => '(1) Barang siapa memasukkan barang sesuatu ke dalam sumur, pompa, sumber atau ke dalam perlengkapan air minum untuk umum atau untuk dipakai oleh atau bersama-sama dengan orang lain, padahal diketahuinya bahwa karena perbuatan itu air lalu berbahaya bagi nyawa atau kesehatan orang, diancam dengan pidana penjara paling lama lima belas tahun. (2) Jika perbuatan itu mengakibatkan orang mati, yang bersalah diancam dengan pidana penjara seumur hidup atau pidana penjara selama waktu tertentu paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 203',
                'isi_pasal' => '(1) Barang siapa karena kesalahannya (kealpaannya) menyebabkan bahwa barang sesuatu dimasukkan ke dalam sumur, pompa, sumber atau ke dalam perlengkapan air minum untuk umum atau untuk dipakai oleh, atau bersama-sama dengan orang lain, sehingga karena perbuatan itu air lalu berbahaya bagi nyawa atau kesehatan orang, diancam dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika perbuatan itu mengakibatkan orang mati, yang bersalah diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 204',
                'isi_pasal' => '(1) Barang siapa menjual, menawarkan, menyerahkan atau membagi-bagikan barang yang diketahuinya membahayakan nyawa atau kesehatan orang, padahal sifat berbahaya itu tidak diberi tahu, diancam dengan pidana penjara paling lama lima belas tahun. (2) Jika perbuatan itu mengakibatkan orang mati, yang bersalah diancam dengan pidana penjara seumur hidup atau pidana penjara selama waktu tertentu paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 205',
                'isi_pasal' => '(1) Barang siapa karena kesalahannya (kealpaannya) menyebabkan barang-barang yang berbahaya bagi nyawa atau kesehatan orang, dijual, diserahkan atau di bagi-bagikan tanpa diketahui sifat berbahayanya oleh yang membeli atau yang memperoleh, diancam dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika perbuatan itu mengakibatkan orang mati, yang bersalah diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana kurungan paling lama satu tahun. (3) Barang-barang itu dapat disita.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'nomor_pasal' => 'Pasal 206',
                'isi_pasal' => '(1) Dalam hal pemidanaan karena salah satu kejahatan berdasarkan bab ini, yang bersalah dapat dilarang menjalankan pencariannya ketika melakukan kejahatan tersebut. (2) Dalam hal pemidanaan berdasarkan salah satu kejahatan dalam pasal 204 dan 205, hakim dapat memerintahkan supaya putusan diumumkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 207',
                'isi_pasal' => 'Barang siapa dengan sengaja di muka umum dengan lisan atau tulisan menghina suatu penguasa atau badan umum yang ada di Indonesia, diancam dengan pidana penjara paling lama satu tahun enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 208',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukkan atau menempelkan di muka umum suatu tulisan atau lukisan yang memuat penghinaan terhadap penguasa atau badan umum yang ada di Indonesia dengan maksud supaya isi yang menghina itu diketahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama empat bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika yang bersalah melakukan kejahatan tersebut dalam pencariannya dan ketika itu belum lewat dua tahun sejak adanya pemidanaan yang menjadi tetap karena kejahatan semacam itu juga, maka yang bersangkutan dapat dilarang menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 209',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah: 1. barang siapa memberi atau menjanjikan sesuatu kepada seorang pejabat dengan maksud menggerakkannya untuk berbuat atau tidak berbuat sesuatu dalam jabatannya yang bertentangan dengan kewajibannya; 2. barang siapa memberi sesuatu kepada seorang pejabat karena atau berhubung dengan sesuatu yang bertentangan dengan kewajiban, dilakukan atau tidak dilakukan dalam jabatannya. Pencabutan hak tersebut dalam pasal 35 No. 1-4 dapat dijatuhkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 210',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama tujuh tahun: 1. barang siapa memberi atau menjanjikan sesuatu kepada seorang hakim dengan maksud untuk mempengaruhi putusan tentang perkara yang diserahkan kepadanya untuk diadili; 2. barang siapa memberi atau menjanjikan sesuatu kepada seorang yang menurut ketentuan undang-undang ditentukan menjadi penasihat atau adviseur untuk menghadiri sidang atau pengadilan, dengan maksud untuk mempengaruhi nasihat atau pendapat yang akan diberikan berhubung dengan perkara yang diserahkan kepada pengadilan untuk diadili. (2) Jika pemberian atau janji dilakukan dengan maksud supaya dalam perkara pidana dijatuhkan pemidanaan, maka yang bersalah diancam dengan pidana penjara paling lama sembilan tahun. (3) Pencabutan hak berdasarkan pasal 35 No. 1-4 dapat dijatuhkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 211',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan memaksa seorang pejabat untuk melakukan perbuatan jabatan atau untuk tidak melakukan perbuatan jabatan yang sah, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 212',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan melawan seorang pejabat yang sedang menjalankan tugas yang sah, atau orang yang menurut kewajiban undang-undang atau atas permintaan pejabat memberi pertolongan kepadanya, diancam karena melawan pejabat, dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 213',
                'isi_pasal' => 'Paksaan dan perlawanan berdasarkan pasal 211 dan 212 diancam: 1. dengan pidana penjara paling lama lima tahun, jika kejahatan atau perbuatan lainnya ketika itu mengakibatkan luka-luka; 2. dengan pidana penjara paling lama delapan tahun enam bulan, jika mengakibatkan luka-luka berat; 3. dengan pidana penjara paling lama dua belas tahun jika mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 214',
                'isi_pasal' => '(1) Paksaan dan perlawanan berdasarkan pasal 211 dan 212 jika dilakukan oleh dua orang atau lebih dengan bersekutu, diancam dengan pidana penjara paling lama tujuh tahun. (2) Yang bersalah dikenakan: 1. pidana penjara paling lama delapan tahun enam bulan, jika kejahatan atau perbuatan lainnya ketika itu mengakibatkan luka-luka; 2. pidana penjara paling lama dua belas tahun, jika mengakibatkan luka berat; 3. pidana penjara paling lama lima belas tahun, jika mengakibatkan orang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 215',
                'isi_pasal' => 'Disamakan dengan pejabat dalam pasal 211 - 214: 1. orang yang menurut ketentuan undang-undang terus-menerus atau untuk sementara waktu diserahi menjalankan sesuatu jabatan umum; 2. pengurus dan para pegawai yang disumpah serta pekerja-pekerja pada jawatan kereta api dan trem untuk lalu lintas umum, di mana pengangkutan dijalankan dengan tenaga uap atau mesin lainnya.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 216',
                'isi_pasal' => '(1) Barang siapa dengan sengaja tidak menuruti perintah atau permintaan yang dilakukan menurut undang-undang oleh pejabat yang tugasnya mengawasi sesuatu, atau oleh pejabat berdasarkan tugasnya, demikian pula yang diberi kuasa untuk mengusut atau memeriksa tindak pidana; demikian pula barang siapa dengan sengaja mencegah, menghalang-halangi atau menggagalkan tindakan guna menjalankan ketentuan undang-undang yang dilakukan oleh salah seorang pejabat tersebut, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak sembilan ribu rupiah. (2) Disamakan dengan pejabat tersebut di atas, setiap orang yang menurut ketentuan undang-undang terus-menerus atau untuk sementara waktu diserahi tugas menjalankan jabatan umum. (3) Jika pada waktu melakukan kejahatan belum lewat dua tahun sejak adanya pemidanaan yang menjadi tetap karena kejahatan semacam itu juga, maka pidananya dapat ditambah sepertiga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 217',
                'isi_pasal' => 'Barang siapa menimbulkan kegaduhan dalam sidang pengadilan atau di tempat di mana seorang pejabat sedang menjalankan tugasnya yang sah di muka umum, dan tidak pergi sesudah diperintah oleh atau atas nama penguasa yang berwenang, diancam dengan pidana penjara paling lama tiga minggu atau pidana denda paling banyak seribu delapan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 218',
                'isi_pasal' => 'Barang siapa pada waktu rakyat datang berkerumun dengan sengaja tidak segera pergi setelah diperintah tiga kali oleh atau atas nama penguasa yang berwenang, diancam karena ikut serta perkelompokan dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak sembilan ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 219',
                'isi_pasal' => 'Barang siapa secara melawan hukum merobek, membikin tak dapat dibaca atau merusak maklumat yang diumumkan atas nama penguasa yang berwenang atau menurut ketentuan undang-undang, dengan maksud untuk mencegah atau menyukarkan orang mengetahui isi maklumat itu, diancam dengan pidana penjara paling lama satu bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 220',
                'isi_pasal' => 'Barang siapa memberitahukan atau mengadukan bahwa telah dilakukan suatu perbuatan pidana, padahal mengetahui bahwa itu tidak dilakukan, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 221',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah: 1. barang siapa dengan sengaja menyembunyikan orang yang melakukan kejahatan atau yang dituntut karena kejahatan, atau barang siapa memberi pertolongan kepadanya untuk menghindari penyidikan atau penahanan oleh penjahat kehakiman atau kepolisian, atau oleh orang lain yang menurut ketentuan undang-undang terus-menerus atau untuk sementara waktu diserahi menjalankan jabatan kepolisian; 2. barang siapa setelah dilakukan suatu kejahatan dan dengan maksud untuk menutupinya, atau untuk menghalang-halangi atau mempersukar penyidikan atau penuntutannya, menghancurkan, menghilangkan, menyembunyikan benda-benda terhadap mana atau dengan mana kejahatan dilakukan atau bekas-bekas kejahatan lainnya, atau menariknya dari pemeriksaan yang dilakukan oleh pejabat kehakiman atau kepolisian maupun oleh orang lain, yang menurut ketentuan undang-undang terus-menerus atau untuk sementara waktu diserahi menjalankan jabatan kepolisian. (2) Aturan di atas tidak berlaku bagi orang yang melakukan perbuatan tersebut dengan maksud untuk menghindarkan atau menghalaukan bahaya penuntutan terhadap seorang keluarga sedarah atau semenda garis lurus atau dalam garis menyimpang derajat kedua atau ketiga, atau terhadap suami/istrinya atau bekas suami/istrinya.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 222',
                'isi_pasal' => 'Barang siapa dengan sengaja mencegah, menghalang-halangi atau menggagalkan pemeriksaan mayat forensik, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 223',
                'isi_pasal' => 'Barang siapa dengan sengaja melepaskan atau memberi pertolongan ketika meloloskan diri kepada orang yang ditahan atas perintah penguasa umum, atas putusan atau ketetapan hakim, diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 224',
                'isi_pasal' => 'Barang siapa dipanggil sebagai saksi, ahli atau juru bahasa menurut undang-undang dengan sengaja tidak memenuhi kewajiban berdasarkan undang-undang yang harus dipenuhinya, diancam: 1. dalam perkara pidana, dengan pidana penjara paling lama sembilan bulan; 2. dalam perkara lain, dengan pidana penjara paling lama enam bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 225',
                'isi_pasal' => 'Barang siapa dengan sengaja tidak memenuhi perintah undang-undang untuk menyerahkan surat-surat yang dianggap palsu atau dipalsukan, atau yang harus dipakai untuk dibandingkan dengan surat lain yang dianggap palsu atau dipalsukan atau yang kebenarannya disangkal atau tidak diakui, diancam: 1. dalam perkara pidana, dengan pidana penjara paling lama sembilan bulan; 2. dalam perkara lain, dengan pidana penjara paling lama enam bulan;'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 226',
                'isi_pasal' => 'Barang siapa dinyatakan pailit atau dalam keadaan tak mampu atau sebagai suami/istri orang yang pailit dalam perkawinan dengan persatuan harta kekayaan atau sebagai pengurus atau komisaris suatu perseroan, perkumpulan atau yayasan yang dinyatakan pailit, dan dipanggil berdasarkan ketentuan undang-undang untuk memberi keterangan, dengan sengaja tidak hadir tanpa alasan yang sah, atau enggan memberi keterangan yang diminta ataupun dengan sengaja memberi keterangan yang keliru, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 227',
                'isi_pasal' => 'Barang siapa melaksanakan suatu hak, padahal ia mengetahui bahwa dengan putusan hakim hak tadi telah dicabut, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak sembilan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 228',
                'isi_pasal' => 'Barang siapa dengan sengaja memakai tanda kepangkatan atau melakukan perbuatan yang termasuk jabatan yang tidak dijabatnya atau yang ia sementara dihentikan daripadanya, diancam dengan pidana penjara paling lama dua tahun atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 229',
                'isi_pasal' => 'Barang siapa dengan sengaja memakai tanda kebesaran yang berhubungan dengan pangkat atau gelar yang tidak dimilikinya, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 230',
                'isi_pasal' => 'Pasal ini ditiadakan berdasarkan Undang-undang No.1 Tahun 1946 pasal 8, butir 41.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 231',
                'isi_pasal' => '(1) Barang siapa dengan sengaja menarik suatu barang yang disita berdasarkan ketentuan undang-undang atau yang dititipkan atas perintah hakim, atau dengan mengetahui bahwa barang ditarik dari situ, menyembunyikannya, diancam dengan pidana penjara paling lama empat tahun. (2) Dengan pidana yang sama, diancam barang siapa dengan sengaja menghancurkan, merusak atau membikin tak dapat dipakai barang yang disita berdasarkan ketentuan undang-undang. (3) Penyimpan barang yang dengan sengaja melakukan atau membiarkan dilakukan salah satu kejahatan itu, atau sebagai pembantu menolong perbuatan itu, diancam dengan pidana penjara paling lama lima tahun. (4) Jika salah satu perbuatan dilakukan karena kealpaan penyimpan barang, diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak seribu delapan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 232',
                'isi_pasal' => '(1) Barang siapa dengan sengaja memutus, membuang atau merusak penyegelan suatu benda oleh atau atas nama penguasa umum yang berwenang, atau dengan cara lain menggagalkan penutupan dengan segel, diancam dengan pidana penjara paling lama dua tahun delapan bulan. (2) Penyimpan barang yang dengan sengaja melakukan atau membiarkan perbuatan tersebut, atau sebagai pembantu menolong perbuatan itu, diancam dengan pidana penjara paling lama empat tahun. (3) Jika perbuatan dilakukan karena kealpaan penyimpan barang, diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak seribu delapan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 233',
                'isi_pasal' => 'Barang siapa dengan sengaja menghancurkan, merusak, membikin tak dapat dipakai, menghilangkan barang-barang yang digunakan untuk meyakinkan atau membuktikan sesuatu di muka penguasa yang berwenang, akta-akta, surat-surat atau daftar-daftar yang atas perintah penguasa umum, terus-menerus atau untuk sementara waktu disimpan, atau diserahkan kepada seorang pejabat, ataupun kepada orang lain untuk kepentingan umum, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 234',
                'isi_pasal' => 'Barang siapa dengan sengaja menarik dari alamatnya, membuka, atau merusak surat-surat atau barang-barang lain yang diserahkan ke kantor pos atau kantor telegram, atau yang telah dimasukan dalam kotak pos atau dipercayakan kepada seorang pembawa surat, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 235',
                'isi_pasal' => 'Jika yang bersalah melakukan salah satu kejahatan berdasarkan pasal 231 - 234, masuk ke tempat kejahatan dengan membongkar, merusak atau memanjat, dengan memakai anak kunci palsu, perintah palsu atau pakaian jabatan palsu, pidananya boleh ditambah menjadi lipat dua.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 236',
                'isi_pasal' => 'Barang siapa pada waktu damai dengan memakai salah satu cara berdasarkan pasal 55 No. 2 sengaja menganjurkan seorang anggota tentara dalam dinas negara supaya melarikan diri, atau mempermudahnya menurut salah satu cara berdasarkan pasal 56, diancam dengan pidana penjara paling lama sembilan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 237',
                'isi_pasal' => 'Barang siapa pada waktu damai dengan memakai salah satu cara berdasarkan pasal 55 No. 2 sengaja menganjurkan supaya ada huru-hara atau pemberontakan di kalangan anggota Angkatan Bersenjata dalam dinas Negara atau mempermudahnya menurut sesuatu cara yang berdasarkan pasal 56, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 238',
                'isi_pasal' => 'Barang siapa tanpa persetujuan Presiden mengajak masuk seorang menjadi tentara negara asing, diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 239',
                'isi_pasal' => 'Barang siapa tanpa persetujuan Presiden mengajak seorang warga negara Indonesia bekerja di luar Indonesia atau untuk mempertunjukkan di luar Indonesia cara sewajarnya kehidupan rakyat Indonesia, diancam dengan pidana penjara paling lama enam bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 240',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama dua tahun delapan bulan: 1. barang siapa dengan sengaja membikin atau menyuruh membikin dirinya tak mampu untuk memenuhi kewajiban berdasarkan pasal 30 Undang-Undang Dasar Republik Indonesia; 2. barang siapa atas permintaan orang lain, dengan sengaja membikin orang itu tak mampu memenuhi kewajiban tersebut. (2) Jika perbuatan terakhir mengakibatkan kematian, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 241',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah: 1. ditiadakan berdasarkan L.N. 1955 - 28; 2. barang siapa dalam pengangkut ternak yang diwajibkan memakai pas pengantar, pada waktu mengangkut dengan sengaja memakai pas yang diberikan untuk ternak lain, seolah-olah diberikan untuk yang diangkut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 242',
                'isi_pasal' => '(1) Barang siapa dalam keadaan di mana undang-undang menentukan supaya memberi keterangan di atas sumpah atau mengadakan akibat hukum kepada keterangan yang demikian, dengan sengaja memberi keterangan palsu di atas sumpah, baik dengan lisan atau tulisan, secara pribadi maupun oleh kuasanya yang khusus ditunjuk untuk itu, diancam dengan pidana penjara paling lama tujuh tahun. (2) Jika keterangan palsu di atas sumpah diberikan dalam perkara pidana dan merugikan terdakwa atau tersangka, yang bersalah diancam dengan pidana penjara paling lama sembilan tahun. (3) Disamakan dengan sumpah adalah janji atau penguatan diharuskan menurut aturan-aturan umum atau yang menjadi pengganti sumpah. (4) Pidana pencabutan hak berdasarkan pasal 35 No. 1 - 4 dapat dijatuhkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IX',
                'nomor_pasal' => 'Pasal 243',
                'isi_pasal' => 'Ditiadakan berdasarkan Stbl. 1931 No. 240.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 244',
                'isi_pasal' => 'Barang siapa meniru atau memalsu mata uang atau kertas yang dikeluarkan oleh Negara atau Bank, dengan maksud untuk mengedarkan atau menyuruh mengedarkan mata uang atau uang kertas itu sebagai asli dan tidak dipalsu, diancam dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 245',
                'isi_pasal' => 'Barang siapa dengan sengaja mengedarkan mata uang atau uang kertas yang dikeluarkan oleh Negara atau Bank sebagai mata uang atau uang kertas asli dan tidak dipalsu, padahal ditiru atau dipalsu olehnya sendiri, atau waktu diterima diketahuinya bahwa tidak asli atau dipalsu, ataupun barang siapa menyimpan atau memasukkan ke Indonesia mata uang dan uang kertas yang demikian, dengan maksud untuk mengedarkan atau menyuruh mengedarkan sebagai uang asli dan tidak dipalsu, diancam dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 246',
                'isi_pasal' => 'Barang siapa mengurangi nilai mata uang dengan maksud untuk mengeluarkan atau menyuruh mengedarkan uang yang dikurangi nilainya itu, diancam karena merusak uang dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 247',
                'isi_pasal' => 'Barang siapa dengan sengaja mengedarkan mata uang yang dikurangi nilai olehnya sendiri atau yang merusaknya waktu diterima diketahui sebagai uang yang tidak rusak, ataupun barang siapa menyimpan atau memasukkan ke Indonesia uang yang demikian itu dengan maksud untuk mengedarkan atau menyuruh mengedarkannya sebagai uang yang tidak rusak, diancam dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 248',
                'isi_pasal' => 'Ditiadakan berdasarkan Stbl. 1938 No. 593.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 249',
                'isi_pasal' => 'Barang siapa dengan sengaja mengedarkan mata uang yang tidak asli, dipalsu atau dirusak atau uang kertas Negara atau Bank yang palsu atau dipalsu, diancam, kecuali berdasarkan pasal 245 dan 247, dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 250',
                'isi_pasal' => 'Barang siapa membuat atau mempunyai persediaan bahan atau benda yang diketahuinya bahwa itu digunakan untuk meniru, memalsu atau mengurangi nilai mata uang, atau untuk meniru atau memalsu uang kertas negara atau bank, diancam dengan pidana penjara paling lama enam tahun atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 250 bis',
                'isi_pasal' => 'Pemidanaan berdasarkan salah satu kejahatan yang diterangkan dalam bab ini: maka mata uang palsu, dipalsu atau dirusak, uang kertas Negara atau Bank yang palsu atau dipalsukan, bahan-bahan atau benda-benda yang menilik sifatnya digunakan untuk meniru, memalsu atau mengurangi nilai mata uang atau uang kertas, sepanjang dipakai untuk atau menjadi obyek dalam melakukan kejahatan, dirampas, juga apabila barang-barang itu bukan kepunyaan terpidana.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 251',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama satu tahun atau pidana denda paling banyak sepuluh ribu rupiah, barang siapa dengan sengaja dan tanpa izin Pemerintah, menyimpan atau memasukkan ke Indonesia keping-keping atau lembar-lembar perak, baik yang ada maupun yang tidak ada capnya atau dikerjakan sedikit, mungkin dianggap sebagai mata uang, padahal tidak nyata-nyata akan digunakan sebagai perhiasan atau tanda peringatan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'nomor_pasal' => 'Pasal 252',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan yang diterangkan dalam pasal 244 - 247, maka hak-hak sebagaimana dimaksud dalam pasal 35 No. 1 - 4 dapat dicabut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 253',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tujuh tahun: 1. barang siapa meniru atau memalsu meterai yang dikeluarkan oleh Pemerintah Indonesia, atau jika diperlukan tanda-tangan untuk sahnya meterai itu, barang siapa meniru atau memalsu tanda-tangan, dengan maksud untuk memakai atau menyuruh orang lain memakai meterai itu sebagai meterai yang asli dan tidak dipalsu atau yang sah; 2. barang siapa dengan maksud yang sama, membikin meterai tersebut dengan menggunakan cap yang asli secara melawan hukum.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 254',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama enam tahun: 1. barang siapa membubuhi barang-barang emas atau perak dengan merek Negara yang dipalsukan, atau dengan tanda keahlian menurut undang-undang yang dipalsukan atau memalsu merek atau tanda yang asli dengan maksud untuk memakai atau menyuruh orang lain memakai seolah-olah merek atau tanda itu asli dan tidak dipalsu; 2. barang siapa dengan maksud yang sama membubuhi barang-barang tersebut dengan merek atau tanda, dengan menggunakan cap yang asli secara melawan hukum; 3. barang siapa memberi, menambah atau memindah merek Negara yang asli atau tanda keahlian menurut undang-undang yang asli pada barang emas atau perak yang lain daripada yang semula dibubuhi merek atau tanda itu, dengan maksud untuk memakai atau menyuruh orang lain memakai barang itu seolah-olah merek atau tanda dari semula sudah dibubuhkan pada barang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 255',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama empat tahun: 1. barang siapa membubuhi barang yang wajib ditera atau yang atas permintaan yang berkepentingan diizinkan untuk ditera atau ditera lagi dengan tanda tera Indonesia yang palsu, atau barang siapa memalsu tanda tera yang asli, dengan maksud untuk memakai atau menyuruh orang lain memakai barang itu seolah-olah tanda teranya asli dan tidak dipalsu; 2. barang siapa dengan maksud yang sama membubuhi merek pada barang tersebut dengan menggunakan cap yang asli secara melawan hukum; 3. barang siapa memberi, menambah atau memindahkan tera Indonesia yang asli kepada barang yang lain daripada yang semula dibubuhi tanda itu, dengan maksud untuk memakai atau menyuruh orang lain memakai barang itu seolah-olah tanda tersebut dari semula diadakan pada barang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 256',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tiga tahun: 1. barang siapa membubuhi merek lain daripada yang tersebut dalam pasal 254 dan 255, yang menurut ketentuan undang-undang harus atau boleh dibubuhi pada barang atau bungkusnya secara palsu pada barang atau bungkus tersebut, dengan maksud untuk memakai atau menyuruh orang lain memakai barang itu seolah-olah mereknya asli dan tidak dipalsu; 2. barang siapa yang dengan maksud yang sama membubuhi merek pada barang atau bungkusnya dengan memakai cap yang asli secara melawan hukum; 3. barang siapa memakai merek yang asli untuk barang atau bungkusnya, padahal merek itu bukan untuk barang atau bungkusnya itu, dengan maksud untuk memakai atau menyuruh orang lain memakai barang itu seolah-olah merek tersebut ditentukan untuk barang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 257',
                'isi_pasal' => 'Barang siapa dengan sengaja memakai, menjual, menawarkan, menyerahkan, mempunyai persediaan untuk dijual, atau memasukkan ke Indonesia, meterai, tanda atau merek yang tidak asli, dipalsu atau dibikin secara melawan hukum, ataupun benda-benda di mana merek itu dibubuhkannya secara melawan hukum seolah-olah meterai, tanda atau merek itu asli, tidak dipalsu dan tidak dibikin secara melawan hukum, ataupun tidak dibubuhkan secara melawan hukum pada benda-benda itu, diancam dengan pidana penjara sama dengan yang ditentukan dalam pasal 253 - 256, menurut perbedaan yang ditentukan dalam pasal-pasal itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 258',
                'isi_pasal' => '(1) Barang siapa memalsu ukuran atau takaran, anak timbangan atau timbangan sesudah dibubuhi tanda tera, dengan maksud untuk memakai atau menyuruh orang lain memakai barang itu seolah-olah asli dan tidak dipalsu, diancam dengan pidana penjara paling lama tiga tahun. (2) Diancam dengan pidana yang sama barang siapa dengan sengaja memakai ukuran atau takaran, anak timbangan atau timbangan yang dipalsu, seolah-olah barang itu asli dan tidak dipalsu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 259',
                'isi_pasal' => '(1) Barang siapa menghilangkan tanda apkir pada barang yang ditera dengan maksud hendak memakai atau menyuruh orang lain memakai barang itu seolah-olah tidak diapkir, diancam dengan pidana penjara paling lama satu tahun empat bulan. (2) Diancam dengan pidana yang sama barang siapa dengan sengaja memakai, menjual, menawarkan, menyerahkan atau mempunyai persediaan untuk dijual suatu benda yang dihilangkan tanda apkirnya seolah-olah benda itu tidak diapkir.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 260',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama empat tahun atau denda paling banyak empat ribu lima ratus rupiah: 1. barang siapa pada meterai Pemerintah Indonesia yang telah dipakai, menghilangkan cap yang gunanya untuk tidak memungkinkan dipakainya lagi, dengan maksud untuk memakai atau menyuruh orang lain memakai, seolah-olah meterai itu belum dipakai; 2. barang siapa pada meterai Pemerintah Indonesia yang telah dipakai, dengan maksud yang sama menghilangkan tanda tangan, ciri atau tanda saat dipakainya, yang menurut ketentuan undang-undang harus dihubuhkan di atas atau pada meterai-meterai tersebut. (2) Diancam dengan pidana yang sama barang siapa dengan sengaja memakai, menjual, menawarkan, menyerahkan, mempunyai persediaan untuk dijual atau memasukkan ke Indonesia meterai yang capnya, tanda tangannya, ciri atau tanda saat dipakainya dihilangkan, seolah-olah meterai belum dipakai.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 260 bis',
                'isi_pasal' => '(1) Ketentuan dalam pasal 253, 256, 257, dan 260 berlaku juga menurut perbedaan yang ditentukan dalam pasal-pasal itu, jika perbuatan yang diterangkan di situ dilakukan terhadap meterai atau merek yang dipakai oleh Jawatan Pos Indonesia atau suatu negara asing. (2) Jika kejahatan dilakukan terhadap meterai atau merek yang dipakai oleh jawatan pos negara asing, maksimum pidana pokok yang ditentukan bagi kejahatan itu dikurangi sepertiga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 261',
                'isi_pasal' => '(1) Barang siapa menyimpan bahan atau benda yang diketahuinya diperuntukkan untuk melakukan salah satu kejahatan yang diterangkan dalam pasal 253 atau dalam pasal 260 bis, berhubung dengan pasal 253, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Bahan-bahan dan barang-barang itu dirampas.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'nomor_pasal' => 'Pasal 262',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan yang diterangkan dalam pasal 253 - 260 bis, maka hak-hak sebagaimana dimaksud dalam pasal 35 No. 1 - 4 dapat dicabut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 263',
                'isi_pasal' => '(1) Barang siapa membuat surat palsu atau memalsukan surat yang dapat menimbulkan sesuatu hak, perikatan atau pembebasan hutang, atau yang diperuntukkan sebagai bukti daripada sesuatu hal dengan maksud untuk memakai atau menyuruh orang lain memakai surat tersebut seolah-olah isinya benar dan tidak dipalsu, diancam jika pemakaian tersebut dapat menimbulkan kerugian, karena pemalsuan surat, dengan pidana penjara paling lama enam tahun. (2) Diancam dengan pidana yang sama, barang siapa dengan sengaja memakai surat palsu atau yang dipalsukan seolah-olah sejati, jika pemakaian surat itu dapat menimbulkan kerugian.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 264',
                'isi_pasal' => '(1) Pemalsuan surat diancam dengan pidana penjara paling lama delapan tahun, jika dilakukan terhadap: 1. akta-akta otentik; 2. surat hutang atau sertifikat hutang dari sesuatu negara atau bagiannya ataupun dari suatu lembaga umum; 3. surat sero atau hutang atau sertifikat sero atau hutang dari suatu perkumpulan, yayasan, perseroan atau maskapai; 4. talon, tanda bukti dividen atau bunga dari salah satu surat yang diterangkan dalam 2 dan 3, atau tanda bukti yang dikeluarkan sebagai pengganti surat-surat itu; 5. surat kredit atau surat dagang yang diperuntukkan untuk diedarkan. (2) Diancam dengan pidana yang sama barang siapa dengan sengaja memakai surat tersebut dalam ayat pertama, yang isinya tidak sejati atau yang dipalsukan seolah-olah benar dan tidak dipalsu, jika pemalsuan surat itu dapat menimbulkan kerugian.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 265',
                'isi_pasal' => 'Ditiadakan berdasarkan Stbl. 1926. No. 359 jo. No. 429.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 266',
                'isi_pasal' => '(1) Barang siapa menyuruh memasukkan keterangan palsu ke dalam suatu akta otentik mengenai sesuatu hal yang kebenarannya harus dinyatakan oleh akta itu, dengan maksud untuk memakai atau menyuruh orang lain memakai akta itu seolah-olah keterangannya sesuai dengan kebenaran, diancam, jika pemakaian itu dapat menimbulkan kerugian, dengan pidana penjara paling lama tujuh tahun; (2) Diancam dengan pidana yang sama barang siapa dengan sengaja memakai surat tersebut dalam ayat pertama, yang isinya tidak sejati atau yang dipalsukan seolah-olah benar dan tidak dipalsu, jika pemalsuan surat itu dapat menimbulkan kerugian.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 267',
                'isi_pasal' => '(1) Seorang dokter yang dengan sengaja memberikan surat keterangan palsu tentang ada atau tidaknya penyakit, kelemahan atau cacat, diancam dengan pidana penjara paling lama empat tahun. (2) Jika keterangan diberikan dengan maksud untuk memasukkan seseorang ke dalam rumah sakit jiwa atau untuk menahannya di situ, dijatuhkan pidana penjara paling lama delapan tahun enam bulan. (3) Diancam dengan pidana yang sama, barang siapa dengan sengaja memakai surat keterangan palsu itu seolah-olah isinya sesuai dengan kebenaran.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 268',
                'isi_pasal' => '(1) Barang siapa membuat secara palsu atau memalsu surat keterangan dokter tentang ada atau tidak adanya penyakit, kelemahan atau cacat, dengan maksud untuk menyesatkan penguasa umum atau penanggung, diancam dengan pidana penjara paling lama empat tahun. (2) Diancam dengan pidana yang sama, barang siapa dengan maksud yang sama memakai surat keterangan yang tidak benar atau yang dipalsu, seolah-olah surat itu benar dan tidak dipalsu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 269',
                'isi_pasal' => '(1) Barang siapa membuat surat palsu atau memalsu surat keterangan tanda kelakuan baik, kecakapan, kemiskinan, kecacatan atau keadaan lain, dengan maksud untuk memakai atau menyuruh orang lain memakai surat itu supaya diterima dalam pekerjaan atau supaya menimbulkan kemurahan hati dan pertolongan, diancam dengan pidana penjara paling lama satu tahun empat bulan. (2) Diancam dengan pidana yang sama barang siapa dengan sengaja memakai surat keterangan yang palsu atau yang dipalsukan tersebut dalam ayat pertama, seolah-olah surat itu sejati dan tidak dipalsukan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 270',
                'isi_pasal' => '(1) Barang siapa membuat secara palsu atau memalsukan pas jalan atau surat penggantinya, kartu keamanan, surat perintah jalan atau surat yang diberikan menurut ketentuan undang-undang tentang pemberian izin kepada orang asing untuk masuk dan menetap di Indonesia, ataupun barang siapa menyuruh beri surat serupa itu atas nama palsu atau nama kecil yang palsu atau dengan menunjuk pada keadaan palsu, dengan maksud untuk memakai atau menyuruh orang lain memakai surat itu seolah-olah sejati dan tidak dipalsukan atau seolah-olah isinya sesuai dengan kebenaran, diancam dengan pidana penjara paling lama dua tahun delapan bulan. (2) Diancam dengan pidana yang sama, barang siapa dengan sengaja memakai surat yang tidak benar atau yang dipalsu tersebut dalam ayat pertama, seolah-olah benar dan tidak dipalsu atau seolah-olah isinya sesuai dengan kebenaran.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 271',
                'isi_pasal' => '(1) Barang siapa membuat palsu atau memalsukan surat pengantar bagi kerbau atau sapi, atau menyuruh beri surat serupa itu atas nama palsu atau dengan menunjuk pada keadaan palsu, dengan maksud untuk memakai atau menyuruh orang lain memakai surat itu seolah-olah isinya sesuai dengan kebenaran, diancam dengan pidana penjara paling lama dua tahun delapan bulan. (2) Diancam dengan pidana yang sama, barang siapa dengan sengaja memakai surat yang palsu atau yang dipalsukan tersebut dalam ayat pertama, seolah-olah sejati dan tidak dipalsu atau seolah-olah isinya sesuai dengan kebenaran.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 272',
                'isi_pasal' => 'Ditiadakan berdasarkan S. 1926 No. 359 jo. No. 429.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 273',
                'isi_pasal' => 'Ditiadakan berdasarkan S. 1926 No. 359 jo. No. 429.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 274',
                'isi_pasal' => '(1) Barang siapa membuat palsu atau memalsukan surat keterangan seorang pejabat selaku penguasa yang sah, tentang hak milik atau hak lainnya atas sesuatu barang, dengan maksud untuk memudahkan penjualan atau penggadaiannya atau untuk menyesatkan pejabat kehakiman atau kepolisian tentang asalnya, diancam dengan pidana penjara paling lama dua tahun. (2) Diancam dengan pidana yang sama, barang siapa dengan maksud tersebut, memakai surat keterangan itu seolah-olah sejati dan tidak dipalsukan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 275',
                'isi_pasal' => '(1) Barang siapa menyimpan bahan atau benda yang diketahuinya bahwa diperuntukkan untuk melakukan salah satu kejahatan berdasarkan pasal 264 No. 2 - 5, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Bahan-bahan dan benda-benda itu dirampas.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'nomor_pasal' => 'Pasal 276',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan dalam pasal 263 - 268, dapat dijatuhkan pencabutan hak berdasarkan pasal 35 No. 1 - 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIII',
                'nomor_pasal' => 'Pasal 277',
                'isi_pasal' => '(1) Barang siapa dengan salah satu perbuatan sengaja menggelapkan asal-usul orang, diancam karena penggelapan asal-usul, dengan pidana penjara paling lama enam tahun. (2) Pencabutan hak berdasarkan pasal 35 No. 1 - 4 dapat dinyatakan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIII',
                'nomor_pasal' => 'Pasal 278',
                'isi_pasal' => 'Barang siapa mengakui seorang anak sebagai anaknya menurut peraturan Kitab Undang-undang Hukum Perdata, padahal diketahuinya bahwa dia bukan ayah dari anak tersebut, diancam karena melakukan pengakuan anak palsu dengan pidana penjara paling lama tiga tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIII',
                'nomor_pasal' => 'Pasal 279',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama lima tahun: 1. barang siapa mengadakan perkawinan padahal mengetahui bahwa perkawinan atau perkawinan-perkawinannya yang telah ada menjadi penghalang yang sah untuk itu; 2. barang siapa mengadakan perkawinan padahal mengetahui bahwa perkawinan atau perkawinan-perkawinan pihak lain menjadi penghalang untuk itu. (2) Jika yang melakukan perbuatan berdasarkan ayat 1 butir 1 menyembunyikan kepada pihak lain bahwa perkawinan yang telah ada menjadi penghalang yang sah untuk itu diancam dengan pidana penjara paling lama tujuh tahun. (3) Pencabutan hak berdasarkan pasal No. 1 - 5 dapat dinyatakan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIII',
                'nomor_pasal' => 'Pasal 280',
                'isi_pasal' => 'Barang siapa mengadakan perkawinan, padahal sengaja tidak memberitahu kepada pihak lain bahwa ada penghalang yang sah, diancam dengan pidana penjara paling lama lima tahun, apabila kemudian berdasarkan penghalang tersebut, perkawinan lalu dinyatakan tidak sah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 281',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah: 1. barang siapa dengan sengaja dan terbuka melanggar kesusilaan; 2. barang siapa dengan sengaja dan di depan orang lain yang ada di situ bertentangan dengan kehendaknya, melanggar kesusilaan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 282',
                'isi_pasal' => '(1) Barang siapa menyiarkan, mempertunjukkan atau menempelkan di muka umum tulisan, gambaran atau benda yang telah diketahui isinya melanggar kesusilaan, atau barang siapa dengan maksud untuk disiarkan, dipertunjukkan atau ditempelkan di muka umum, membikin tulisan, gambaran atau benda tersebut, memasukkannya ke dalam negeri, meneruskannya, mengeluarkannya dari negeri, atau memiliki persediaan, ataupun barang siapa secara terang-terangan atau dengan mengedarkan surat tanpa diminta, menawarkannya atau menunjukkannya sebagai bisa diperoleh, diancam dengan pidana penjara paling lama satu tahun enam bulan atau pidana denda paling tinggi empat ribu lima ratus rupiah. (2) Barang siapa menyiarkan, mempertunjukkan atau menempelkan di muka umum tulisan, gambaran atau benda yang melanggar kesusilaan, ataupun barang siapa dengan maksud untuk disiarkan, dipertunjukkan atau ditempelkan di muka umum, membikin, memasukkan ke dalam negeri, meneruskan mengeluarkannya dari negeri, atau memiliki persediaan, ataupun barang siapa secara terang-terangan atau dengan mengedarkan surat tanpa diminta, menawarkan, atau menunjuk sebagai bisa diperoleh, diancam, jika ada alasan kuat baginya untuk menduga bahwa tulisan, gambaran atau benda itu melanggar kesusilaan, dengan pidana paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (3) Kalau yang bersalah melakukan kejahatan tersebut dalam ayat pertama sebagai pencarian atau kebiasaan, dapat dijatuhkan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak tujuh puluh lima ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 283',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak sembilan ribu rupiah, barang siapa menawarkan, memberikan untuk terus maupun untuk sementara waktu, menyerahkan atau memperlihatkan tulisan, gambaran atau benda yang melanggar kesusilaan, maupun alat untuk mencegah atau menggugurkan kehamilan kepada seorang yang belum dewasa, dan yang diketahui atau sepatutnya harus diduga bahwa umumya belum tujuh belas tahun, jika isi tulisan, gambaran, benda atau alat itu telah diketahuinya. (2) Diancam dengan pidana yang sama, barang siapa membacakan isi tulisan yang melanggar kesusilaan di muka orang yang belum dewasa sebagaimana dimaksud dalam ayat yang lalu, jika isi tadi telah diketahuinya. (3) Diancam dengan pidana penjara paling lama empat bulan atau pidana kurungan paling lama tiga bulan atau pidana denda paling banyak sembilan ribu rupiah, barang siapa menawarkan, memberikan untuk terus maupun untuk sementara waktu, menyerahkan atau memperlihatkan, tulisan, gambaran atau benda yang melanggar kesusilaan, maupun alat untuk mencegah atau menggugurkan kehamilan kepada seorang yang belum dewasa sebagaimana dimaksud dalam ayat pertama, jika ada alasan kuat baginya untuk menduga, bahwa tulisan, gambaran atau benda yang melanggar kesusilaan atau alat itu adalah alat untuk mencegah atau menggugurkan kehamilan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 283 bis',
                'isi_pasal' => 'Jika yang bersalah melakukan salah satu kejahatan tersebut dalam pasal 282 dan 283 dalam menjalankan pencariannya dan ketika itu belum lampau dua tahun sejak adanya pemidanaan yang menjadi pasti karena kejahatan semacam itu juga, maka dapat dicabut haknya untuk menjalankan pencarian tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 284',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama sembilan bulan: 1. a. seorang pria yang telah kawin yang melakukan gendak (overspel), padahal diketahui bahwa pasal 27 BW berlaku baginya, b. seorang wanita yang telah kawin yang melakukan gendak, padahal diketahui bahwa pasal 27 BW berlaku baginya; 2. a. seorang pria yang turut serta melakukan perbuatan itu, padahal diketahuinya bahwa yang turut bersalah telah kawin; b. seorang wanita yang telah kawin yang turut serta melakukan perbuatan itu, padahal diketahui olehnya bahwa yang turut bersalah telah kawin dan pasal 27 BW berlaku baginya. (2) Tidak dilakukan penuntutan melainkan atas pengaduan suami/istri yang tercemar, dan bilamana bagi mereka berlaku pasal 27 BW, dalam tenggang waktu tiga bulan diikuti dengan permintaan bercerai atau pisah-meja dan ranjang karena alasan itu juga. (3) Terhadap pengaduan ini tidak berlaku pasal 72, 73, dan 75. (4) Pengaduan dapat ditarik kembali selama pemeriksaan dalam sidang pengadilan belum dimulai. (5) Jika bagi suami-istri berlaku pasal 27 BW, pengaduan tidak diindahkan selama perkawinan belum diputuskan karena perceraian atau sebelum putusan yang menyatakan pisah meja dan tempat tidur menjadi tetap.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 285',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan memaksa seorang wanita bersetubuh dengan dia di luar perkawinan, diancam karena melakukan perkosaan dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 286',
                'isi_pasal' => 'Barang siapa bersetubuh dengan seorang wanita di luar perkawinan, padahal diketahui bahwa wanita itu dalam keadaan pingsan atau tidak berdaya, diancam dengan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 287',
                'isi_pasal' => '(1) Barang siapa bersetubuh dengan seorang wanita di luar perkawinan, padahal diketahuinya atau sepatutnya harus diduganya bahwa umumya belum lima belas tahun, atau kalau umurnya tidak jelas, bahwa belum waktunya untuk dikawin, diancam dengan pidana penjara paling lama sembilan tahun. (2) Penuntutan hanya dilakukan atas pengaduan, kecuali jika umur wanita belum sampai dua belas tahun atau jika ada salah satu hal berdasarkan pasal 291 dan pasal 294.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 288',
                'isi_pasal' => '(1) Barang siapa dalam perkawinan bersetubuh dengan seorang wanita yang diketahuinya atau sepatutnya harus diduganya bahwa yang bersangkutan belum waktunya untuk dikawin, apabila perbuatan mengakibatkan luka-luka diancam dengan pidana penjara paling lama empat tahun. (2) Jika perbuatan mengakibatkan luka-luka berat, dijatuhkan pidana penjara paling lama delapan tahun. (3) Jika mengakibatkan mati, dijatuhkan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 289',
                'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan memaksa seorang untuk melakukan atau membiarkan dilakukan perbuatan cabul, diancam karena melakukan perbuatan yang menyerang kehormatan kesusilaan, dengan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 290',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tujuh tahun: 1. barang siapa melakukan perbuatan cabul dengan seorang, padahal diketahuinya bahwa orang itu pingsan atau tidak berdaya; 2. barang siapa melakukan perbuatan cabul dengan seorang padahal diketahuinya atau sepatutnya harus diduganya, bahwa umumya belum lima belas tahun atau kalau umumya tidak jelas, yang bersangkutan belum waktunya untuk dikawin; 3. barang siapa membujuk seseorang yang diketahuinya atau sepatutnya harus diduganya bahwa umurnya belum lima belas tahun atau kalau umumya tidak jelas yang bersangkutan atau kutan belum waktunya untuk dikawin, untuk melakukan atau membiarkan dilakukan perbuatan cabul, atau bersetubuh di luar perkawinan dengan orang lain.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 291',
                'isi_pasal' => '(1) Jika salah satu kejahatan berdasarkan pasal 286, 287, 289, dan 290 mengakibatkan luka-luka berat, dijatuhkan pidana penjara paling lama dua belas tahun; (2) Jika salah satu kejahatan berdasarkan pasal 285, 286, 287, 289 dan 290 mengakibatkan kematian dijatuhkan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 292',
                'isi_pasal' => 'Orang dewasa yang melakukan perbuatan cabul dengan orang lain sesama kelamin, yang diketahuinya atau sepatutnya harus diduganya belum dewasa, diancam dengan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 293',
                'isi_pasal' => '(1) Barang siapa dengan memberi atau menjanjikan uang atau barang, menyalahgunakan pembawa yang timbul dari hubungan keadaan, atau dengan penyesatan sengaja menggerakkan seorang belum dewasa dan baik tingkahlakunya untuk melakukan atau membiarkan dilakukan perbuatan cabul dengan dia, padahal tentang belum kedewasaannya, diketahui atau selayaknya harus diduganya, diancam dengan pidana penjara paling lama lima tahun. (2) Penuntutan hanya dilakukan atas pengaduan orang yang terhadap dirinya dilakukan kejahatan itu. (3) Tenggang waktu tersebut dalam pasal 74 bagi pengaduan ini adalah masing-masing sembilan bulan dan dua belas bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 294',
                'isi_pasal' => '(1) Barang siapa melakukan perbuatan cabul dengan anaknya, tirinya, anak angkatnya, anak di bawah pengawasannya yang belum dewasa, atau dengan orang yang belum dewasa yang pemeliharaannya, pendidikan atau penjagaannya diserahkan kepadanya, diancam dengan pidana penjara paling lama tujuh tahun. (2) Diancam dengan pidana yang sama: 1. pejabat yang melakukan perbuatan cabul dengan orang yang karena jabatan adalah bawahannya, atau dengan orang yang penjagaannya dipercayakan atau diserahkan kepadanya, 2. pengurus, dokter, guru, pegawai, pengawas atau pesuruh dalam penjara, tempat pekerjaan negara, tempat pendidikan, rumah piatu, rumah sakit, rumah sakit jiwa atau lembaga sosial, yang melakukan perbuatan cabul dengan orang yang dimasukkan ke dalamnya.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 295',
                'isi_pasal' => '(1) Diancam: 1. dengan pidana penjara paling lama lima tahun barang siapa dengan sengaja menyebabkan atau memudahkan dilakukannya perbuatan cabul oleh anaknya, anak tirinya, anak angkatnya, atau anak di bawah pengawasannya yang belum dewasa, atau oleh orang yang belum dewasa yang pemeliharaannya, pendidikan atau penjagaannya diserahkan kepadanya, ataupun oleh bujangnya atau bawahannya yang belum cukup umur, dengan orang lain; 2. dengan pidana penjara paling lama empat tahun barang siapa dengan sengaja menghubungkan atau memudahkan perbuatan cabul, kecuali yang tersebut dalam butir 1 di atas, yang dilakukan oleh orang yang diketahuinya belum dewasa atau yang sepatutnya harus diduganya demikian, dengan orang lain. (2) Jika yang melakukan kejahatan itu sebagai pencarian atau kebiasaan, maka pidana dapat ditambah sepertiga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 296',
                'isi_pasal' => 'Barang siapa dengan sengaja menyebabkan atau memudahkan perbuatan cabul oleh orang lain dengan orang lain, dan menjadikannya sebagai pencarian atau kebiasaan, diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak lima belas ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 297',
                'isi_pasal' => 'Perdagangan wanita dan perdagangan anak laki-laki yang belum dewasa, diancam dengan pidana penjara paling lama enam tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 298',
                'isi_pasal' => '(1) Dalam hal pemidanaan berdasarkan salah satu kejahatan dalam pasal 281, 284 - 290 dan 292 - 297, pencabutan hak-hak berdasarkan pasal 35 No. 1 - 5 dapat dinyatakan. (2) Jika yang bersalah melakukan salah satu kejahatan berdasarkan pasal 292 - 297 dalam melakukan pencariannya, maka hak untuk melakukan pencarian itu dapat dicabut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 299',
                'isi_pasal' => '(1) Barang siapa dengan sengaja mengobati seorang wanita atau menyuruh supaya diobati, dengan diberitahukan atau ditimbulkan harapan bahwa karena pengobatan itu hamilnya dapat digugurkan, diancam dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak empat puluh lima ribu rupiah. (2) Jika yang bersalah berbuat demikian untuk mencari keuntungan, atau menjadikan perbuatan tersebut sebagai pencarian atau kebiasaan, atau jika dia seorang tabib, bidan atau juruobat, pidananya dapat ditambah sepertiga. (3) Jika yang bersalah melakukan kejahatan tersebut dalam menjalankan pencariannya, dapat dicabut haknya untuk menjalankan pencarian itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 300',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama satu tahun atau denda paling banyak empat ribu lima ratus rupiah: 1. barang siapa dengan sengaja menjual atau memberikan minuman yang memabukkan kepada seseorang yang telah kelihatan mabuk; 2. barang siapa dengan sengaja membikin mabuk seorang anak yang umurnya belum cukup enam belas tahun; 3. barang siapa dengan kekerasan atau ancaman kekerasan memaksa orang untuk minum minuman yang memabukkan. (2) Jika perbuatan mengakibatkan luka-luka berat, yang bersalah diancam dengan pidana penjara paling lama tujuh tahun. (3) Jika perbuatan mengakibatkan kematian, yang bersalah diancam dengan pidana penjara paling lama sembilan tahun. (4) Jika yang bersalah melakukan kejahatan tersebut dalam menjalankan pencariannya, dapat dicabut haknya untuk menjalankan pencarian itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 301',
                'isi_pasal' => 'Barang siapa memberi atau menyerahkan kepada orang lain seorang anak yang ada di bawah kekuasaannya yang sah dan yang umurnya kurang dari dua belas tahun, padahal diketahui bahwa anak itu akan dipakai untuk atau di waktu melakukan pengemisan atau untuk pekerjaan yang berbahaya, atau yang dapat merusak kesehatannya, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 302',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah karena melakukan penganiayaan ringan terhadap hewan: 1. barang siapa tanpa tujuan yang patut atau secara melampaui batas, dengan sengaja menyakiti atau melukai hewan atau merugikan kesehatannya; 2. barang siapa tanpa tujuan yang patut atau dengan melampaui batas yang diperlukan untuk mencapai tujuan itu, dengan sengaja tidak memberi makanan yang diperlukan untuk hidup kepada hewan, yang seluruhnya atau sebagian menjadi kepunyaannya dan ada di bawah pengawasannya, atau kepada hewan yang wajib dipeliharanya. (2) Jika perbuatan itu mengakibatkan sakit lebih dari seminggu, atau cacat atau menderita luka-luka berat lainnya, atau mati, yang bersalah diancam dengan pidana penjara paling lama sembilan bulan, atau pidana denda paling banyak tiga ratus rupiah, karena penganiayaan hewan. (3) Jika hewan itu milik yang bersalah, maka hewan itu dapat dirampas. (4) Percobaan melakukan kejahatan tersebut tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 303',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama sepuluh tahun atau pidana denda paling banyak dua puluh lima juta rupiah, barang siapa tanpa mendapat izin: 1. dengan sengaja menawarkan atau memberikan kesempatan untuk permainan judi dan menjadikannya sebagai pencarian, atau dengan sengaja turut serta dalam suatu perusahaan untuk itu; 2. dengan sengaja menawarkan atau memberi kesempatan kepada khalayak umum untuk bermain judi atau dengan sengaja turut serta dalam perusahaan untuk itu, dengan tidak peduli apakah untuk menggunakan kesempatan adanya sesuatu syarat atau dipenuhinya sesuatu tata-cara; 3. menjadikan turut serta pada permainan judi sebagai pencarian. (2) Kalau yang bersalah melakukan kejahatan tersebut dalam menjalankan pencariannya, maka dapat dicabut haknya untuk menjalankan pencarian itu. (3) Yang disebut permainan judi adalah tiap-tiap permainan, di mana pada umumnya kemungkinan mendapat untung bergantung pada peruntungan belaka, juga karena pemainnya lebih terlatih atau lebih mahir. Di situ termasuk segala pertaruhan tentang keputusan perlombaan atau permainan lain-lainnya yang tidak diadakan antara mereka yang turut berlomba atau bermain, demikian juga segala pertaruhan lainnya.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'nomor_pasal' => 'Pasal 303 bis',
                'isi_pasal' => '(1) Diancam dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak sepuluh juta rupiah: 1. barang siapa menggunakan kesempatan main judi, yang diadakan dengan melanggar ketentuan Pasal 303; 2. barang siapa ikut serta main judi di jalan umum atau di pinggir jalan umum atau di tempat yang dapat dikunjungi umum, kecuali kalau ada izin dari penguasa yang berwenang yang telah memberi izin untuk mengadakan perjudian itu. (2) Jika ketika melakukan pelanggaran belum lewat dua tahun sejak ada pemidanaan yang menjadi tetap karena salah satu dari pelanggaran ini, dapat dikenakan pidana penjara paling lama enam tahun atau pidana denda paling banyak lima belas juta rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XV',
                'nomor_pasal' => 'Pasal 304',
                'isi_pasal' => 'Barang siapa dengan sengaja menempatkan atau membiarkan seorang dalam keadaan sengsara, padahal menurut hukum yang berlaku baginya atau karena persetujuan dia wajib memberi kehidupan, perawatan atau pemeliharaan kepada orang itu, diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XV',
                'nomor_pasal' => 'Pasal 305',
                'isi_pasal' => 'Barang siapa menempatkan anak yang umurnya belum tujuh tahun untuk ditemukan atau meninggalkan anak itu dengan maksud untuk melepaskan diri daripadanya, diancam dengan pidana penjara paling lama lima tahun enam bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XV',
                'nomor_pasal' => 'Pasal 306',
                'isi_pasal' => '(1) Jika salah satu perbuatan berdasarkan pasal 304 dan 305 mengakibatkan luka-luka berat, yang bersalah diancam dengan pidana penjara paling lama tujuh tahun enam bulan. (2) Jika mengakibatkan kematian pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XV',
                'nomor_pasal' => 'Pasal 307',
                'isi_pasal' => 'Jika yang melakukan kejahatan berdasarkan pasal 305 adalah bapak atau ibu dari anak itu, maka pidana yang ditentukan dalam pasal 305 dan 306 dapat ditambah dengan sepertiga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XV',
                'nomor_pasal' => 'Pasal 308',
                'isi_pasal' => 'Jika seorang ibu karena takut akan diketahui orang tentang kelahiran anaknya, tidak lama sesudah melahirkan, menempatkan anaknya untuk ditemukan atau meninggalkannya dengan maksud untuk melepaskan diri daripadanya, maka maksimum pidana tersebut dalam pasal 305 dan 306 dikurangi separuh.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XV',
                'nomor_pasal' => 'Pasal 309',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan dalam pasal 304 - 308, maka hak-hak tersebut dalam pasal 35 No. 4 dapat dicabut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 310',
                'isi_pasal' => '(1) Barang siapa sengaja menyerang kehormatan atau nama baik seseorang dengan menuduhkan sesuatu hal, yang maksudnya terang supaya hal itu diketahui umum, diancam karena pencemaran dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika hal itu dilakukan dengan tulisan atau gambaran yang disiarkan, dipertunjukkan atau ditempelkan di muka umum, maka diancam karena pencemaran tertulis dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. (3) Tidak merupakan pencemaran atau pencemaran tertulis, jika perbuatan jelas dilakukan demi kepentingan umum atau karena terpaksa untuk membela diri.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 311',
                'isi_pasal' => '(1) Jika yang melakukan kejahatan pencemaran atau pencemaran tertulis dibolehkan untuk membuktikan apa yang dituduhkan itu benar, tidak membuktikannya, dan tuduhan dilakukan bertentangan dengan apa yang diketahui, maka dia diancam melakukan fitnah dengan pidana penjara paling lama empat tahun. (2) Pencabutan hak-hak berdasarkan pasal 35 No. 1 - 3 dapat dijatuhkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 312',
                'isi_pasal' => 'Pembuktian akan kebenaran tuduhan hanya dibolehkan dalam hal-hal berikut: 1. apabila hakim memandang perlu untuk memeriksa kebenaran itu guna menimbang keterangan terdakwa, bahwa perbuatan dilakukan demi kepentingan umum, atau karena terpaksa untuk membela diri; 2. apabila seorang pejabat dituduh sesuatu hal dalam menjalankan tugasnya.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 313',
                'isi_pasal' => 'Pembuktian yang dimaksud dalam pasal 312 tidak dibolehkan, jika hal yang dituduhkan hanya dapat dituntut atas pengaduan dan pengaduan tidak dimajukan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 314',
                'isi_pasal' => '(1) Jika yang dihina, dengan putusan hakim yang menjadi tetap, dinyatakan bersalah atas hal yang dituduhkan, maka pemidanaan karena fitnah tidak mungkin. (2) Jika dia dengan putusan hakim yang menjadi tetap dibebaskan dari hal yang dituduhkan, maka putusan itu dipandang sebagai bukti sempurna bahwa hal yang dituduhkan tidak benar. (3) Jika terhadap yang dihina telah dimulai penuntutan pidana karena hal yang dituduhkan padanya, maka penuntutan karena fitnah dihentikan sampai mendapat putusan yang menjadi tetap tentang hal yang dituduhkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 315',
                'isi_pasal' => 'Tiap-tiap penghinaan dengan sengaja yang tidak bersifat pencemaran atau pencemaran tertulis yang dilakukan terhadap seseorang, baik di muka umum dengan lisan atau tulisan, maupun di muka orang itu sendiri dengan lisan atau perbuatan, atau dengan surat yang dikirimkan atau diterimakan kepadanya, diancam karena penghinaan ringan dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 316',
                'isi_pasal' => 'Pidana yang ditentukan dalam pasal-pasal sebelumnya dalam bab ini, dapat ditambah dengan sepertiga jika yang dihina adalah seorang pejabat pada waktu atau karena menjalankan tugasnya yang sah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 317',
                'isi_pasal' => '(1) Barang siapa dengan sengaja mengajukan pengaduan atau pemberitahuan palsu kepada penguasa, baik secara tertulis maupun untuk dituliskan, tentang seseorang sehingga kehormatan atau nama baiknya terserang, diancam karena melakukan pengaduan fitnah, dengan pidana penjara paling lama empat tahun. (2) Pencabutan hak-hak berdasarkan pasal 35 No. 1 - 3 dapat dijatuhkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 318',
                'isi_pasal' => '(1) Barang siapa dengan sesuatu perbuatan sengaja menimbulkan secara palsu persangkaan terhadap seseorang bahwa dia melakukan suatu perbuatan pidana, diancam karena menimbulkan persangkaan palsu, dengan pidana penjara paling lama empat tahun. (2) Pencabutan hak-hak berdasarkan pasal 35 No. 1 - 3 dapat dijatuhkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 319',
                'isi_pasal' => 'Penghinaan yang diancam dengan pidana menurut bab ini, tidak dituntut jika tidak ada pengaduan dari orang yang terkena kejahatan itu, kecuali berdasarkan pasal 316.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 320',
                'isi_pasal' => '(1) Barang siapa terhadap seseorang yang sudah mati melakukan perbuatan yang kalau orang itu masih hidup akan merupakan pencemaran atau pencemaran tertulis, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah. (2) Kejahatan ini tidak dituntut kalau tidak ada pengaduan dari salah seorang keluarga sedarah maupun semenda dalam garis lurus atau menyimpang sampai derajat kedua dari yang mati itu, atau atas pengaduan suami (istri)nya. (3) Jika karena lembaga matriarkal kekuasaan bapak dilakukan oleh orang lain daripada bapak, maka kejahatan juga dapat dituntut atas pengaduan orang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'nomor_pasal' => 'Pasal 321',
                'isi_pasal' => 'Barang siapa menyiarkan, mempertunjukkan atau menempelkan di muka umum tulisan atau gambaran yang isinya menghina atau bagi orang yang sudah mati mencemarkan namanya, dengan maksud supaya isi surat atau gambar itu ditahui atau lebih diketahui oleh umum, diancam dengan pidana penjara paling lama satu tahun dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah. Jika yang bersalah melakukan kejahatan tersebut dalam menjalankan pencariannya, sedangkan ketika itu belum lampau dua tahun sejak adanya pemidanaan yang menjadi tetap karena kejahatan semacam itu juga, maka dapat dicabut haknya untuk menjalankan pencarian tersebut. Kejahatan ini tidak dituntut kalau tidak ada pengaduan dari orang yang ditunjuk dalam pasal 319 dan pasal 320, ayat kedua dan ketiga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVII',
                'nomor_pasal' => 'Pasal 322',
                'isi_pasal' => 'Barang siapa dengan sengaja membuka rahasia yang wajib disimpannya karena jabatan atau pencariannya, baik yang sekarang maupun yang dahulu, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak sembilan ribu rupiah. Jika kejahatan dilakukan terhadap seorang tertentu, maka perbuatan itu hanya dapat dituntut atas pengaduan orang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVII',
                'nomor_pasal' => 'Pasal 323',
                'isi_pasal' => 'Barang siapa dengan sengaja memberitahukan hal-hal khusus tentang suatu perusahaan dagang, kerajinan atau pertanian, di mana ia bekerja atau dahulu bekerja, yang harus dirahasiakannya, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak sembilan ribu rupiah. Kejahatan ini hanya dituntut atas pengaduan pengurus perusahaan itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 324',
                'isi_pasal' => 'Barang siapa dengan biaya sendiri atau biaya orang lain menjalankan perniagaan budak atau melakukan perbuatan perniagaan budak atau dengan sengaja turut serta secara langsung atau tidak langsung dalam salah satu perbuatan tersebut di atas, diancam dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 325',
                'isi_pasal' => 'Barang siapa sebagai nakoda bekerja atau bertugas di kapal, sedang diketahuinya bahwa kapal itu dipergunakan untuk tujuan pemiagaan budak, atau dipakai kapal itu untuk perniagaan budak, diancam dengan pidana penjara paling lama dua belas tahun. Bilamana pengangkutan itu mengakibatkan kematian seorang budak atau lebih, maka nakoda diancam dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 326',
                'isi_pasal' => 'Barang siapa bekerja sebagai awak kapal di sebuah kapal, sedang diketahuinya bahwa kapal itu dipergunakan untuk tujuan atau keperluan perniagaan budak, atau dengan sukarela tetap berengas setelah mendengar bahwa kapal itu dipergunakan untuk tujuan atau keperluan perniagaan budak, diancam dengan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 327',
                'isi_pasal' => 'Barang siapa dengan biaya sendiri atau biaya orang lain, secara langsung atau tidak langsung bekerja sama untuk menyewakan, mengangkutkan atau mengasuransikan sebuah kapal, sedang diketahuinya bahwa kapal itu dipergunakan untuk tujuan perniagaan budak, diancam dengan pidana penjara paling lama delapan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 328',
                'isi_pasal' => 'Barang siapa membawa pergi seorang dari tempat kediamannya atau tempat tinggalnya sementara dengan maksud untuk menempatkan orang itu secara melawan hukum di bawah kekuasaannya atau kekuasaan orang lain, atau untuk menempatkan dia dalam keadaan sengsara, diancam karena penculikan dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 329',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum mengangkut orang ke daerah lain, padahal orang itu telah membuat perjanjian untuk bekerja di suatu tempat tertentu, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 330',
                'isi_pasal' => 'Barang siapa dengan sengaja menarik seorang yang belum cukup umur dari kekuasaan yang menurut undang-undang ditentukan atas dirinya, atau dari pengawasan orang yang berwenang untuk itu, diancam dengan pidana penjara paling lama tujuh tahun. Bilamana dalam hal ini dilakukan tipu muslihat, kekerasan atau ancaman kekerasan, atau bilamana anaknya belum berumur dua belas tahun, dijatuhkan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 331',
                'isi_pasal' => 'Orang siapa dengan sengaja menyembunyikan orang yang belum dewasa yang ditarik atau menarik sendiri dari kekuasaan yang menurut undang-undang ditentukan atas dirinya, atau dari pengawasan orang yang berwenang untuk itu, atau dengan sengaja menariknya dari pengusutan pejabat kehakiman atau kepolisian diancam dengan penjara paling lama empat tahun, atau jika anak itu berumur di bawah dua belas tahun, dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 332',
                'isi_pasal' => 'Bersalah melarikan wanita diancam dengan pidana penjara: 1. paling lama tujuh tahun, barang siapa membawa pergi seorang wanita yang belum dewasa, tanpa dikehendaki orang tuanya atau walinya tetapi dengan persetujuannya, dengan maksud untuk memastikan penguasaan terhadap wanita itu, baik di dalam maupun di luar perkawinan; 2. paling lama sembilan tahun, barang siapa membawa pergi seorang wanita dengan tipu muslihat, kekerasan atau ancaman kekerasan, dengan maksud untuk memastikan penguasaannya terhadap wanita itu, baik di dalam maupun di luar perkawinan. Penuntutan hanya dilakukan atas pengaduan. Pengaduan dilakukan: a. jika wanita ketika dibawa pergi belum dewasa, oleh dia sendiri atau orang lain yang harus memberi izin bila dia kawin; b. jika wanita ketika dibawa pergi sudah dewasa, oleh dia sendiri atau oleh suaminya. Jika yang membawa pergi lalu kawin dengan wanita yang dibawa pergi dan terhadap perkawinan itu berlaku aturan-aturan Burgerlijk Wetboek, maka tak dapat dijatuhkan pidana sebelum perkawinan itu dinyatakan batal.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 333',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum merampas kemerdekaan seseorang, atau meneruskan perampasan kemerdekaan yang demikian, diancam dengan pidana penjara paling lama delapan tahun. Jika perbuatan itu mengakibatkan luka-luka berat maka yang bersalah diancam dengan pidana penjara paling lama sembilan tahun. Jika mengakibatkan mati diancam dengan pidana penjara paling lama dua belas tahun. Pidana yang ditentukan dalam pasal ini diterapkan juga bagi orang yang dengan sengaja dan melawan hukum memberi tempat untuk perampasan kemerdekaan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 334',
                'isi_pasal' => 'Barang siapa karena kealpaannya menyebabkan seorang dirampas kemerdekaannya secara melawan hukum, atau diteruskannya perampasan kemerdekaan yang demikian, diancam dengan pidana kurungan paling lama tiga bulan atau pidana denda paling banyak tiga ratus rupiah. Jika perbuatan itu mengakibatkan luka-luka berat, maka yang bersalah diancam dengan pidana kurungan paling lama sembilan bulan. Jika mengakibatkan mati, diancam dengan pidana kurungan paling lama satu tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 335',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama satu tahun atau denda paling banyak empat ribu lima ratus rupiah: 1. barang siapa secara melawan hukum memaksa orang lain supaya melakukan, tidak melakukan atau membiarkan sesuatu, dengan memakai kekerasan, sesuatu perbuatan lain maupun perlakuan yang tak menyenangkan, atau dengan memakai ancaman kekerasan, sesuatu perbuatan lain maupun perlakuan yang tak menyenangkan, baik terhadap orang itu sendiri maupun orang lain; 2. barang siapa memaksa orang lain supaya melakukan, tidak melakukan atau membiarkan sesuatu dengan ancaman pencemaran atau pencemaran tertulis. Dalam hal sebagaimana dirumuskan dalam butir 2, kejahatan hanya dituntut atas pengaduan orang yang terkena.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 336',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama dua tahun delapan bulan, barang siapa mengancam dengan kekerasan terhadap orang atau barang secara terang-terangan dengan tenaga bersama, dengan suatu kejahatan yang menimbulkan bahaya umum bagi keamanan orang atau barang, dengan perkosaan atau perbuatan yang melanggar kehormatan kesusilaan, dengan sesuatu kejahatan terhadap nyawa, dengan penganiayaan berat atau dengan pembakaran. Bilamana ancaman dilakukan secara tertulis dan dengan syarat tertentu, maka dikenakan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'nomor_pasal' => 'Pasal 337',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan dalam pasal 324 - 333 dan pasal 336 ayat kedua, dapat dijatuhkan pencabutan hak berdasarkan pasal 35 No. 1 - 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 338',
                'isi_pasal' => 'Barang siapa dengan sengaja merampas nyawa orang lain, diancam karena pembunuhan dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 339',
                'isi_pasal' => 'Pembunuhan yang diikuti, disertai atau didahului oleh suatu perbuatan pidana, yang dilakukan dengan maksud untuk mempersiapkan atau mempermudah pelaksanaannya, atau untuk melepaskan diri sendiri maupun peserta lainnya dari pidana dalam hal tertangkap tangan, ataupun untuk memastikan penguasaan barang yang diperolehnya secara melawan hukum, diancam dengan pidana penjara seumur hidup atau selama waktu tertentu, paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 340',
                'isi_pasal' => 'Barang siapa dengan sengaja dan dengan rencana terlebih dahulu merampas nyawa orang lain, diancam karena pembunuhan dengan rencana, dengan pidana mati atau pidana penjara seumur hidup atau selama waktu tertentu, paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 341',
                'isi_pasal' => 'Seorang ibu yang karena takut akan ketahuan melahirkan anak pada saat anak dilahirkan atau tidak lama kemudian, dengan sengaja merampas nyawa anaknya, diancam karena membunuh anak sendiri, dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 342',
                'isi_pasal' => 'Seorang ibu yang untuk melaksanakan niat yang ditentukan karena takut akan ketahuan bahwa ia akan melahirkan anak pada saat anak dilahirkan atau tidak lama kemudian merampas nyawa anaknya, diancam karena melakukan pembunuhan anak sendiri dengan rencana, dengan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 343',
                'isi_pasal' => 'Kejahatan yang diterangkan dalam pasal 341 dan 342 dipandang bagi orang lain yang turut serta melakukan, sebagai pembunuhan atau pembunuhan anak dengan rencana.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 344',
                'isi_pasal' => 'Barang siapa merampas nyawa orang lain atas permintaan orang itu sendiri yang jelas dinyatakan dengan kesungguhan hati, diancam dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 345',
                'isi_pasal' => 'Barang siapa sengaja mendorong orang lain untuk bunuh diri, menolongnya dalam perbuatan itu atau memberi sarana kepadanya untuk itu, diancam dengan pidana penjara paling lama empat tahun kalau orang itu jadi bunuh diri.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 346',
                'isi_pasal' => 'Seorang wanita yang sengaja menggugurkan atau mematikan kandungannya atau menyuruh orang lain untuk itu, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 347',
                'isi_pasal' => 'Barang siapa dengan sengaja menggugurkan atau mematikan kandungan seorang wanita tanpa persetujuannya, diancam dengan pidana penjara paling lama dua belas tahun. Jika perbuatan itu mengakibatkan matinya wanita tersebut diancam dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 348',
                'isi_pasal' => 'Barang siapa dengan sengaja menggugurkan atau mematikan kandungan seorang wanita dengan persetujuannya, diancam dengan pidana penjara paling lama lima tahun enam bulan. Jika perbuatan itu mengakibatkan matinya wanita tersebut, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 349',
                'isi_pasal' => 'Jika seorang dokter, bidan atau juru obat membantu melakukan kejahatan berdasarkan pasal 346, ataupun melakukan atau membantu melakukan salah satu kejahatan yang diterangkan dalam pasal 347 dan 348, maka pidana yang ditentukan dalam pasal itu dapat ditambah dengan sepertiga dan dapat dicabut hak untuk menjalankan pencarian dalam mana kejahatan dilakukan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'nomor_pasal' => 'Pasal 350',
                'isi_pasal' => 'Dalam hal pemidanaan karena pembunuhan, karena pembunuhan dengan rencana, atau karena salah satu kejahatan berdasarkan Pasal 344, 347 dan 348, dapat dijatuhkan pencabutan hak berdasarkan pasal 35 No. 1- 5.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 351',
                'isi_pasal' => 'Penganiayaan diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. Jika perbuatan mengakibatkan luka-luka berat, yang bersalah diancam dengan pidana penjara paling lama lima tahun. Jika mengakibatkan mati, diancam dengan pidana penjara paling lama tujuh tahun. Dengan penganiayaan disamakan sengaja merusak kesehatan. Percobaan untuk melakukan kejahatan ini tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 352',
                'isi_pasal' => 'Kecuali yang tersebut dalam pasal 353 dan 356, maka penganiayaan yang tidak menimbulkan penyakit atau halangan untuk menjalankan pekerjaan jabatan atau pencarian, diancam, sebagai penganiayaan ringan, dengan pidana penjara paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah. Pidana dapat ditambah sepertiga bagi orang yang melakukan kejahatan itu terhadap orang yang bekerja padanya, atau menjadi bawahannya. Percobaan untuk melakukan kejahatan ini tidak dipidana.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 353',
                'isi_pasal' => 'Penganiayaan dengan rencana lebih dahulu, diancam dengan pidana penjara paling lama empat tahun. Jika perbuatan itu mengakibatkan luka-luka berat, yang bersalah dikenakan pidana penjara paling lama tujuh tahun. Jika perbuatan itu mengakibatkan kematian, yang bersalah diancam dengan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 354',
                'isi_pasal' => 'Barang siapa sengaja melukai berat orang lain, diancam karena melakukan penganiayaan berat dengan pidana penjara paling lama delapan tahun. Jika perbuatan itu mengakibatkan kematian, yang bersalah diancam dengan pidana penjara paling lama sepuluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 355',
                'isi_pasal' => 'Penganiayaan berat yang dilakukan dengan rencana terlebih dahulu, diancam dengan pidana penjara paling lama dua belas tahun. Jika perbuatan itu mengakibatkan kematian, yang bersalah diancam dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 356',
                'isi_pasal' => 'Pidana yang ditentukan dalam pasal 351, 353, 354 dan 355 dapat ditambah dengan sepertiga: 1. bagi yang melakukan kejahatan itu terhadap ibunya, bapaknya yang sah, istrinya atau anaknya; 2. jika kejahatan itu dilakukan terhadap seorang pejabat ketika atau karena menjalankan tugasnya yang sah; 3. jika kejahatan itu dilakukan dengan memberikan bahan yang berbahaya bagi nyawa atau kesehatan untuk dimakan atau diminum.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 357',
                'isi_pasal' => 'Dalam hal pemidanaan karena salah satu kejahatan berdasarkan pasal 353 dan 355, dapat dijatuhkan pencabutan hak berdasarkan pasal 35 No. 1 - 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'nomor_pasal' => 'Pasal 358',
                'isi_pasal' => 'Mereka yang sengaja turut serta dalam penyerangan atau perkelahian di mana terlibat beberapa orang, selain tanggung jawab masing-masing terhadap apa yang khusus dilakukan olehnya, diancam: 1. dengan pidana penjara paling lama dua tahun delapan bulan, jika akibat penyerangan atau perkelahian itu ada yang luka-luka berat; 2. dengan pidana penjara paling lama empat tahun, jika akibatnya ada yang mati.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXI',
                'nomor_pasal' => 'Pasal 359',
                'isi_pasal' => 'Barang siapa karena kesalahannya (kealpaannya) menyebabkan orang lain mati, diancam dengan pidana penjara paling lama lima tahun atau pidana kurungan paling lama satu tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXI',
                'nomor_pasal' => 'Pasal 360',
                'isi_pasal' => 'Barang siapa karena kesalahannya (kealpaannya) menyebabkan orang lain mendapat luka-luka berat, diancam dengan pidana penjara paling lama lima tahun atau pidana kurungan paling lama satu tahun. Barang siapa karena kesalahannya (kealpaannya) menyebabkan orang lain luka-luka sedemikian rupa sehingga timbul penyakit atau halangan menjalankan pekerjaan jabatan atau pencarian selama waktu tertentu, diancam dengan pidana penjara paling lama sembilan bulan atau pidana kurungan paling lama enam bulan atau pidana denda paling tinggi empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXI',
                'nomor_pasal' => 'Pasal 361',
                'isi_pasal' => 'Jika kejahatan yang diterangkan dalam bab ini dilakukan dalam menjalankan suatu jabatan atau pencarian, maka pidana ditambah dengan sepertiga dan yang bersalah dapat dicabut haknya untuk menjalankan pencarian dalam mana dilakukan kejahatan dan hakim dapat memerintahkan supaya putusannya diumumkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXII',
                'nomor_pasal' => 'Pasal 362',
                'isi_pasal' => 'Barang siapa mengambil barang sesuatu, yang seluruhnya atau sebagian kepunyaan orang lain, dengan maksud untuk dimiliki secara melawan hukum, diancam karena pencurian, dengan pidana penjara paling lama lima tahun atau pidana denda paling banyak sembilan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXII',
                'nomor_pasal' => 'Pasal 363',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tujuh tahun: 1. pencurian ternak; 2. pencurian pada waktu ada kebakaran, letusan, banjir, gempa bumi, atau gempa laut, gunung meletus, kapal karam, kapal terdampar, kecelakaan kereta api, huru-hara, pemberontakan atau bahaya perang; 3. pencurian di waktu malam dalam sebuah rumah atau pekarangan tertutup yang ada rumahnya, yang dilakukan oleh orang yang ada di situ tidak diketahui atau tidak dikehendaki oleh yang berhak; 4. pencurian yang dilakukan oleh dua orang atau lebih; 5. pencurian yang untuk masuk ke tempat melakukan kejahatan, atau untuk sampai pada barang yang diambil, dilakukan dengan merusak, memotong atau memanjat, atau dengan memakai anak kunci palsu, perintah palsu atau pakaian jabatan palsu. Jika pencurian yang diterangkan dalam butir 3 disertai dengan salah satu hal dalam butir 4 dan 5, maka diancam dengan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXII',
                'nomor_pasal' => 'Pasal 364',
                'isi_pasal' => 'Perbuatan yang diterangkan dalam pasal 362 dan pasal 363 butir 4, begitu pun perbuatan yang diterangkan dalam pasal 363 butir 5, apabila tidak dilakukan dalam sebuah rumah atau pekarangan tertutup yang ada rumahnya, jika harga barang yang dicuri tidak lebih dari dua puluh lima rupiah, diancam karena pencurian ringan dengan pidana penjara paling lama tiga bulan atau pidana denda paling banyak dua ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXII',
                'nomor_pasal' => 'Pasal 365',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama sembilan tahun pencurian yang didahului, disertai atau diikuti dengan kekerasan atau ancaman kekerasan, terhadap orang dengan maksud untuk mempersiapkan atau mempermudah pencurian, atau dalam hal tertangkap tangan, untuk memungkinkan melarikan diri sendiri atau peserta lainnya, atau untuk tetap menguasai barang yang dicuri. Diancam dengan pidana penjara paling lama dua belas tahun: 1. jika perbuatan dilakukan pada waktu malam dalam sebuah rumah atau pekarangan tertutup yang ada rumahnya, di berjalan; 2. jika perbuatan dilakukan oleh dua orang atau lebih dengan bersekutu; 3. jika masuk ke tempat melakukan kejahatan dengan merusak atau memanjat atau dengan memakai anak kunci palsu, perintah palsu atau pakaian jabatan palsu; 4. jika perbuatan mengakibatkan luka-luka berat. Jika perbuatan mengakibatkan kematian maka diancam dengan pidana penjara paling lama lima belas tahun. Diancam dengan pidana mati atau pidana penjara seumur hidup atau selama waktu tertentu paling lama dua puluh tahun, jika perbuatan mengakibatkan luka berat atau kematian dan dilakukan oleh dua orang atau lebih dengan bersekutu, disertai pula oleh salah satu hal yang diterangkan dalam no. 1 dan 3.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXII',
                'nomor_pasal' => 'Pasal 366',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu perbuatan yang dirumuskan dalam pasal 362, 363, dan 365 dapat dijatuhkan pencabutan hak berdasarkan pasal 35 No. 1 - 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXII',
                'nomor_pasal' => 'Pasal 367',
                'isi_pasal' => 'Jika pembuat atau pembantu dari salah satu kejahatan dalam bab ini adalah suami (istri) dari orang yang terkena kejahatan dan tidak terpisah meja dan ranjang atau terpisah harta kekayaan, maka terhadap pembuat atau pembantu itu tidak mungkin diadakan tuntutan pidana. Jika dia adalah suami (istri) yang terpisah meja dan ranjang atau terpisah harta kekayaan, atau jika dia adalah keluarga sedarah atau semenda, baik dalam garis lurus maupun garis menyimpang derajat kedua maka terhadap orang itu hanya mungkin diadakan penuntutan jika ada pengaduan yang terkena kejahatan. Jika menurut lembaga matriarkal kekuasaan bapak dilakukan oleh orang lain daripada bapak kandung (sendiri), maka ketentuan ayat di atas berlaku juga bagi orang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIII',
                'nomor_pasal' => 'Pasal 368',
                'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, memaksa seorang dengan kekerasan atau ancaman kekerasan untuk memberikan barang sesuatu, yang seluruhnya atau sebagian adalah kepunyaan orang itu atau orang lain, atau supaya membuat hutang maupun menghapuskan piutang, diancam karena pemerasan dengan pidana penjara paling lama sembilan bulan. Ketentuan pasal 365 ayat kedua, ketiga, dan keempat berlaku bagi kejahatan ini.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIII',
                'nomor_pasal' => 'Pasal 369',
                'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, dengan ancaman pencemaran baik dengan lisan maupun tulisan, atau dengan ancaman akan membuka rahasia, memaksa seorang supaya memberikan barang sesuatu yang seluruhnya atau sebagian kepunyaan orang itu atau orang lain, atau supaya membuat hutang atau menghapuskan piutang, diancam dengan pidana penjara paling lama empat tahun. Kejahatan ini tidak dituntut kecuali atas pengaduan orang yang terkena kejahatan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIII',
                'nomor_pasal' => 'Pasal 370',
                'isi_pasal' => 'Ketentuan pasal 367 berlaku bagi kejahatan-kejahatan yang dirumuskan dalam bab ini.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIII',
                'nomor_pasal' => 'Pasal 371',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan yang dirumuskan dalam bab ini dapat dijatuhkan pencabutan hak berdasarkan pasal 35 no. 1 - 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIV',
                'nomor_pasal' => 'Pasal 372',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum memiliki barang sesuatu yang seluruhnya atau sebagian adalah kepunyaan orang lain, tetapi yang ada dalam kekuasaannya bukan karena kejahatan, diancam karena penggelapan, dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak sembilan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIV',
                'nomor_pasal' => 'Pasal 373',
                'isi_pasal' => 'Perbuatan yang dirumuskan dalam pasal 372 apabila yang digelapkan bukan ternak dan harganya tidak lebih dari dua puluh lima rupiah, diancam sebagai penggelapan ringan dengan pidana penjara paling lama tiga bulan atau pidana denda paling banyak dua ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIV',
                'nomor_pasal' => 'Pasal 374',
                'isi_pasal' => 'Penggelapan yang dilakukan oleh orang yang penguasaannya terhadap barang disebabkan karena ada hubungan kerja atau karena pencarian atau karena mendapat upah untuk itu, diancam dengan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIV',
                'nomor_pasal' => 'Pasal 375',
                'isi_pasal' => 'Penggelapan yang dilakukan oleh orang yang karena terpaksa diberi'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIV',
                'nomor_pasal' => 'Pasal 376',
                'isi_pasal' => 'Ketentuan dalam pasal 367 berlaku bagi kejahatan-kejahatan yang dirumuskan dalam bab ini.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIV',
                'nomor_pasal' => 'Pasal 377',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan yang dirumuskan dalam pasal 372, 374, dan 375 hakim dapat memerintahkan supaya putusan diumumkan dan dicabutnya hak-hak berdasarkan pasal 35 No. 1 - 4. Jika kejahatan dilakukan dalam menjalankan pencarian maka dapat dicabut haknya untuk menjalankan pencarian itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 378',
                'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, dengan memakai nama palsu atau martabat palsu, dengan tipu muslihat, ataupun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu kepadanya, atau supaya memberi hutang maupun menghapuskan piutang diancam karena penipuan dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 379',
                'isi_pasal' => 'Perbuatan yang dirumuskan dalam pasal 378, jika barang yang diserahkan itu bukan ternak dan harga daripada barang, hutang atau piutang itu tidak lebih dari dua puluh lima rupiah diancam sebagai penipuan ringan dengan pidana penjara paling lama tiga bulan atau pidana denda paling banyak dua ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 379a',
                'isi_pasal' => 'Barang siapa menjadikan sebagai mata pencarian atau kebiasaan untuk membeli barang-barang, dengan maksud supaya tanpa pembayaran seluruhnya memastikan penguasaan terhadap barang-barang itu untuk diri sendiri maupun orang lain diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 380',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak lima ribu rupiah: 1. barang siapa menaruh suatu nama atau tanda secara palsu di atas atau di dalam suatu hasil kesusastraan, keilmuan, kesenian atau kerajinan, atau memalsu nama atau tanda yang asli, dengan maksud supaya orang mengira bahwa itu benar-benar buah hasil orang yang nama atau tandanya ditaruh olehnya di atas atau di dalamnya tadi; 2. barang siapa dengan sengaja menjual menawarkan menyerahkan, mempunyai persediaan untuk dijual atau memasukkan ke Indonesia, hasil kesusastraan, keilmuan, kesenian atau kerajinan, yang di dalam atau di atasnya telah ditaruh nama atau tanda yang palsu, atau yang nama atau tandanya yang asli telah dipalsu, seakan-akan itu benar-benar hasil orang yang nama atau tandanya telah ditaruh secara palsu tadi. Jika hasil itu kepunyaan terpidana, maka boleh dirampas.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 381',
                'isi_pasal' => 'Barang siapa dengan jalan tipu muslihat menyesatkan penanggung asuransi mengenai keadaan-keadaan yang berhubungan dengan pertanggungan sehingga disetujui perjanjian, hal mana tentu tidak akan disetujuinya atau setidak-tidaknya tidak dengan syarat-syarat yang demikian, jika diketahuinya keadaan-keadaan sebenarnya diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 382',
                'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, atas kerugian penanggung asuransi atau pemegang surat bodemerij yang sah, menimbulkan kebakaran atau ledakan pada suatu barang yang dipertanggungkan terhadap bahaya kebakaran, atau mengaramkan, mendamparkan, menghancurkan, merusakkan, atau membikin tak dapat dipakai, kapal yang dipertanggungkan atau yang muatannya maupun upah yang akan diterima untuk pengangkutan muatannya yang dipertanggungkan, ataupun yang atasnya telah diterima uang bodemerij diancam dengan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 382 bis',
                'isi_pasal' => 'Barang siapa untuk mendapatkan, melangsungkan atau memperluas hasil perdagangan atau perusahaan milik sendiri atau orang lain, melakukan perbuatan curang untuk menyesatkan khalayak umum atau seorang tertentu, diancam, jika perbuatan itu dapat menimbulkan kerugian bagi konkuren-konkurennya atau konguren-konguren orang lain, karena persaingan curang, dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak tiga belas ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 383',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama satu tahun empat bulan, seorang penjual yang berbuat curang terhadap pembeli: 1. karena sengaja menyerahkan barang lain daripada yang ditunjuk untuk dibeli; 2. mengenai jenis, keadaan atau jumlah barang yang diserahkan, dengan menggunakan tipu muslihat.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 383 bis',
                'isi_pasal' => 'Seorang pemegang konosemen yang sengaja mempergunakan beberapa eksemplar dari surat tersebut dengan titel yang memberatkan, dan untuk beberapa orang penerima, diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 384',
                'isi_pasal' => 'Perbuatan yang dirumuskan dalam pasal 383, diancam dengan pidana penjara paling lama tiga bulan atau denda paling banyak dua ratus lima puluh rupiah, jika jumlah keuntungan yang diperoleh tidak lebih dari dua puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 385',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama empat tahun: 1. barang siapa dengan maksud menguntungkan diri sendiri atau orang lain secara melawan hukum, menjual, menukarkan atau membebani dengan creditverband sesuatu hak tanah yang telah bersertifikat, sesuatu gedung, bangunan, penanaman atau pembenihan di atas tanah yang belum bersertifikat, padahal diketahui bahwa yang mempunyai atau turut mempunyai hak di atasnya adalah orang lain; 2. barang siapa dengan maksud yang sama menjual, menukarkan atau membebani dengan creditverband, sesuatu hak tanah yang belum bersertifikat yang telah dibebani creditverband atau sesuatu gedung bangunan, penanaman atau pembenihan di atas tanah yang juga telah dibebani demikian, tanpa memberitahukan tentang adanya beban itu kepada pihak yang lain; 3. barang siapa dengan maksud yang sama mengadakan creditverband mengenai sesuatu hak tanah yang belum bersertifikat, dengan menyembunyikan kepada pihak lain bahwa tanah yang berhubungan dengan hak tadi sudah digadaikan; 4. barang siapa dengan maksud yang sama, menggadaikan atau menyewakan tanah dengan hak tanah yang belum bersertifikat padahal diketahui bahwa orang lain yang mempunyai atau turut mempunyai hak atas tanah itu; 5. barang siapa dengan maksud yang sama, menjual atau menukarkan tanah dengan hak tanah yang belum bersertifikat yang telah digadaikan, padahal tidak diberitahukannya kepada pihak yang lain bahwa tanah itu telah digadaikan; 6. barang siapa dengan maksud yang sama menjual atau menukarkan tanah dengan hak tanah yang belum bersertifikat untuk suatu masa, padahal diketahui, bahwa tanah itu telah disewakan kepada orang lain untuk masa itu juga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 386',
                'isi_pasal' => 'Barang siapa menjual, menawarkan atau menyerahkan barang makanan, minuman atau obat-obatan yang diketahuinya bahwa itu dipalsu, dan menyembunyikan hal itu, diancam dengan pidana penjara paling lama empat tahun. Bahan makanan, minuman atau obat-obatan itu dipalsu jika nilainya atau faedahnya menjadi kurang karena sudah dicampur dengan sesuatu bahan lain.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 387',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama tujuh tahun seorang pemborong atau ahli bangunan atau penjual bahan-bahan bangunan, yang pada waktu membuat bangunan atau pada waktu menyerahkan bahan-bahan bangunan, melakukan sesuatu perbuatan curang yang dapat membahayakan amanan orang atau barang, atau keselamatan negara dalam keadaan perang. Diancam dengan pidana yang sama, barang siapa yang bertugas mengawasi pembangunan atau penyerahan barang-barang itu, sengaja membiarkan perbuatan yang curang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 388',
                'isi_pasal' => 'Barang siapa pada waktu menyerahkan barang keperluan Angkatan Laut atau Angkatan Darat melakukan perbuatan curang yang dapat membahayakan kesempatan negara dalam keadaan perang diancam dengan pidana penjara paling lama tujuh tahun. Diancam dengan pidana yang sama, barang siapa yang bertugas mengawasi penyerahan barang-barang itu, dengan sengaja membiarkan perbuatan yang curang itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 389',
                'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, menghancurkan, memindahkan, membuang atau membikin tak dapat dipakai sesuatu yang digunakan untuk menentukan batas pekarangan, diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 390',
                'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, dengan menyiarkan kabar bohong yang menyebabkan harga barang-barang dagangan, dana-dana atau surat-surat berharga menjadi turun atau naik diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 391',
                'isi_pasal' => 'Barang siapa menerima kewajiban untuk, atau memberi pertolongan pada penempatan surat hutang sesuatu negara atau bagiannya, atau sesuatu lembaga umum sero, atau surat hutang sesuatu perkumpulan, yayasan atau perseroan, mencoba menggerakkan khalayak umum untuk pendaftaran atau penyertaannya, dengan sengaja menyembunyikan atau mengurangkan keadaan yang sebenarnya atau dengan membayang-bayangkan keadaan yang palsu, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 392',
                'isi_pasal' => 'Seorang pengusaha, seorang pengurus atau komisaris persero terbatas, maskapai andil Indonesia atau koperasi, yang sengaja mengumumkan daftar atau neraca yang tidak benar, diancam dengan pidana penjara paling lama satu tahun empat bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 393',
                'isi_pasal' => 'Barang siapa memasukkan ke Indonesia tanpa tujuan jelas untuk mengeluarkan lagi dari Indonesia, menjual, menamarkan, menyerahkan, membagikan atau mempunyai persediaan untuk dijual atau dibagi-bagikan, barang-barang yang diketahui atau sepatutnya harus diduganya bahwa padabarangnya itu sendiri atau pada bungkusnya dipakaikan secara palsu, nama firma atau merek yang menjadi hak orang lain atau untuk menyatakan asalnya barang, nama sebuah tempat tertentu, dengan ditambahkan nama atau firma yang khayal, ataupun pada barangnya sendiri atau pada bungkusnya ditirukan nama, firma atau merek yang demikian sekalipun dengan sedikit perubahan, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak sembilan ribu rupiah. Jika pada waktu melakukan kejahatan belum lewat lima tahun sejak adanya pemidanaan yang menjadi tetap karena kejahatan semacam itu juga dapat dijatuhkan pidana penjara paling lama sembilan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 393 bis',
                'isi_pasal' => 'Seorang pengacara yang sengaja memasukkan atau menyuruh masukkan dalam surat permohonan cerai atau pisah meja dan ranjang, atau dalam surat permohonan pailit, keterangan-keterangan tentang tempat tinggal atau kediaman tergugat atau penghutang, padahal diketahui atau sepatutnya harus diduganya bahwa keterangan-keterangan itu bertentangan dengan yang sebenarnya, diancam dengan pidana penjara paling lama satu tahun. Diancam dengan pidana yang sama ialah si suami (istri) yang mengajukan gugatan atau si pemiutang yang memasukkan permintaan pailit, yang sengaja memberi keterangan palsu kepada pengacara yang dimaksudkan dalam ayat pertama.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 394',
                'isi_pasal' => 'Ketentuan pasal 367 berlaku bagi kejahatan-kejahatan yang dirumuskan dalam bab ini kecuali yang dirumuskan dalam ayat kedua pasal 393 bis, sepanjang kejahatan dilakukan mengenai keterangan untuk mohon cerai atau pisah meja dan ranjang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'nomor_pasal' => 'Pasal 395',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan yang dirumuskan dalam bab ini, hakim dapat memerintahkan pengumuman putusannya dan yang bersalah dapat dicabut haknya untuk menjalankan pencarian ketika kejahatan dilakukan. Dalam hal pemidanaan berdasarkan salah satu kejahatan yang dirumuskan dalam pasal 378, 382, 385, 387, 388, 393 bis dapat dijatuhkan pencabutan hak-hak berdasarkan pasal 35 No. 1 - 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 396',
                'isi_pasal' => 'Seorang pengusaha yang dinyatakan dalam keadaan pailit atau yang diizinkan melepaskan budel oleh pengadilan, diancam karena merugikan pemiutang dengan pidana penjara paling lama satu tahun empat bulan: 1. jika pengeluarannya melewati batas; 2. jika yang bersangkutan dengan maksud untuk menangguhkan kepailitannya telah meminjam uang dengan syarat-syarat yang memberatkan sedang diketahuinya bahwa pinjaman itu tiada mencegah kepailitan; 3. jika dia tak dapat memperlihatkan dalam keadaan tak diubah buku-buku dan surat-surat untuk catatan menurut pasal 6 Kitab Undang-undang Hukum Dagang dan tulisan-tulisan yang harus disimpannya menurut pasal itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 397',
                'isi_pasal' => 'Seorang pengusaha yang dinyatakan dalam keadaan pailit atau diizinkan melepaskan budel oleh pengadilan, diancam karena merugikan pemiutang secara curang jika yang bersangkutan untuk mengurangi hak pemiutang secara curang: 1. membikin pengeluaran yang tak ada, maupun tidak membukukan pendapatan, atau menarik barang sesuatu dari budel; 2. telah melijerkan (uervreemden) barang sesuatu dengan cuma-cuma atau jelas di bawah harganya; 3. dengan suatu cara menguntungkan salah seorang pemiutang di waktu pailitnya atau pada saat di mana diketahui bahwa keadaan tersebut tak dapat dicegah; 4. tidak memenuhi kewajiban untuk mengadakan pencatatan menurut pasal 6 ayat pertama Kitab Undang-undang Hukum Dagang atau untuk menyimpan dan memperlihatkan buku-buku, surat-surat, dan tulisan-tulisan yang dimaksud dalam ayat ketiga pasal tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 398',
                'isi_pasal' => 'Seorang pengurus atau komisaris perseroan terbatas, maskapai andil Indonesia atau perkumpulan koperasi yang dinyatakan dalam keadaan pailit atau yang diperintahkan penyelesaian oleh pengadilan, diancam dengan pidana penjara paling lama satu tahun empat bulan: 1. jika yang bersangkutan turut membantu atau mengizinkan untuk melakukan perbuatan-perbuatan yang bertentangan dengan anggaran dasar, sehingga oleh karena itu seluruh atau sebagian besar dari kerugian diderita oleh perseroan, maskapai atau perkumpulan; 2. jika yang bersangkutan dengan maksud untuk menangguhkan kepailitan atau penyelesaian perseroan, maskapai atau perkumpulan, turut membantu atau mengizinkan peminjaman uang dengan syarat-syarat yang memberatkan, padahal diketahuinya tak dapat dicegah keadaan pailit atau penyelesaiannya; 3. jika yang bersangkutan dapat dipersalahkan tidak memenuhi kewajiban yang diterangkan dalam pasal 6 ayat pertama Kitab Undang-undang Hukum Dagang dan pasal 27 ayat pertama ordonansi tentang maskapai andil Indonesia, atau bahwa buku-buku dan surat-surat yang memuat catatan-catatan dan tulisan-tulisan yang disimpan menurut pasal tadi, tidak dapat diperlihatkan dalam keadaan tak diubah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 399',
                'isi_pasal' => 'Seorang pengurus atau komisaris perseroan terbatas, maskapai andil Indonesia atau perkumpulan koperasi yang dinyatakan dalam keadaan pailit atau yang penyelesaiannya diperintahkan oleh pengadilan, diancam dengan pidana penjara paling lama tujuh tahun jika yang bersangkutan mengurangi secara curang hak-hak pemiutang dari perseroan maskapai atau perkumpulan untuk: 1. membikin pengeluaran yang tak ada, maupun tidak membukukan pendapatan atau menarik barang sesuatu dari budel; 2. telah melijerkan (uervreemden) barang sesuatu dengan cuma-cuma atau jelas di bawah harganya; 3. dengan sesuatu cara menguntungkan salah seorang pemiutang di waktu kepailitan atau penyelesaian, ataupun pada saat di mana diketahuinya bahwa kepailitan atau penyelesaian tadi tak dapat dicegah; 4. tidak memenuhi kewajiban mengadakan catatan menurut Kitab Undang-undang Hukum Dagang atau pasal 27 ayat pertama ordonansi tentang maskapai andil Indonesia, dan tentang menyimpan dan memperlihatkan buku-buku, surat-surat dan tulisan-tulisan menurut pasal-pasal itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 400',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama lima tahun enam bulan, barang siapa yang mengurangi dengan penipuan hak-hak pemiutang: 1. dalam hal pelepasan budel, kepailitan atau penyelesaian atau pada waktu diketahui akan terjadi salah satu di antaranya dan kemudian sungguh disusul dengan pelepasan budel, kepailitan atau penyelesaian menarik barang sesuatu dari budel atau menerima pembayaran baik dari hutang yang tak dapat di tagih maupun yang dapat ditagih, dalam hal terakhir dengan diketahuinya bahwa kepailitan atau penyelesaian penghutang sudah dimohonkan, atau akibat rundingan dengan penghutang; 2. di waktu verifikasi piutang-piutang dalam hal pelepasan budel, kepailitan atau penyelesaian, mengaku adanya piutang yang tak ada atau memperbesar jumlah piutang yang ada.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 401',
                'isi_pasal' => 'Seorang pemiutang yang menyetujui tawaran persetujuan di muka pengadilan karena telah ada persetujuan dengan penghutang maupun pihak ketiga di mana yang bersangkutan minta keuntungan istimewa, diancam dengan pidana penjara paling lama satu tahun empat bulan, jika persetujuan itu diterima. Diancam dengan pidana yang sama pada penghutang dalam hal seperti di atas, atau jika penghutang adalah perseroan, maskapai, perkumpulan atau yayasan, pada pengurus atau komisaris yang mengadakan persetujuan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 402',
                'isi_pasal' => 'Barang siapa dinyatakan dalam keadaan jelas tak mampu atau jika bukan pengusaha, dinyatakan dalam keadaan pailit atau dibolehkan melepaskan budel, diancam dengan pidana penjara paling lama lima tahun enam bulan, jika yang bersangkutan secara curang mengurangi hak-hak pemiutang dengan mengada-ada pengeluaran yang tak ada, maupun menyembunyikan pendapatan, atau menarik barang sesuatu dari budel ataupun telah melijerkan barang sesuatu dengan cuma-cuma atau terang di bawah harganya, atau di waktu ketidakmampuannya, pelepasan budelnya atau kepailitannya, atau pada saat di mana diketahuinya bahwa salah satu dari keadaan tadi tak dapat dicegah, menguntungkan salah seorang pemiutang dengan sesuatu cara.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 403',
                'isi_pasal' => 'Seorang pengurus atau komisaris perseroan terbatas, maskapai andil Indonesia atau perkumpulan koperasi di luar ketentuan pasal 398, turut membantu atau mengizinkan dilakukan perbuatan yang bertentangan dengan anggaran dasar, dan oleh karena itu mengakibatkan perseroan, maskapai atau perkumpulan tak dapat memenuhi kewajibannya, atau harus dibubarkan, diancam dengan pidana denda paling banyak seratus lima puluh ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 404',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama dua tahun: 1. barang siapa dengan sengaja menarik barang milik sendiri, atau kalau bukan demikian untuk pemiliknya dari orang lain yang mempunyai hak gadai, hak menahan, pungut hasil atau pakai atasnya; 2. barang siapa dengan sengaja untuk seluruhnya atau sebagian, menarik barang milik sendiri atau kalau bukan demikian untuk pemiliknya dari ikatan hipotik; 3. barang siapa dengan sengaja, untuk seluruhnya atau sebagian, menarik suatu barang yang olehnya dibebani ikatan panen atau untuk yang memberi ikatan menarik suatu barang yang oleh orang lain itu dibebani ikatan panen, dengan merugikan pemegang ikatan; 4. barang siapa dengan sengaja, untuk seluruhnya atau sebagian, menarik suatu barang milik sendiri atau kalau tidak demikian, untuk pemiliknya, dari ikatan kredit atasnya, dengan merugikan pemegang ikatan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'nomor_pasal' => 'Pasal 405',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan yang dirumuskan dalam pasal 397, 399, 400, dan 402 yang bersalah dapat dicabut hak-haknya berdasarkan pasal 35. Pemidanaan berdasarkan salah satu kejahatan seperti yang dirumuskan dalam pasal 396 - 402, dapat diperintahkan supaya putusan hakim diumumkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 413',
                'isi_pasal' => 'Seorang komandan Angkatan Bersenjata yang menolak atau sengaja mengabaikan untuk menggunakan kekuatan di bawah perintahnya, ketika diminta oleh penguasa sipil yang berwenang menurut undang-undang, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 414',
                'isi_pasal' => 'Seorang pejabat yang sengaja minta bantuan Angkatan Bersenjata untuk melawan pelaksanaan ketentuan undang-undang, perintah penguasa umum menurut undang-undang, putusan atau surat perintah pengadilan, diancam dengan pidana penjara paling lama tujuh tahun. Jika pelaksanaan dihalang-halangi oleh perbuatan demikian, yang bersalah diancam dengan pidana penjara paling lama sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 415',
                'isi_pasal' => 'Seorang pejabat atau orang lain yang ditugaskan menjalankan suatu jabatan umum terus-menerus atau untuk sementara waktu, yang dengan sengaja menggelapkan uang atau surat berharga yang disimpan karena jabatannya, atau membiarkan uang atau surat berharga itu diambil atau digelapkan oleh orang lain, atau menolong sebagai pembantu dalam melakukan perbuatan tersebut, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 416',
                'isi_pasal' => 'Seorang pejabat atau orang lain yang diberi tugas menjalankan suatu jabatan umum terus-menerus atau untuk sementara waktu, yang sengaja membuat secara palsu atau memalsu buku-buku daftar-daftar yang khusus untuk pemeriksaan administrasi, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 417',
                'isi_pasal' => 'Seorang pejabat atau orang lain yang diberi tugas menjalankan suatu jabatan umum terus-menerus atau untuk sementara waktu yang sengaja menggelapkan, menghancurkan, merusakkan atau membikin tak dapat dipakai barang-barang yang diperuntukkan guna meyakinkan atau membuktikan di muka penguasa yang berwenang, akta-akta, surat-surat atau daftar-daftar yang dikuasainya karena jabatannya, atau membiarkan orang lain menghilangkan, menghancurkan, merusakkan atau membikin tak dapat dipakai barang-barang itu, atau menolong sebagai pembantu dalam melakukan perbuatan itu, diancam dengan pidana penjara paling lama lima tahun enam bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 418',
                'isi_pasal' => 'Seorang pejabat yang menerima hadiah atau janji padahal diketahui atau sepatutnya harus diduganya, bahwa hadiah atau janji itu diberikan karena kekuasaan atau kewenangan yang berhubungan dengan jabatannya, atau yang menurut pikiran orang yang memberi hadiah atau janji itu ada hubungan dengan jabatannya diancam dengan pidana penjara paling lama enam tahun atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 419',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama lima tahun seorang pejabat: 1. yang menerima hadiah atau janji padahal diketahuinya bahwa hadiah atau janji itu diberikan untuk menggerakkannya supaya melakukan atau tidak melakukan sesuatu dalam jabatannya yang bertentangan dengan kewajibannya; 2. yang menerima hadiah mengetahui bahwa hadiah itu diberikan sebagai akibat, atau oleh karena si penerima telah melakukan atau tidak melakukan sesuatu dalam jabatannya yang bertentangan dengan kewajibannya.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 420',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama sembilan tahun: 1. seorang hakim yang menerima hadiah atau janji, padahal diketahui bahwa hadiah atau janji itu diberikan untuk mempengaruhi putusan perkara yang menjadi tugasnya; 2. barang siapa menurut ketentuan undang-undang ditunjuk menjadi penasihat untuk menghadiri sidang pengadilan, menerima hadiah atau janji, padahal diketahui bahwa hadiah atau janji itu diberikan untuk mempengaruhi nasihat tentang perkara yang harus diputus oleh pengadilan itu. Jika hadiah atau janji itu diterima dengan sadar bahwa hadiah atau janji itu diberikan supaya dipidana dalam suatu perkara pidana, maka yang bersalah diancam dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 421',
                'isi_pasal' => 'Seorang pejabat yang menyalahgunakan kekuasaan memaksa seseorang untuk melakukan, tidak melakukan atau membiarkan sesuatu, diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 422',
                'isi_pasal' => 'Seorang pejabat yang dalam suatu perkara pidana menggunakan cara paksaan, baik untuk memeras pengakuan, maupun untuk mendapatkan keterangan, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 423',
                'isi_pasal' => 'Seorang pejabat dengan maksud menguntungkan diri sendiri atau orang lain secara melawan hukum, dengan menyalahgunakan kekuasaannya, memaksa seseorang untuk memberikan sesuatu, untuk membayar atau menerima pembayaran dengan potongan, atau untuk mengerjakan sesuatu bagi dirinya sendiri, diancam dengan pidana penjara paling lama enam tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 424',
                'isi_pasal' => 'Seorang pejabat dengan maksud menguntungkan diri sendiri atau orang lain secara melawan hukum, dengan menyalahgunakan kekuasaannya, menggunakan tanah negara di atas mana ada hak-hak pakai Indonesia, diancam dengan pidana penjara paling lama enam tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 425',
                'isi_pasal' => 'Diancam karena melakukan pemerasan dengan pidana penjara paling lama tujuh tahun: 1. seorang pejabat yang pada waktu menjalankan tugas, meminta, menerima, atau memotong pembayaran, seolah-olah berhutang kepadanya, kepada pejabat lainnya atau kepada kas umum, padahal diketahuinya bahwa tidak demikian adanya; 2. seorang pejabat yang pada waktu menjalankan tugas, meminta atau menerima pekerjaan orang atau penyerahan barang seolah-olah merupakan hutang kepada dirinya, padahal diketahuinya bahwa tidak demikian halnya; 3. seorang pejabat yang pada waktu menjalankan tugas, seolah-olah sesuai dengan aturan-aturan yang bersangkutan telah digunakan tanah negara yang di atasnya ada hak-hak pakai Indonesia dengan merugikan yang berhak, padahal diketahuinya bahwa itu bertentangan dengan peraturan tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 426',
                'isi_pasal' => 'Seorang pejabat yang diberi tugas menjaga orang yang dirampas kemerdekaannya atas perintah penguasa umum atau atas putusan atau ketetapan pengadilan, dengan sengaja membiarkan orang itu melarikan diri atau dengan sengaja melepaskannya, atau memberi pertolongan pada waktu dilepas atau melepaskan diri, diancam dengan pidana penjara paling lama empat tahun. Jika orang itu lari, dilepaskan, atau melepaskan diri karena kesalahan (kealpaan), maka yang bersangkutan diancam dengan pidana kurungan paling lama dua bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 427',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama empat tahun: 1. seorang pejabat dengan tugas menyidik perbuatan pidana, yang sengaja tidak memenuhi permintaan untuk menyatakan bahwa ada orang dirampas kemerdekaannya secara melawan hukum, atau yang sengaja tidak memberitahukan hal itu kepada kekuasaan yang lebih tinggi; 2. seorang pejabat yang dalam menjalankan tugasnya mengetahui bahwa ada orang dirampas kemerdekaannya secara melawan hukum, sengaja tidak memberitahukan hal itu dengan segera kepada pejabat yang bertugas menyidik perbuatan pidana. Seorang pejabat yang bersalah (alpa) menyebabkan apa yang dirumuskan dalam pasal ini terlaksana, diancam dengan pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 428',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama satu tahun empat bulan, seorang kepala lembaga pemasyarakatan tempat menutup orang terpidana, orang tahanan sementara atau orang yang disandera, atau seorang kepala lembaga pendidikan negara atau rumah sakit jiwa, yang menolak memenuhi permintaan menurut undang-undang supaya memperlihatkan orang yang dimasukkan di situ, atau supaya memperlihatkan register masuk, atau akta-akta yang menurut aturan-aturan umum harus ada untuk memasukkan orang di situ.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 429',
                'isi_pasal' => 'Seorang pejabat yang melampaui kekuasaan atau tanpa mengindahkan cara-cara yang ditentukan dalam peraturan umum, memaksa masuk ke dalam rumah atau ruangan atau pekarangan tertutup yang dipakai oleh orang lain, atau jika berada di situ secara melawan hukum, tidak segera pergi atas permintaan yang berhak atau atas nama orang itu, diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling tinggi empat ribu lima ratus rupiah. Diancam dengan pidana yang sama, seorang pejabat yang pada waktu menggeledah rumah, dengan melampaui kekuasaannya atau tanpa mengindahkan cara-cara yang ditentukan dalam peraturan umum, memeriksa atau merampas surat-surat, buku-buku atau kertas-kertas lain.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 430',
                'isi_pasal' => 'Seorang pejabat suatu lembaga pengangkutan umum, seorang pejabat telegrap atau telepon atau orang lain yang dimaksud dalam pasal 433, yang dengan sengaja membiarkan orang lain melakukan salah satu perbuatan berdasarkan pasal 431 - 433, atau membantu orang lain dalam perbuatan itu, diancam dengan pidana menurut perbedaan-perbedaan yang ditetapkan dalam pasal-pasal tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 431',
                'isi_pasal' => 'Seorang pejabat suatu lembaga pengangkutan umum yang dengan sengaja dan melawan hukum membuka suatu surat barang tertutup atau paket yang diserahkan kepada lembaga itu, memeriksa isinya, atau memberitahukan isinya kepada orang lain, diancam dengan pidana penjara paling lama dua tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 432',
                'isi_pasal' => 'Seorang pejabat suatu lembaga pengangkutan umum yang dengan sengaja memberikan kepada orang lain daripada yang berhak, surat tertutup, kartu pos atau paket yang dipercayakan kepada lembaga itu, atau menghancurkan, menghilangkan, memiliki sendiri atau mengubah isinya, atau memiliki sendiri barang sesuatu yang ada di dalamnya diancam dengan pidana penjara paling lama lima tahun. Jika surat atau barang itu bernilai uang, maka pemilikan sendiri itu diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 433',
                'isi_pasal' => 'Seorang pejabat telegrap atau telepon, atau orang lain yang ditugasi mengawasi pekerjaan telegrap atau telepon yang digunakan untuk kepentingan umum, diancam: 1. dengan pidana penjara paling lama dua tahun, jika ia dengan sengaja dan melawan hukum memberitahukan kepada orang lain, kabar yang diserahkan kepada jawatan telegrap atau telepon atau kepada lembaga semacam itu, atau dengan sengaja dan melawan hukum membuka, membaca, atau memberitahukan kabar telegrap atau telepon kepada orang lain; 2. dengan pidana penjara paling lama lima tahun, jika ia dengan sengaja memberikan kepada orang lain daripada yang berhak atau menghancurkan, menghilangkan, memiliki sendiri atau mengubah isi suatu berita telegrap atau telepon yang diserahkan kepada jawatan telegrap, telepon atau pada lembaga semacam itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 434',
                'isi_pasal' => 'Seorang pejabat suatu lembaga pengangkutan umum, seorang pejabat telegrap atau telepon atau orang lain yang dimaksud dalam pasal 433, yang dengan sengaja membiarkan orang lain melakukan salah satu perbuatan berdasarkan pasal 431 - 433, atau membantu orang lain dalam perbuatan itu, diancam dengan pidana menurut perbedaan-perbedaan yang ditetapkan dalam pasal-pasal tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 435',
                'isi_pasal' => 'Seorang pejabat yang dengan langsung maupun tidak langsung sengaja turut serta dalam pemborongan, penyerahan atau persewaan, yang pada saat dilakukan perbuatan, untuk seluruh atau sebagian, dia ditugaskan mengurus atau mengawasinya, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak delapan belas ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 436',
                'isi_pasal' => 'Barang siapa menurut hukum yang berlaku bagi masing-masing pihak mempunyai kewenangan melangsungkan perkawinan seseorang, padahal diketahuinya bahwa perkawinan atau perkawinan-perkawinan orang itu yang telah ada menjadi halangan untuk itu berdasarkan undang-undang, diancam dengan pidana penjara paling lama tujuh tahun. Barang siapa menurut hukum yang berlaku bagi masing-masing pihak mempunyai kewenangan melangsungkan perkawinan seseorang, padahal diketahuinya ada halangan untuk itu berdasarkan undang-undang diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'nomor_pasal' => 'Pasal 437',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan pasal 415, 419, 420, 423, 434, 425, 432 ayat penghabisan, dan pasal 436 ayat pertama, dapat dijatuhkan pencabutan hak berdasarkan pasal 35 No. 3 dan 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 438',
                'isi_pasal' => 'Diancam karena melakukan pembajakan di laut: 1. dengan pidana penjara paling lama lima belas tahun, barang siapa masuk bekerja menjadi nahkoda atau menjalankan pekerjaan itu di sebuah kapal, padahal diketahuinya bahwa kapal itu diperuntukkan atau digunakan untuk melakukan perbuatan-perbuatan kekerasan di lautan bebas terhadap kapal lain atau terhadap orang dan barang di atasnya, tanpa mendapat kuasa untuk itu dari sebuah negara yang berperang atau tanpa masuk angkatan laut suatu negara yang diakui; 2. dengan pidana penjara paling lama dua belas tahun, barang siapa mengetahui tentang tujuan atau penggunaan kapal itu, masuk bekerja menjadi kelasi kapal tersebut atau dengan suka rela terus menjalankan pekerjaan tersebut setelah hal itu diketahui olehnya, ataupun termasuk anak buah kapal tersebut. Disamakan dengan tidak punya surat kuasa, jika melampaui apa yang dikuasakan, demikian juga jika memegang surat kuasa dari negara-negara yang berperang satu dengan yang lainnya. Pasal 89 tidak diterapkan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 439',
                'isi_pasal' => 'Diancam karena melakukan pembajakan di tepi laut dengan pidana penjara paling lama lima belas tahun, barang siapa dengan memakai kapal melakukan perbuatan kekerasan terhadap kapal lain atau terhadap orang atau barang di atasnya, di perairan Indonesia. Yang dimaksud dengan wilayah laut Indonesia yaitu wilayah "Territoriale zee en maritieme kringen ordonantie, S. 1939 442."'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 440',
                'isi_pasal' => 'Diancam karena melakukan pembajakan di pantai dengan pidana penjara paling lama lima belas tahun, barang siapa yang di darat maupun di air sekitar pantai atau muara sungai, melakukan perbuatan kekerasan terhadap orang atau barang di situ, setelah lebih dahulu menyeberangi lautan seluruhnya atau sebagiannya untuk tujuan tersebut.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 441',
                'isi_pasal' => 'Diancam karena melakukan pembajakan di sungai dengan pidana penjara paling lama lima belas tahun, barang siapa dengan memakai kapal melakukan perbuatan kekerasan di sungai terhadap kapal lain atau terhadap orang atau barang di atasnya, setelah datang ke tempat dan untuk tujuan tersebut dengan kapal dari tempat lain.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 442',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama lima belas tahun, barang siapa yang menerima atau melakukan pekerjaan sebagai komandan atau pemimpin sebuah kapal, padahal diketahuinya bahwa kapal itu diperuntukkan atau digunakan untuk melakukan salah satu perbuatan yang dirumuskan dalam pasal 439 - 441.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 443',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama sepuluh tahun barang siapa yang menerima atau melakukan pekerjaan sebagai kelasi di sebuah kapal, padahal diketahuinya bahwa kapal itu diperuntukkan atau digunakan untuk melakukan salah satu perbuatan yang dirumuskan dalam pasal 439 - 441 ataupun dengan sukarela tetap tinggal bekerja di kapal itu, sesudah diketahui olehnya bahwa kapal itu digunakan seperti diterangkan di atas.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 444',
                'isi_pasal' => 'Jika perbuatan kekerasan yang diterangkan dalam pasal 438 - 441 mengakibatkan seseorang di kapal yang diserang atau seseorang yang diserang itu mati, maka nakoda, komandan atau pemimpin kapal dan mereka yang turut serta melakukan perbuatan kekerasan, diancam dengan pidana mati, pidana penjara seumur hidup, atau pidana penjara selama waktu tertentu paling lama dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 445',
                'isi_pasal' => 'Barang siapa melengkapi kapal atas biaya sendiri atau orang lain, dengan maksud untuk digunakan sebagai yang dirumuskan dalam pasal 438 atau dengan maksud untuk melakukan salah satu perbuatan yang dirumuskan dalam pasal 439 - 441, diancam dengan pidana penjara paling lama lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 446',
                'isi_pasal' => 'Barang siapa atas biaya sendiri atau orang lain, secara langsung maupun tidak langsung turut melaksanakan penyewaan, pemuatan atau pertanggungan sebuah kapal, padahal diketahuinya bahwa kapal itu akan digunakan sebagai yang dirumuskan dalam pasal 438, atau untuk melakukan salah satu perbuatan yang dirumuskan dalam pasal 439 - 441, diancam dengan pidana penjara paling lama dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 447',
                'isi_pasal' => 'Barang siapa dengan sengaja menyerahkan sebuah kapal Indonesia dalam kekuasaan bajak laut, bajak tepi laut, bajak pantai, dan bajak sungai, diancam: 1. dengan pidana penjara paling lama lima belas tahun, jika ia adalah nakoda kapal itu; 2. dengan pidana penjara paling lama dua belas tahun, dalam hal-hal lain.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 448',
                'isi_pasal' => 'Seorang penumpang kapal Indonesia yang merampas kekuasaan atas kapal secara melawan hukum, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 449',
                'isi_pasal' => 'Seorang nakoda sebuah kapal Indonesia yang menarik kapal dari pemiliknya atau dari pengusahanya dan memakainya untuk keuntungan sendiri, diancam dengan pidana penjara paling lama delapan tahun enam bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 450',
                'isi_pasal' => 'Seorang warga negara Indonesia yang tanpa izin Pemerintah Indonesia menerima surat, bajak, maupun menerima atau menjalankan pekerjaan sebagai nakoda sebuah kapal, padahal diketahui bahwa kapal itu diperuntukkan atau digunakan untuk pelayaran pembajakan tanpa izin Pemerintah Indonesia, diancam dengan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 451',
                'isi_pasal' => 'Seorang warga negara Indonesia yang menerima pekerjaan sebagai kelasi di sebuah kapal, padahal diketahuinya bahwa kapal itu diperuntukkan atau digunakan untuk pelayaran pembajakan tanpa izin Pemerintah Indonesia, ataupun secara suka rela tetap bekerja sebagai kelasi sesudah diketahuinya tujuan atau penggunaan kapal itu, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 451 bis',
                'isi_pasal' => 'Seorang nakoda sebuah kapal Indonesia yang menyuruh membikin keterangan kapal, yang diketahuinya bahwa isinya bertentangan dengan kenyataan, diancam dengan pidana penjara paling lama lima tahun. Kelasi-kelasi yang turut serta menyuruh membikin keterangan kapal yang diketahuinya bahwa isinya tidak benar, diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 451 ter',
                'isi_pasal' => 'Barang siapa untuk memenuhi peraturan dalam ayat ketiga pasal 12 aturan tentang pendaftaran kapal, memperlihatkan surat keterangan yang diketahuinya bahwa isinya tidak benar, diancam dengan pidana penjara paling lama lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 452',
                'isi_pasal' => 'Barang siapa dalam berita acara suatu keterangan kapal, menyuruh menulis keterangan palsu tentang suatu keadaan yang kebenarannya harus dinyatakan dalam akta itu dengan maksud untuk menggunakan atau menyuruh orang lain menggunakan akta itu, seolah-olah keterangannya sesuai dengan kenyataan, diancam, jika karena penggunaan akta itu dapat menimbulkan kerugian, dengan pidana penjara paling lama delapan tahun. Diancam dengan pidana yang sama, barang siapa dengan sengaja menggunakan akta itu seolah-olah isinya sesuai dengan kenyataan, jika karena penggunaan itu dapat timbul kerugian.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 453',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama dua tahun delapan bulan, seorang nakoda kapal Indonesia yang sesudah dimulai penerimaan atau penyewaan kelasi, tetapi sebelum perjanjian habis dengan sengaja dan melawan hukum menarik diri dari pimpinan kapal itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 454',
                'isi_pasal' => 'Diancam, karena melakukan desersi, dengan pidana penjara paling lama satu tahun empat bulan, seorang kelasi yang, bertentangan dengan kewajibannya menurut persetujuan kerja, menarik diri dari tugasnya di kapal Indonesia, jika menurut keadaan di waktu melakukan perbuatan, ada kekhawatiran timbul bahaya bagi kapal, penumpang atau muatan kapal itu.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 455',
                'isi_pasal' => 'Diancam karena melakukan desersi biasa, dengan pidana penjara paling lama empat bulan dua minggu, seorang anak buah kapal kapal Indonesia, yang dengan sengaja dan melawan hukum tidak mengikuti atau tidak meneruskan perjalanan yang telah disetujuinya.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 456',
                'isi_pasal' => 'Ditiadakan berdasarkan S. 34 - 124 jo. 38 - 2.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 457',
                'isi_pasal' => 'Pidana yang ditentukan dalam pasal 454 dan 455 dapat dilipatkan dua, jika dua orang atau lebih dengan bersekutu melakukan kejahatan itu, atau jika kejahatan dilakukan akibat permufakatan jahat untuk berbuat demikian.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 458',
                'isi_pasal' => 'Seorang pengusaha, pemegang buku, atau nakoda kapal Indonesia yang menerima seorang anak buah kapal untuk bekerja, padahal mengetahui bahwa anak buah kapal itu belum ada sebulan sejak menarik diri dari persetujuannya dengan kapal Indonesia seperti dirumuskan di dalam salah satu pasal 454 atau 455, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah. Tidak dipidana, jika penerimaan kerja dilakukan di luar Indonesia dengan izin konsul Indonesia, atau kalau ini tidak ada, atas permintaan penguasa setempat.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 459',
                'isi_pasal' => 'Seorang penumpang kapal Indonesia yang di atas kapal menyerang nakoda, melawannya dengan kekerasan atau ancaman kekerasan, dengan sengaja merampas kebebasannya untuk bergerak atau seorang anak buah kapal Indonesia yang di atas kapal dalam pekerjaan berbuat demikian terhadap orang yang lebih tinggi pangkatnya, diancam karena melakukan insubordinasi dengan pidana penjara paling lama dua tahun delapan bulan. Yang bersalah diancam dengan: 1. pidana penjara paling lama empat tahun, jika kejahatan itu atau perbuatan-perbuatan lain yang menyertainya mengakibatkan luka-luka; 2. pidana penjara paling lama delapan tahun enam bulan jika mengakibatkan luka-luka berat; 3. pidana penjara paling lama dua belas tahun, jika mengakibatkan kematian.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 460',
                'isi_pasal' => 'Insubordinasi yang dilakukan dua orang atau lebih dengan bersekutu, diancam karena melakukan pemberontakan di kapal dengan pidana penjara paling lama tujuh tahun. Yang bersalah diancam dengan: 1. pidana penjara paling lama delapan tahun enam bulan jika kejahatan itu atau perbuatan-perbuatan lain yang menyertainya mengakibatkan luka-luka; 2. pidana penjara paling lama dua belas tahun, jika mengakibatkan luka-luka berat; 3. pidana penjara paling lama lima belas tahun jika mengakibatkan kematian.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 461',
                'isi_pasal' => 'Barang siapa di atas kapal Indonesia menghasut supaya memberontak, diancam dengan pidana penjara paling lama enam tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 462',
                'isi_pasal' => 'Penolakan kerja oleh dua orang anak buah kapal Indonesia atau lebih yang dilakukan bersekutu atau akibat permufakatan jahat diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 463',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama sembilan bulan, seorang anak buah kapal Indonesia yang sesudah dikenakan tindakan disiplin karena menolak kerja, masih tetap menolak kerja juga.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 464',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama sembilan bulan atau denda paling banyak empat ribu lima ratus rupiah seorang penumpang kapal Indonesia: 1. yang sengaja tidak menurut perintah nakoda yang diberikan untuk keamanan atau untuk meneguhkan ketertiban dan disiplin di atas kapal; 2. yang tidak memberi pertolongan menurut kemampuannya kepada nakoda, ketika diketahuinya bahwa dia dirampas kemerdekaannya untuk bergerak; 3. yang sengaja tidak memberitahukan kepada nakoda ketika diketahuinya adanya niat untuk melakukan insubordinasi. Ketentuan tersebut pada no. 3 tidak berlaku jika insubordinasi tidak terjadi.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 465',
                'isi_pasal' => 'Pidana yang diancam pada pasal 448, 451, 454, 464 dapat ditambah sepertiga, jika yang melakukan salah satu kejahatan yang dirumuskan dalam pasal itu, berpangkat perwira kapal.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 466',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang dengan maksud menguntungkan diri sendiri atau orang lain dengan melawan hukum atau untuk menutupi perbuatan itu menjual kapalnya, atau meminjam uang dengan mempertanggungkan kapalnya atau perlengkapan kapal itu atau perbekalannya, atau menjual atau menggadaikan kapal itu barang muatan atau barang perbekalan kapal itu, atau mengurangi kerugian atau belanja, atau tidak menjaga supaya buku-buku harian di kapal dipelihara menurut undang-undang, ataupun tidak mengurus keselamatan surat-surat kapal ketika meninggalkan kapalnya, diancam dengan pidana penjara paling lama tujuh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 467',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia, yang dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum, atau untuk menutupi keuntungan yang demikian, mengubah haluan kapalnya, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 468',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang di luar keharusan atau bertentangan dengan hukum yang berlaku baginya, meninggalkan kapalnya di tengah perjalanan, dan juga menyuruh atau memberi izin kepada anak buahnya untuk berbuat demikian, diancam dengan pidana penjara paling lama lima tahun enam bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 469',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang di luar keharusan dan di luar pengetahuan lebih dahulu dari pemilik atau pengusaha kapal, melakukan atau membiarkan dilakukan perbuatan yang diketahuinya bahwa karena itu kapalnya atau muatannya kemungkinan ditangkap, ditahan atau dirintangi, diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda sebanyak-banyaknya sembilan ribu rupiah. Seorang penumpang kapal yang di luar keharusan dan di luar pengetahuan lebih dulu dari nakoda melakukan perbuatan yang sama dengan pengetahuan yang sama pula, diancam dengan pidana penjara paling lama satu tahun atau pidana denda paling banyak sembilan ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 470',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang di luar keharusan sengaja tidak memberi kepada penumpang kapalnya apa yang wajib diberikan padanya, diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 471',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang sengaja membuang barang muatan di luar keharusan dan bertentangan dengan hukum yang berlaku baginya, diancam dengan pidana penjara paling lama dua tahun delapan bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 472',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum, menghancurkan merusakkan, atau membikin tak dapat dipakai muatan, perbekalan atau barang keperluan yang ada dalam kapal, diancam dengan pidana penjara paling lama dua tahun delapan bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 472 bis',
                'isi_pasal' => 'Barang siapa sebagai penumpang gelap turut berlayar di atas sebuah kapal, diancam dengan pidana penjara paling tiga bulan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 473',
                'isi_pasal' => 'Seorang nakoda yang memakai bendera Indonesia, padahal diketahuinya bahwa dia tidak berhak untuk itu, diancam dengan pidana penjara paling lama satu tahun empat bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 474',
                'isi_pasal' => 'Seorang nakoda yang dengan memakai tanda-tanda pada kapalnya sengaja menimbulkan kesan seakan-akan kapalnya adalah kapal perang Indonesia kapal Angkatan Laut atau kapal penunjuk yang bekerja di perairan atau terusan laut Indonesia, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 475',
                'isi_pasal' => 'Barang siapa yang diluar keharusan melakukan pekerjaan nakoda, juru mudi atau masinis di kapal Indonesia padahal diketahuinya bahwa kewenangannya untuk berlayar telah dicabut oleh penguasa yang berwenang, diancam dengan pidana penjara paling lama sembilan bulan atau pidana denda paling banyak sembilan ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 476',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang tanpa alasan yang dapat diterima menolak untuk memenuhi permintaan berdasarkan undang-undang untuk menerima di kapalnya seorang terdakwa atau terpidana beserta benda-benda yang berhubungan dengan perkaranya, diancam dengan pidana penjara paling lama empat bulan dua minggu atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 477',
                'isi_pasal' => '(1) Seorang nakoda kapal Indonesia yang dengan sengaja membiarkan lari, atau melepaskan seorang terdakwa atau terpidana atau memberi bantuan ketika dilepaskan atau melepaskan diri, padahal orang itu diterima di kapalnya atas permintaan berdasarkan undang-undang, diancam dengan pidana penjara paling lama empat tahun. (2) Jika orang itu lari, dilepaskan atau melepaskan dirinya karena kealpaan nakoda itu, maka dia diancam dengan pidana kurungan paling lama dua bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 478',
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang sengaja tidak memenuhi kewajibannya menurut ayat pertama pasal 358a Kitab Undang-undang Hukum Dagang untuk memberi pertolongan kalau kapalnya terlibat dalam suatu tabrakan, diancam dengan pidana penjara paling lama empat tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'nomor_pasal' => 'Pasal 479',
                'isi_pasal' => 'Dalam hal pemidanaan berdasarkan salah satu kejahatan yang dirumuskan dalam pasal 488 - 449, 446, dan 467, dapat dinyatakan pencabutan hak-hak berdasarkan pasal 35 no. 1 - 4.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479a',
                'isi_pasal' => '(1) Barang siapa dengan sengaja dan melawan hukum menghancurkan, membuat tidak dapat dipakai atau merusak bangunan untuk pengamanan lalu-lintas udara atau menggagalakan usaha untuk pengamanan bangunan tersebut dipidana dengan pidana penjara selama-lamanya sembilan tahun. (2) Dengan pidana penjara selama-lamanya sembilan tahun jika karena perbuatan itu timbul bahaya bagi keamanan lalu-lintas udara. (3) Dengan pidana penjara selama-lamanya lima belas tahun jika karena perbuatan itu mengakibatkan matinya orang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479b',
                'isi_pasal' => '(1) Barang siapa karena kealpaannya menyebabkan hancurnya, tidak dapat dipakainya atau rusaknya bangunan untuk pengamanan lalu-lintas udara, atau gagalnya usaha untuk pengamanan bangunan tersebut, dipidana dengan pidana penjara selama-lamanya tiga tahun. (2) Dengan pidana penjara selama-lamanya lima tahun, jika karena perbuatan itu timbul bahaya bagi keamanan lalu lintas udara. (3) Dengan pidana penjara selama-lamanya tujuh tahun, jika karena perbuatan itu mengakibatkan matinya orang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479c',
                'isi_pasal' => '(1) Barang siapa dengan sengaja dan melawan hukum menghancurkan, merusak, mengambil atau memindahkan tanda atau alat untuk pengamanan penerbangan, atau menggagalkan bekerjanya tanda atau alat tersebut, atau memasang tanda atau alat yang keliru, dipidana dengan pidana penjara selama-lamanya enam tahun. (2) Dengan pidana penjara selama-lamanya sembilan tahun, jika karena perbuatan itu timbul bahaya bagi keamanan penerbangan. (3) Dengan pidana penjara selama-lamanya dua belas tahun, jika karena perbuatan itu timbul bahaya bagi keamanan penerbangan dan mengakibatkan celakanya pesawat udara. (4) Dengan pidana penjara selama-lamanya lima belas tahun, jika karena perbuatan itu timbul bahaya keamanan penerbangan dan mengakibatkan matinya orang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479d',
                'isi_pasal' => 'Barang siapa karena kealpaan menyebabkan tanda atau alat untuk pengamanan penerbangan hancur, rusak, terambil atau pindah atau menyebabkan tidak dapat bekerja atau menyebabkan terpasangnya tanda atau alat untuk pengamanan penerbangan yang keliru, dipidana: a. dengan pidana penjara selama-lamanya lima tahun, jika karena perbuatan itu menyebabkan penerbangan tidak aman; b. dengan pidana penjara selama-lamanya lima tahun, jika karena perbuatan itu mengakibatkan celakanya pesawat udara; c. dengan pidana penjara selama-lamanya tujuh tahun, jika karena perbuatan itu mengakibatkan matinya orang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479e',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum, menghancurkan atau membuat tidak dapat dipakainya pesawat udara yang seluruhnya atau sebagian kepunyaan orang lain, dipidana dengan pidana penjara selama-lamanya sembilan tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479f',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum mencelakakan, menghancurkan, membuat tidak dapat dipakai atau merusak pesawat udara, dipidana: a. dengan pidana penjara selama-lamanya lima belas tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain; b. dengan pidana penjara seumur hidup atau pidana penjara untuk selama-lamanya dua puluh tahun, jika karena perbuatan itu mengakibatkan matinya orang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479g',
                'isi_pasal' => 'Barang siapa karena kealpaannya menyebabkan pesawat udara celaka, hancur, tidak dapat dipakai atau rusak, dipidana: a. dengan pidana penjara selama-lamanya lima tahun, jika karena perbuatan itu timbul bahaya bagi nyawa orang lain; b. dengan pidana penjara selama-lamanya tujuh tahun, jika karena perbuatan itu mengakibatkan matinya orang.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479h',
                'isi_pasal' => '(1) Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain dengan melawan hukum, atas kerugian penanggung asuransi menimbulkan kebakaran atau ledakan, kecelakaan, kehancuran, kerusakan atau membuat tidak dapat dipakainya pesawat udara, dipidana dengan pidana penjara selama-lamanya sembilan tahun. (2) Apabila yang dimaksud pada ayat (1) pasal ini adalah pesawat udara dalam penerbangan, dipidana dengan pidana penjara selama-lamanya lima belas tahun. (3) Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain dengan melawan hukum atas kerugian penanggung asuransi, menyebabkan penumpang pesawat udara mendapat kecelakaan, dipidana: a. dengan pidana penjara selama-lamanya sepuluh tahun; b. dengan pidana penjara selama-lamanya lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479i',
                'isi_pasal' => 'Barang siapa di dalam pesawat udara dengan perbuatan yang melawan hukum merampas atau mempertahankan perampasan atau menguasai pesawat udara dalam penerbangan, dipidana dengan pidana penjara selama-lamanya dua belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479j',
                'isi_pasal' => 'Barang siapa dalam pesawat udara dengan kekerasan atau ancaman kekerasan atau ancaman dalam bentuk lainnya merampas atau mempertahankan perampasan atau menguasai pengendalian pesawat udara dalam penerbangan dipidana dengan pidana penjara selama-lamanya lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479k',
                'isi_pasal' => '(1) Dipidana dengan pidana penjara seumur hidup atau pidana penjara selama-lamanya dua puluh tahun, apabila perbuatan dimaksud pasal 479 huruf i dan pasal 479 j itu: a. dilakukan oleh dua orang atau lebih; b. dilakukan bersekutu; c. dilakukan dengan merusak; d. dilakukan dengan menggunakan senjata; e. mengakibatkan luka berat; f. dilakukan dengan sengaja merampas kemerdekaan. (2) Jika perbuatan itu mengakibatkan matinya seseorang atau hancurnya pesawat udara itu, dipidana dengan pidana mati atau pidana penjara seumur hidup atau pidana penjara selama-lamanya dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479l',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum melakukan perbuatan kekerasan terhadap seseorang di dalam pesawat udara dalam penerbangan, jika perbuatan itu dapat membahayakan keselamatan pesawat udara tersebut, dipidana dengan pidana penjara selama-lamanya lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479m',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum merusak pesawat udara dalam dinas atau menyebabkan kerusakan atas pesawat udara tersebut yang menyebabkan tidak dapat terbang atau membahayakan keamanan penerbangan, dipidana dengan pidana penjara selama-lamanya lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479n',
                'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum menempatkan atau menyebabkan ditempatkannya di dalam pesawat udara dalam dinas, dengan cara apa pun, alat atau bahan yang membahayakan keamanan dalam penerbangan, dipidana dengan pidana penjara selama-lamanya lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479o',
                'isi_pasal' => '(1) Dipidana dengan pidana penjara seumur hidup atau pidana penjara selama-lamanya dua puluh tahun apabila perbuatan dimaksud pasal 479 huruf l, pasal 479 huruf m, dan pasal 479 huruf n itu: a dilakukan oleh dua orang atau lebih; b. dilakukan bersekutu; c. dilakukan dengan merusak; d. dilakukan dengan menggunakan senjata. (2) Jika perbuatan itu mengakibatkan matinya seseorang atau hancurnya pesawat udara itu, dipidana dengan pidana mati atau pidana penjara seumur hidup atau pidana penjara selama-lamanya dua puluh tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479p',
                'isi_pasal' => 'Barang siapa memberikan keterangan yang diketahuinya adalah palsu dan karena perbuatan itu membahayakan keamanan pesawat udara dalam penerbangan, dipidana dengan pidana penjara selama-lamanya lima belas tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479q',
                'isi_pasal' => 'Barang siapa di dalam pesawat udara, melakukan perbuatan yang dapat membahayakan keamanan dalam pesawat udara dalam penerbangan, dipidana dengan pidana penjara selama-lamanya lima tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'nomor_pasal' => 'Pasal 479r',
                'isi_pasal' => 'Barang siapa di dalam pesawat udara melakukan perbuatan-perbuatan yang dapat mengganggu ketertiban dan tata-tertib di dalam pesawat udara dalam penerbangan, dipidana penjara selama-lamanya satu tahun.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXX',
                'nomor_pasal' => 'Pasal 480',
                'isi_pasal' => 'Diancam dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak sembilan ratus rupiah: 1. barang siapa membeli benda, yang diketahui atau sepatutnya harus diduga bahwa diperoleh dari kejahatan penadahan; 2. barang siapa menarik keuntungan dari hasil sesuatu benda, yang diketahuinya atau sepatutnya harus diduga bahwa diperoleh dari kejahatan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXX',
                'nomor_pasal' => 'Pasal 481',
                'isi_pasal' => '(1) Barang siapa menjadikan sebagai kebiasaan untuk sengaja membeli, menukar, menerima gadai, menyimpan, atau menyembunyikan barang yang diperoleh dari kejahatan, diancam dengan pidana penjara paling lama tujuh tahun. (2) Yang bersalah dapat dicabut haknya berdasarkan pasal 35 no. 1 - 4 dan haknya untuk melakukan pencarian dalam mana kejahatan dilakukan.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXX',
                'nomor_pasal' => 'Pasal 482',
                'isi_pasal' => 'Perbuatan sebagaimana dirumuskan dalam pasal 480, diancam karena penadahan ringan dengan pidana penjara paling lama tiga bulan atau pidana denda paling banyak sembilan ratus rupiah, jika kejahatan dari mana benda tersebut diperoleh adalah salah satu kejahatan yang dirumuskan dalam pasal 364, 373, dan 379.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXX',
                'nomor_pasal' => 'Pasal 483',
                'isi_pasal' => 'Barang siapa menerbitkan sesuatu tulisan atau sesuatu gambar yang karena sifatnya dapat diancam dengan pidana, diancam dengan pidana penjara paling lama satu tahun empat bulan jika: 1. si pelaku tidak diketahui namanya; 2. penerbit sudah mengetahui atau patut menduga bahwa pada waktu tulisan atau gambar itu diterbitkan, si pelaku itu tak dapat dituntut atau akan menetap di luar Indonesia.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXX',
                'nomor_pasal' => 'Pasal 484',
                'isi_pasal' => 'Barang siapa mencetak tulisan atau gambar yang merupakan perbuatan pidana, diancam dengan pidana paling lama satu tahun empat bulan jika: 1. orang yang menyuruh mencetak barang tidak diketahui; 2. pencetak mengetahui atau seharusnya menduga bahwa orang yang menyuruh mencetak pada saat penerbitan, tidak dapat dituntut atau menetap di luar Indonesia.'
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXX',
                'nomor_pasal' => 'Pasal 485',
                'isi_pasal' => 'Jika sifat tulisan atau gambar merupakan kejahatan yang hanya dapat dituntut atas pengaduan, maka penerbit atau pencetak dalam kedua pasal di atas hanya dituntut atas pengaduan orang yang terkena kejahatan itu.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 489',
                'isi_pasal' => '(1) Kenakalan terhadap orang atau barang yang dapat menimbulkan bahaya, kerugian atau kesusahan, diancam dengan pidana denda paling banyak dua ratus dua puluh lima rupiah. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidana denda dapat diganti dengan pidana kurungan paling lama tiga hari.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 490',
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama enam hari, atau pidana denda paling banyak tiga ratus rupiah: 1. barang siapa menghasut hewan terhadap orang atau terhadap hewan yang sedang ditunggangi, atau dipasang di muka kereta atau kendaraan, atau sedang memikul muatan; 2. barang siapa tidak mencegah hewan yang ada di bawah penjagaannya, bilamana hewan itu menyerang orang atau hewan yang lagi ditunggangi atau dipasang di muka kereta atau kendaraan, atau sedang memikul muatan; 3. barang siapa tidak menjaga secukupnya binatang buas yang ada di bawah penjagaannya, supaya tidak menimbulkan kerugian; 4. barang siapa memelihara binatang buas yang berbahaya tanpa melaporkan kepada polisi atau pejabat lain yang ditunjuk untuk itu, atau tidak menaati peraturan yang diberikan oleh pejabat tersebut tentang hal itu.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 491',
                'isi_pasal' => 'Diancam dengan pidana denda paling banyak tujuh ratus lima puluh rupiah: 1. barang siapa diwajibkan menjaga orang gila yang berbahaya bagi dirinya sendiri maupun orang lain, membiarkan orang itu berkeliaran tanpa dijaga; 2. barang siapa diwajibkan menjaga seorang anak, meninggalkan anak itu tanpa dijaga sehingga oleh karenanya dapat timbul bahaya bagi anak itu atau orang lain.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 492',
                'isi_pasal' => '(1) Barang siapa dalam keadaan mabuk di muka umum merintangi lalu lintas, atau mengganggu ketertiban, atau mengancam keamanan orang lain, atau melakukan sesuatu yang harus dilakukan dengan hati-hati diancam dengan pidana kurungan paling lama enam hari atau denda paling banyak tiga ratus tujuh puluh lima rupiah. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, atau karena hal yang dirumuskan dalam pasal 536, dijatuhkan pidana kurungan paling lama dua minggu.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 493',
                'isi_pasal' => 'Barang siapa secara melawan hukum di jalan umum membahayakan kebebasan bergerak orang lain, atau terus mendesakkan dirinya bersama dengan seorang atau lebih kepada orang lain, atau mengikuti orang lain secara mengganggu, diancam dengan pidana denda paling banyak seribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 494',
                'isi_pasal' => 'Diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah: 1. barang siapa tidak mengadakan penerangan secukupnya dan tanda-tanda pada penggalian atau menumpukkan tanah di jalan umum; 2. barang siapa tidak mengadakan tindakan seperlunya pada waktu melakukan suatu pekerjaan di atas atau dipinggir jalan umum untuk memberi tanda; 3. barang siapa menaruh atau menggantungkan sesuatu di atas suatu bangunan hingga dapat timbul kerugian; 4. barang siapa membiarkan di jalan umum, hewan untuk dinaiki tanpa mengadakan tindakan penjagaan; 5. barang siapa membiarkan ternak berkeliaran di jalan umum tanpa penjagaan; 6. barang siapa tanpa izin menghalangi sesuatu jalanan untuk umum.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 495',
                'isi_pasal' => '(1) Barang siapa tanpa izin kepala polisi atau pejabat yang ditunjuk untuk itu, di tempat yang dilalui orang memasang ranjau perangkap, jerat diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun sesudah adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidana denda dapat diganti dengan pidana kurungan paling lama enam hari.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 496',
                'isi_pasal' => 'Barang siapa tanpa izin kepala polisi atau pejabat yang ditunjuk untuk itu, membakar barang tak bergerak kepunyaan sendiri, diancam dengan pidana denda paling tinggi tujuh ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 497',
                'isi_pasal' => 'Diancam dengan pidana denda paling tinggi tiga ratus tujuh puluh lima rupiah: 1. barang siapa di jalan umum atau di pinggirnya menyalakan api tanpa perlu menembakkan senjata api; 2. barang siapa melepaskan balon angin di mana digantungkan bahan-bahan menyala.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 498',
                'isi_pasal' => 'Ditiadakan berdasarkan S. 32 - 143 jo. 33 - 9.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 499',
                'isi_pasal' => 'Ditiadakan berdasarkan S. 32 - 143 jo. 33 - 9.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 500',
                'isi_pasal' => 'Barang siapa tanpa izin kepala polisi atau pejabat yang ditunjuk untuk itu, membikin obat ledak, mata peluru atau peluru untuk senjata api, diancam dengan pidana kurungan paling lama sepuluh hari atau pidana denda paling banyak tujuh ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'I',
                'nomor_pasal' => 'Pasal 501', 
                'isi_pasal' => '(1) Diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah: 1. barang siapa menjual, menawarkan, menyerahkan, membagikan atau mempunyai persediaan untuk dijual atau dibagikan, barang makanan atau minuman yang dipalsu atau yang busuk, ataupun air susu dari ternak yang sakit atau yang dapat mengganggu kesehatan; 2. barang siapa tanpa izin kepala polisi atau pejabat lain yang ditunjuk untuk itu, menjual, menawarkan, menyerahkan, membagikan daging ternak yang dipotong karena sakit atau mati dengan sendirinya. (2) Jika ketika melakukan pelanggaran belum lewat dua tahun setelah ada pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidana denda dapat diganti dengan pidana kurungan paling lama enam hari.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'I', 
                'nomor_pasal' => 'Pasal 502', 
                'isi_pasal' => '(1) Barang siapa tanpa izin penguasa yang berwenang untuk itu, memburu atau membawa senjata api ke dalam hutan negara di mana dilarang untuk itu tanpa izin, diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak tiga ribu rupiah; (2) Binatang yang ditangkap atau ditembak serta perkakas dan senjata yang digunakan dalam pelanggaran, dapat dirampas.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 503', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama tiga hari atau pidana denda paling banyak dua ratus dua puluh lima rupiah: 1. barang siapa membikin ingar atau riuh, sehingga ketentraman malam hari dapat terganggu; 2. barang siapa membikin gaduh di dekat bangunan untuk menjalankan ibadat yang dibolehkan atau untuk sidang pengadilan, di waktu ada ibadat atau sidang.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 504', 
                'isi_pasal' => '(1) Barang siapa mengemis di muka umum, diancam karena melakukan pengemisan dengan pidana kurungan paling lama enam minggu. (2) Pengemisan yang dilakukan oleh tiga orang atau lebih, yang berumur di atas enam belas tahun, diancam dengan pidana kurungan paling lama tiga bulan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 505', 
                'isi_pasal' => '(1) Barang siapa bergelandangan tanpa pencarian, diancam karena melakukan pergelandangan dengan pidana kurungan paling lama tiga bulan. (2) Pergelandangan yang dilakukan oleh tiga orang atau lebih, yang berumur di atas enam belas tahun diancam dengan pidana kurungan paling lama enam bulan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 506', 
                'isi_pasal' => 'Barang siapa menarik keuntungan dari perbuatan cabul seorang wanita dan menjadikannya sebagai pencarian, diancam dengan pidana kurungan paling lama satu tahun.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 507', 
                'isi_pasal' => 'Diancam dengan pidana denda paling banyak dua ribu dua ratus lima puluh rupiah: 1. barang siapa tanpa wenang memakai suatu gelar ningrat, atau suatu tanda kehormatan Indonesia; 2. barang siapa tanpa izin Presiden, manakala itu diperlukan, menerima suatu tanda kehormatan, gelar, pangkat atau derajat asing; 3. barang siapa ketika ditanya oleh penguasa yang berwenang tentang namanya, memberi nama yang palsu.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 508', 
                'isi_pasal' => 'Barang siapa tanpa wenang memakai dengan sedikit penyimpangan suatu nama atau tanda jasa yang pemakaiannya menurut ketentuan undang-undang, semata-mata untuk suatu perkumpulan atau personal perkumpulan, atau personal dinas kesehatan tentara, diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 508 bis', 
                'isi_pasal' => 'Barang siapa di muka umum tanpa wenang memakai pakaian yang menyamai pakaian jabatan yang ditetapkan untuk pegawai negeri atau pejabat yang bekerja pada negara, pada suatu provinsi, pada suatu daerah yang berdiri sendiri yang diakui atau yang diatur dengan undang-undang sehingga patut ia dapat dipandang orang sebagai pegawai atau pejabat itu, diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 509', 
                'isi_pasal' => 'Barang siapa tanpa izin meminjamkan uang atau barang dengan gadai, atau dalam bentuk jual-beli dengan boleh dibeli kembali ataupun dalam bentuk kontrak komisi, yang nilainya tidak lebih dari seratus rupiah, diancam dengan pidana kurungan paling lama tiga bulan, atau pidana denda paling banyak lima belas ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 510', 
                'isi_pasal' => '(1) Diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah, barang siapa tanpa izin kepala polisi atau pejabat lain yang ditunjuk untuk itu: 1. mengadakan pesta lain yang ditunjuk untuk itu; 2. mengadakan arak-arakan di jalan umum. (2) Jika arak-arakan diadakan untuk menyatakan keinginan-keinginan secara menakjubkan, yang bersalah diancam dengan pidana kurungan paling lama dua minggu atau pidana denda dua ribu dua ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 511', 
                'isi_pasal' => 'Barang siapa di waktu ada pesta arak-arakan, dan sebagainya, tidak menaati perintah dan petunjuk yang diadakan oleh polisi untuk mencegah kecelakaan oleh kemacetan lalu lintas di jalan umum, diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 512', 
                'isi_pasal' => '(1) Barang siapa tidak diwenangkan melakukan pencarian yang menurut aturan-aturan umum harus diberi kewenangan untuk itu, melakukannya tanpa keharusan, diancam dengan pidana denda paling banyak empat ribu lima ratus rupiah. (2) Barang siapa diwenangkan melakukan pencarian yang menurut aturan-aturan umum harus diberi kewenangan untuk itu, dalam melakukan pencarian tersebut tanpa keharusan melampaui batas kewenangannya, diancam dengan pidana denda paling banyak tujuh ratus lima puluh rupiah. (3) Jika ketika melakukan pelanggaran belum lewat dua tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, maka dalam hal ayat pertama, pidana denda dapat diganti dengan pidana kurungan paling lama dua bulan, dan dalam hal ayat kedua, paling lama satu bulan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 512a', 
                'isi_pasal' => 'Barang siapa sebagai mata pencarian, baik khusus maupun sebagai sambilan menjalankan pekerjaan dokter atau dokter gigi dengan tidak mempunyai surat izin, di dalam keadaan yang tidak memaksa, diancam dengan pidana kurungan paling lama dua bulan atau pidana denda setinggi-tingginya seratus lima puluh ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 513', 
                'isi_pasal' => 'Barang siapa menggunakan atau membolehkan digunakan barang orang lain yang ada padanya karena ada hubungan kerja atau karena pencariannya, untuk pemakaian yang tidak diizinkan oleh pemiliknya, diancam dengan pidana kurungan paling lama enam hari atau pidana denda paling banyak tiga ratus tujuh puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 514', 
                'isi_pasal' => 'Seorang pekerja harian, pembawa bungkusan, pesuruh, pemikul atau kuli, yang dalam menjalankan pencariannya melakukan kelalaian atau kekurangan dalam pengembalian perkakas yang diterima untuk dipakai, atau dalam penyampaian barang yang diterima untuk diangkut, diancam dengan pidana kurungan paling lama enam hari, atau pidana denda paling banyak tiga ratus tujuh puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 515', 
                'isi_pasal' => '(1) Diancam dengan pidana kurungan paling lama enam hari, atau pidana denda paling banyak tujuh ratus lima puluh rupiah: 1. barang siapa pindah kediaman dari bagian kota, desa atau kampung di mana dia menetap, tanpa memberitahukan sebelumnya kepada penguasa yang berwenang dengan menyebut tempat menetap yang baru; 2. barang siapa setelah menetap di bagian kota, desa atau kampung, tidak memberitahukan hal itu kepada penguasa yang berwenang dalam tenggang waktu empat belas hari, dengan menyebut nama, pencarian dan tempat asalnya. (2) Ketentuan dalam ayat pertama tidak berlaku bagi orang yang pindah tempat kediaman dan menetap, yang masih di dalam satu kota.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 516', 
                'isi_pasal' => '(1) Barang siapa menjadikan sebagai pencarian untuk memberi tempat bermalam kepada orang lain, dan tidak mempunyai register terus-menerus, atau tidak mencatat atau menyuruh catat nama, pencarian atau pekerjaan, tempat kediaman, hari datang dan perginya orang yang bermalam di situ, atau atas permintaan kepala polisi atau pejabat yang ditunjuk untuk itu, tidak memperlihatkan register itu, diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah. (2) Jika ketika melakukan pelanggaran belum lewat dua tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidana denda dapat diganti dengan pidana kurungan paling lama enam hari.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 517', 
                'isi_pasal' => '(1) Diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak dua ribu dua ratus lima puluh rupiah: 1. barang siapa membeli, menukar, menerima untuk ibadah, gadai, pakai atau simpan dari seorang tentara di bawah pangkat perwira; atau menjualkan, menggadaikan, meminjamkan atau menyimpankan barang tersebut untuk seorang tentara di bawah pangkat perwira, yang diberikan tanpa izin dari atau nama perwira; 2. barang siapa menjadikan kebiasaan atau pencarian untuk membeli barang-barang yang demikian, tidak menaati peraturan mengenai pencatatan dalam register yang ditentukan dalam aturan-aturan umum. (2) Jika ketika melakukan pelanggaran belum lewat dua tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidananya dapat dilipatkan dua kali.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 518', 
                'isi_pasal' => 'Barang siapa tanpa wenang memberi pada atau menerima dari seorang terpidana sesuatu barang, diancam dengan pidana kurungan paling lama enam hari atau pidana denda paling banyak tiga ratus tujuh puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 519', 
                'isi_pasal' => '(1) Barang siapa membikin, menjual, menyiarkan atau mempunyai persediaan untuk dijual atau disiarkan, ataupun memasukannya ke Indonesia, barang cetakan, potongan logam atau benda-benda lain yang bentuknya menyerupai uang kertas, mata uang, benda-benda emas atau perak dengan merek negara, atau perangko pos, diancam dengan pidana denda paling banyak empat ribu lima ratus rupiah. (2) Benda-benda yang merupakan pelanggaran dapat dirampas.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 519 bis', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama tiga bulan, atau pidana denda paling banyak lima belas ribu rupiah: 1. barang siapa mengumumkan isi apa yang ditangkap lewat pesawat penerima radio yang dipakai olehnya atau yang ada di bawah pengurusannya, yang sepatutnya harus diduganya bahwa itu tidak untuk dia atau untuk diumumkan, maupun memberitahukannya kepada orang lain, jika sepatutnya harus diduganya bahwa itu akan diumumkan dan memang lalu disusul dengan pengumuman; 2. barang siapa mengumumkan berita yang ditangkap lewat pesawat penerima radio, jika ia sendiri, maupun orang dari mana berita itu diterimanya, tidak berwenang untuk itu.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'II', 
                'nomor_pasal' => 'Pasal 520', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama tiga bulan: 1. barang siapa yang setelah mendapat pengunduran pembayaran hutang dengan kehendak sendiri melakukan perbuatan-perbuatan, untuk mana menurut aturan-aturan umum, diharuskan adanya kerjasama dengan pengurus; 2. seorang pengurus atau komisaris perseroan, maskapai, perkumpulan atau yayasan, yang setelah mendapat pengunduran bayar hutang, dengan kehendak sendiri melakukan perbuatan-perbuatan untuk mana menurut aturan-aturan umum, diharuskan adanya kerjasama dengan pengurus.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 521',
                'isi_pasal' => 'Barang siapa melanggar ketentuan peraturan penguasa umum yang telah diumumkan mengenai pemakaian dan pembagian air dari perlengkapan air atau bangunan pengairan guna keperluan umum, diancam dengan pidana kurungan paling lama dua belas hari, atau pidana denda paling banyak sembilan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 522',
                'isi_pasal' => 'Barang siapa menurut undang-undang dipanggil sebagai saksi, ahli atau juru bahasa, tidak datang secara melawan hukum, diancam dengan pidana denda paling banyak sembilan ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'III',
                'nomor_pasal' => 'Pasal 523',
                'isi_pasal' => 'Barang siapa tanpa alasan yang sah membiarkan tidak dikerjakannya pekerjaan rodi, pekerjaan desa atau pekerjaan perusahaan kebun negara, diancam dengan pidana kurungan paling tinggi tiga hari atau pidana denda paling tinggi sepuluh rupiah. Jika ketika melakukan pelanggaran belum lewat enam bulan sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, dapat diancam dengan pidana kurungan paling tinggi tiga bulan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'III', 
                'nomor_pasal' => 'Pasal 524', 
                'isi_pasal' => 'Diancam dengan pidana paling banyak sembilan ratus rupiah: 1. barang siapa dalam perkara mengenai orang yang belum dewasa, atau orang yang sudah tahu akan di bawah pengampuan, atau orang yang akan atau sudah dimasukkan dalam rumah sakit jiwa, dipanggil untuk didengar selaku keluarga sedarah atau semenda, selaku suami/istri, wali atau wali pengawas oleh hakim atau atas perintahnya oleh kepala polisi, tidak datang sendiri maupun dengan perantaraan kuasanya jika itu dibolehkan, tanpa alasan yang dapat diterima; 2. barang siapa dalam perkara mengenai orang yang belum dewasa atau orang yang sudah atau akan di bawah pengampuan, dipanggil untuk didengar oleh kantor peninggalan harta atau atas permintaannya oleh kepala polisi, tidak datang sendiri maupun dengan perantaraan kuasanya jika itu dibolehkan, tanpa alasan yang dapat diterima; 3. barang siapa dalam perkara mengenai orang yang belum dewasa dipanggil untuk didengar oleh majelis perwalian atau atas permintaannya oleh kepala polisi, tidak datang sendiri atau dengan perantaraan kuasanya, tanpa alasan yang dapat diterima.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'III', 
                'nomor_pasal' => 'Pasal 525', 
                'isi_pasal' => '(1) Barang siapa ketika ada bahaya umum bagi orang atau barang, atau ketika ada kejahatan tertangkap tangan diminta pertolongannya oleh penguasa umum tetapi menolaknya, padahal mampu untuk memberi pertolongan tersebut tanpa menempatkan diri langsung dalam keadaan yang membahayakan, diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah; (2) Ketentuan ini tidak berlaku bagi mereka yang menolak memberi pertolongan karena ingin menghindari atau menghalaukan bahaya penuntutan bagi salah seorang keluarganya sedarah atau semenda dalam garis lurus atau menyimpang, sampai derajat kedua atau ketiga, atau bagi suami (istri) atau bekas suaminya (istrinya).'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'III', 
                'nomor_pasal' => 'Pasal 526', 
                'isi_pasal' => 'Barang siapa menyobek, membikin tak terbaca atau merusak suatu pemberitahuan di muka umum dari pihak penguasa yang wenang atau karena ketentuan undang-undang, diancam dengan pidana denda paling banyak dua ratus dua puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'III', 
                'nomor_pasal' => 'Pasal 527', 
                'isi_pasal' => 'Ditiadakan berdasarkan L.N. 1955 - 28.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'III', 
                'nomor_pasal' => 'Pasal 528', 
                'isi_pasal' => '(1) Diancam dengan pidana kurungan paling lama dua bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, barang siapa tanpa izin penguasa yang berwenang: 1. membikin salinan atau petikan dari surat-surat jabatan negara dan alat-alatnya, yang dengan perintah penguasa umum harus dirahasiakan; 2. mengumumkan seluruh atau sebagian surat-surat tersebut dalam butir 1; 3. mengumumkan hal-hal yang termakstub dalam surat-surat tersebut dalam butir 1, padahal sewajarnya dapat diduga bahwa hal-hal itu harus dirahasiakan. (2) Perbuatan itu tidak dipidana, jika perintah merahasiakan jelas diberikan karena alasan lain daripada kepentingan dinas atau umum.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IV',  
                'nomor_pasal' => 'Pasal 529', 'isi_pasal' => 'Barang siapa tidak memenuhi kewajibannya menurut undang-undang untuk melaporkan pada pejabat Catatan Sipil atau perantaranya tentang kelahiran dan kematian, diancam dengan pidana denda paling banyak seribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IV',  
                'nomor_pasal' => 'Pasal 530', 
                'isi_pasal' => '(1) Seorang petugas agama yang melakukan upacara perkawinan, yang hanya dapat dilangsungkan di hadapan pejabat Catatan Sipil, sebelum dinyatakan padanya bahwa pelangsungan di muka pejabat itu sudah dilakukan, diancam dengan pidana denda paling banyak empat ribu lima ratus rupiah. (2) Jika ketika melakukan pelanggaran belum lewat dua tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran sama, pidana denda dapat diganti dengan pidana kurungan paling lama dua bulan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'V',
                'nomor_pasal' => 'Pasal 531',
                'isi_pasal' => 'Barang siapa ketika menyaksikan bahwa ada orang yang sedang menghadapi maut tidak memberi pertolongan yang dapat diberikan padanya tanpa selayaknya menimbulkan bahaya bagi dirinya atau orang lain, diancam, jika kemudian orang itu meninggal, dengan pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 532', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama tiga hari atau pidana denda paling banyak dua ratus dua puluh lima rupiah: 1. barang siapa di muka umum menyanyikan lagu-lagu yang melanggar kesusilaan; 2. barang siapa di muka umum mengadakan pidato yang melanggar kesusilaan; 3. barang siapa di tempat yang terlihat dari jalan umum mengadakan tulisan atau gambaran yang melanggar kesusilaan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 533', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama dua bulan atau pidana denda paling banyak tiga ribu rupiah: 1. barang siapa di tempat untuk lalu lintas umum dengan terang-terangan mempertunjukkan atau menempelkan tulisan dengan judul, kulit, atau isi yang dibikin terbaca, maupun gambar atau benda, yang mampu membangkitkan nafsu birahi para remaja; 2. barang siapa di tempat untuk lalu lintas umum dengan terang-terangan memperdengarkan isi tulisan yang mampu membangkitkan nafsu birahi para remaja; 3. barang siapa secara terang-terangan atau tanpa diminta menawarkan suatu tulisan, gambar atau barang yang dapat merangsang nafsu berahi para remaja maupun secara terang-terangan atau dengan menyiarkan tulisan tanpa diminta, menunjuk sebagai bisa didapat, tulisan atau gambar yang dapat membangkitkan nafsu berahi para remaja; 4. barang siapa menawarkan, memberikan untuk terus atau sementara waktu, menyerahkan atau memperlihatkan gambar atau benda yang demikian, pada seorang belum dewasa dan di bawah umur tujuh belas tahun; 5. barang siapa memperdengarkan isi tulisan yang demikian di muka seorang yang belum dewasa dan dibawah umur tujuh belas tahun.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 534', 
                'isi_pasal' => 'Barang siapa secara terang-terangan mempertunjukkan sesuatu sarana untuk mencegah kehamilan maupun secara terang-terangan atau tanpa diminta menawarkan, ataupun secara terang-terangan atau dengan menyiarkan tulisan tanpa diminta, menunjuk sebagai bisa didapat, sarana atau perantaraan (diensten) yang demikian itu, diancam dengan pidana kurungan paling lama dua bulan atau pidana denda paling banyak tiga ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 536', 
                'isi_pasal' => '(1) Barang siapa terang dalam keadaan mabuk berada di jalan umum, diancam dengan pidana denda paling banyak dua ratus dua puluh lima rupiah. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama atau yang dirumuskan dalam pasal 492, pidana denda dapat diganti dengan pidana kurungan paling lama tiga hari. (3) Jika terjadi pengulangan kedua dalam satu tahun setelah pemidanaan pertama berakhir dan menjadi tetap, dikenakan pidana kurungan paling lama dua minggu. (4) Pada pengulangan ketiga kalinya atau lebih dalam satu tahun, setelah pemidanaan yang kemudian sekali karena pengulangan kedua kalinya atau lebih menjadi tetap, dikenakan pidana kurungan paling lama tiga bulan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 537', 
                'isi_pasal' => 'Barang siapa di luar kantin tentara menjual atau memberikan minuman keras atau arak kepada anggota Angkatan Bersenjata di bawah pangkat letnan atau kepada istrinya, anak atau pelayan, diancam dengan pidana kurungan paling lama tiga minggu atau pidana denda paling tinggi seribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 538', 
                'isi_pasal' => 'Penjual atau wakilnya yang menjual minuman keras yang dalam menjalankan pekerjaan memberikan atau menjual minuman keras atau arak kepada seorang anak di bawah umur enam belas tahun, diancam dengan pidana kurungan paling lama tiga minggu atau pidana denda paling tinggi empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 539', 
                'isi_pasal' => 'Barang siapa pada kesempatan diadakan pesta keramaian untuk umum atau pertunjukkan rakyat atau diselenggarakan arak-arakan untuk umum, menyediakan secara cuma-cuma minuman keras atau arak dan atau menjanjikan sebagai hadiah, diancam dengan pidana kurungan paling lama dua belas hari atau pidana denda paling tinggi tiga ratus tujuh puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 540', 
                'isi_pasal' => '(1) Diancam dengan pidana kurungan paling lama delapan hari atau pidana denda paling banyak dua ribu dua ratus lima puluh rupiah: 1. barang siapa menggunakan hewan untuk pekerjaan yang terang melebihi kekuatannya; 2. barang siapa tanpa perlu menggunakan hewan untuk pekerjaan dengan cara yang menyakitkan atau yang merupakan siksaan bagi hewan tersebut; 3. barang siapa menggunakan hewan yang pincang atau yang mempunyai cacat lainnya, yang kudisan, luka-luka atau yang jelas sedang hamil maupun sedang menyusui untuk pekerjaan yang karena keadaannya itu tidak sesuai atau yang menyakitkan maupun yang merupakan siksaan bagi hewan tersebut; 4. barang siapa mengangkut atau menyuruh mengangkut hewan tanpa perlu dengan cara yang menyakitkan atau yang merupakan siksaan bagi hewan tersebut; 5. barang siapa mengangkut atau menyuruh mengangkut hewan tanpa diberi atau disuruh beri makan atau minum. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun setelah ada pemidanaan yang menjadi tetap karena pelanggaran yang sama karena salah satu pelanggaran pada pasal 302, dapat dikenakan pidana kurungan paling lama empat belas hari.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 541', 
                'isi_pasal' => '(1) Diancam dengan pidana denda paling banyak dua ratus dua puluh lima rupiah: 1. barang siapa menggunakan sebagai kuda beban, tunggangan atau kuda penarik kereta padahal kuda tersebut belum tukar gigi atau kedua gigi dalamnya di rahang atas belum menganggit kedua gigi dalamnya di rahang bawah; 2. barang siapa memasangkan pakaian kuda pada kuda tersebut dalam butir 1 atau mengikat maupun memasang kuda itu pada kendaraan atau kuda tarikan; 3. barang siapa menggunakan sebagai kuda beban, tunggangan atau penarik kereta seekor kuda induk, dengan membiarkan anaknya yang belum tumbuh keenam gigi mukanya, mengikutinya. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun setelah ada pemidanaan yang menjadi tetap karena pelanggaran yang sama atau yang berdasarkan pasal 540, ataupun karena kejahatan berdasarkan pasal 302, pidana denda dapat diganti dengan pidana kurungan paling lama tiga hari.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 542', 
                'isi_pasal' => 'Ditiadakan berdasarkan Undang-undang No. 7 Tahun 1974.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 543', 
                'isi_pasal' => 'Ditiadakan berdasarkan S.23 - 277, 352.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 544', 
                'isi_pasal' => '(1) Barang siapa tanpa izin kepala polisi atau pejabat yang ditunjuk untuk itu mengadakan sabungan ayam atau jangkrik di jalan umum atau di pinggirnya, maupun di tempat yang dapat dimasuki oleh khalayak umum, diancam dengan pidana kurungan paling lama enam hari atau pidana denda paling banyak tiga ratus tujuh puluh lima rupiah. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidananya dapat dilipatduakan.'],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 545', 
                'isi_pasal' => '(1) Barang siapa menjadikan sebagai pencariannya untuk menyatakan peruntungan seseorang, untuk mengadakan peramalan atau penafsiran impian, diancam dengan pidana kurungan paling lama enam hari atau pidana denda paling banyak tiga ratus rupiah. (2) Jika ketika melakukan pelanggaran belum lewat satu tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidananya dapat dilipatduakan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 546', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah: 1. barang siapa menjual, menawarkan, menyerahkan, membagikan atau mempunyai persediaan untuk dijual atau dibagikan jimat-jimat atau benda-benda yang dikatakan olehnya mempunyai kekuatan gaib; 2. barang siapa mengajar ilmu-ilmu atau kesaktian-kesaktian yang bertujuan menimbulkan kepercayaan bahwa melakukan perbuatan pidana tanpa kemungkinan bahaya bagi diri sendiri.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VI',  
                'nomor_pasal' => 'Pasal 547', 
                'isi_pasal' => 'Seorang saksi, yang ketika diminta untuk memberi keterangan di bawah sumpah menurut ketentuan undang-undang, dalam sidang pengadilan memakai jimat-jimat atau benda-benda sakti, diancam dengan pidana kurungan paling lama sepuluh hari atau pidana denda paling banyak tujuh ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VII', 
                'nomor_pasal' => 'Pasal 548', 
                'isi_pasal' => 'Barang siapa tanpa wenang membiarkan unggas ternaknya berjalan di kebun, di tanah yang sudah ditaburi, ditugali atau ditanami, diancam dengan pidana denda paling banyak dua ratus dua puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VII', 
                'nomor_pasal' => 'Pasal 549', 
                'isi_pasal' => '(1) Barang siapa tanpa wenang membiarkan ternaknya berjalan di kebun, di padang rumput atau di ladang rumput atau di padang rumput kering, baik di tanah yang telah ditaburi, ditugali atau ditanami atau yang hasilnya belum diambil, ataupun di tanah kepunyaan orang lain oleh yang berhak dilarang dimasuki dan sudah diberi tanda larangan yang nyata bagi pelanggar, diancam dengan pidana denda paling banyak tiga ratus tujuh puluh lima rupiah. (2) Ternak yang menyebabkan pelanggaran, dapat dirampas. (3) Jika ketika melakukan pelanggaran belum lewat satu tahun sejak adanya pemidanaan yang menjadi tetap karena pelanggaran yang sama, pidana denda dapat diganti dengan pidana kurungan paling lama empat belas hari.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VII', 
                'nomor_pasal' => 'Pasal 550', 
                'isi_pasal' => 'Barang siapa tanpa wenang berjalan atau berkendaraan di tanah yang sudah ditaburi, ditugali atau ditanami, diancam dengan pidana denda paling banyak dua ratus dua puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VII', 
                'nomor_pasal' => 'Pasal 551', 
                'isi_pasal' => 'Barang siapa tanpa wenang, berjalan atau berkendaraan di atas tanah yang oleh pemiliknya dengan cara jelas dilarang memasukinya, diancam dengan pidana denda paling banyak dua ratus dua puluh lima rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 552', 
                'isi_pasal' => 'Seorang pejabat yang berwenang mengeluarkan salinan atau petikan putusan pengadilan, jika mengeluarkan salinan atau petikan demikian itu sebelum putusan ditandatangani sebagaimana mestinya, diancam dengan pidana denda paling banyak tujuh ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 553', 
                'isi_pasal' => 'Ditiadakan berdasarkan S. 35 - 576; lihat pasal 528.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 554', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama dua bulan atau pidana denda paling banyak empat ribu lima ratus rupiah, seorang bekas pejabat yang tanpa izin penguasa yang berwenang menahan surat-surat jabatan.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 555', 
                'isi_pasal' => 'Diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak dua ribu dua ratus lima puluh rupiah kepala lembaga pemasyarakatan, tempat menahan orang tahanan sementara atau orang yang disandera, atau kepala rumah pendidikan negara atau rumah sakit jiwa, yang menerima atau menahan orang dalam tempat itu dengan tidak meminta diperlihatkan kepadanya lebih dahulu surat perintah penguasa yang berwenang, atau putusan pengadilan, atau yang alpa menuliskan menurut aturan dalam daftar hal penerimaan itu dan perintah atau keputusan yang menjadi alasan orang itu diterima.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 556', 
                'isi_pasal' => 'Seorang pejabat catatan sipil yang sebelum melangsungkan perkawinan tidak minta diberikan padanya bukti-bukti atau keterangan-keterangan yang diharuskan menurut aturan-aturan umum, diancam dengan pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 557', 
                'isi_pasal' => 'Diancam dengan pidana denda paling banyak seribu lima ratus rupiah: 1. seorang pejabat catatan sipil yang bertindak berlawanan dengan ketentuan aturan-aturan umum mengenai register atau akta catatan sipil, mengenai tata cara sebelumnya perkawinan atau pelaksanaan perkawinan; 2. setiap orang lain penyimpan register itu yang bertindak berlawanan dengan ketentuan aturan-aturan umum mengenai regiter dan akta catatan sipil.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 557a',
                'isi_pasal' => 'Seorang perantara catatan sipil yang bertindak berlawanan dengan ketentuan reglemen pemeliharaan register catatan sipil orang-orang Cina diancam dengan denda paling banyak tujuh ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 558', 
                'isi_pasal' => 'Seorang pejabat catatan sipil yang tidak memasukkan suatu akta dalam register atau menuliskan suatu akta di atas kertas lepas, diancam dengan pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 558a',
                'isi_pasal' => 'Seorang perantara catatan sipil yang tidak membikin akta daripada suatu pemberitahuan kepadanya menurut ketentuan tentang pemeliharaan register catatan sipil bagi orang-orang Cina, atau menuliskan suatu akta di kertas lepas, diancam dengan pidana denda paling banyak dua ribu dua ratus lima puluh rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'VIII',
                'nomor_pasal' => 'Pasal 559', 
                'isi_pasal' => 'Diancam dengan pidana denda paling banyak seribu lima ratus rupiah: 1. seorang pejabat catatan sipil yang tidak melaporkan kepada penguasa yang berwenang sebagaimana diharuskan oleh ketentuan undang-undang; 2. seorang pejabat yang tidak melaporkan kepada pejabat catatan sipil, sebagaimana diharuskan oleh ketentuan undang-undang.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 560', 
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang berangkat sebelum dibikin dan ditandatangani daftar anak buah yang diharuskan oleh ketentuan undang-undang, diancam dengan pidana denda paling banyak seribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 561', 
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang tidak mempunyai di kapalnya kertas-kertas kapal, buku-buku dan surat-surat yang diharuskan oleh ketentuan undang-undang, diancam dengan pidana denda paling banyak seribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 562', 
                'isi_pasal' => 'Diancam dengan pidana denda paling banyak empat ribu lima ratus rupiah: 1. seorang nakoda kapal Indonesia yang tidak menjaga supaya buku-buku harian di kapal dipelihara menurut aturan-aturan umum, atau tidak memperlihatkan buku-buku harian itu di mana dan apabila menurut ketentuan undang-undang itu diharuskan padanya; 2. seorang nakoda kapal Indonesia yang tidak memelihara register pidana yang diharuskan oleh aturan-aturan umum menurut ketentuan undang-undang, atau tidak memperlihatkannya di mana dan apabila menurut ketentuan undang-undang itu diharuskan padanya; 3. seorang nakoda kapal Indonesia yang jika register pidana tidak ada, tidak memberi keterangan kepada hakim sebagaimana diharuskan menurut ketentuan undang-undang; 4. seorang pengusaha pelayaran, pemegang buku atau nakoda kapal Indonesia yang menolak permintaan untuk memperlihatkan kepada yang berkepentingan buku-buku harian yang dipelihara di kapalnya, atau menolak untuk memberi salinan dari buku-buku itu, dengan membayar biayanya.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 563', 
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang tidak mencukupi kewajibannya menurut undang-undang mengenai pencatatan dan pemberitahuan kelahiran dan kematian selama perjalanannya, diancam dengan pidana denda paling banyak seribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 564', 
                'isi_pasal' => 'Seorang nakoda atau anak buah yang tidak memperhatikan ketentuan undang-undang untuk mencegah tabrakan disebabkan karena kapalnya melanggar atau terdampar, diancam dengan pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 565', 
                'isi_pasal' => 'Barang siapa tanpa wewenang menggunakan suatu tanda pengenal walaupun dengan sedikit perubahan, menurut ketentuan undang-undang yang hanya boleh dipakai oleh kapal-kapal rumah sakit, sekoci-sekoci kapal-kapal yang demikian, maupun perahu-perahu yang digunakan untuk pekerjaan merawat orang sakit, diancam dengan pidana kurungan paling lama satu bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 566', 
                'isi_pasal' => 'Seorang nakoda kapal Indonesia yang tidak memenuhi kewajiban yang dibebankan padanya menurut pasal 358a Kitab Undang-undang Hukum Dagang, diancam dengan pidana kurungan paling lama tiga bulan atau pidana denda paling banyak empat ribu lima ratus rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 567', 
                'isi_pasal' => 'Seorang penguasa pelabuhan atau nakoda kapal Indonesia yang menggunakan untuk pekerjaan anak buah orang-orang yang tidak mengadakan perjanjian kerja sebagaimana dimaksud pasal 395 Kitab Undang-undang Hukum Dagang atau yang tidak menjalankan perusahaan di kapal atas biaya sendiri, ataupun menggunakan orang-orang yang namanya tidak ada dalam daftar anak buah, dalam hal ini diharuskan oleh aturan-aturan umum, diancam dengan pidana denda paling banyak sembilan ratus rupiah untuk tiap-tiap orang yang bekerja demikian.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 568', 
                'isi_pasal' => 'Barang siapa menandatangani konosemen yang dikeluarkan dengan melanggar ketentuan pasal 517b Kitab Undang-undang Hukum Dagang, begitu pula orang untuk siapa dibutuhkan tanda tangan sesuai dengan kewenangannya, diancam jika konosemen lalu dikeluarkan, dengan pidana denda paling banyak tujuh puluh lima ribu rupiah.'
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN', 
                'nomor_bab' => 'IX',  
                'nomor_pasal' => 'Pasal 569', 
                'isi_pasal' => '(1) Barang siapa menandatangani surat jalan yang dikeluarkan dengan melanggar ketentuan pasal 533b Kitab Undang-undang Hukum Dagang, begitu pula orang untuk siapa dibutuhkan tandatangan sesuai dengan kewenangannya, diancam, jika surat lalu dikeluarkan, dengan pidana denda paling banyak tujuh puluh lima ribu rupiah. (2) Diancam dengan pidana yang sama, barang siapa bertentangan dengan pasal 533b Kitab Undang-undang Hukum dagang, memberikan surat jalan yang tidak ditandatangani, begitu pula orang untuk siapa surat diberikan menurut kewenangannya.'
                ]
        ];

        foreach ($pasalKUHP as $data) {
            $bab = Bab::whereHas('buku', function ($query) use ($data) {
                $query->where('judul', $data['buku']);
            })->where('nomor_bab', $data['nomor_bab'])->first();

            if (!$bab) continue;

            Pasal::firstOrCreate([
                'bab_id' => $bab->id,
                'nomor_pasal' => $data['nomor_pasal'],
            ], [
                'isi_pasal' => $data['isi_pasal']
            ]);
        }
    }
}
