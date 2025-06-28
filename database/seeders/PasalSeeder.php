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
