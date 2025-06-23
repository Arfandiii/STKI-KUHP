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
