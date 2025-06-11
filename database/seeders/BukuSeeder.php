<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Bab;
use App\Models\Pasal;

class BukuSeeder extends Seeder
{public function run()
    {
        // Buku KUHP
        $buku = Buku::create(['judul' => 'Kitab Undang-Undang Hukum Pidana']);
        
        // Bab I - Ketentuan Umum
        $bab = Bab::create([
            'buku_id' => $buku->id,
            'nomor_bab' => 'I',
            'label_bab' => 'Ketentuan Umum'
        ]);

        // Pasal 1
        Pasal::create([
            'bab_id' => $bab->id,
            'nomor_pasal' => '1',
            'isi_pasal' => "(1) Suatu perbuatan tidak dapat dipidana, kecuali berdasarkan kekuatan ketentuan perundang-undangan pidana yang telah ada.\n(2) Bilamana ada perubahan dalam perundang-undangan sesudah perbuatan dilakukan, maka terhadap terdakwa diterapkan ketentuan yang paling menguntungkannya."
        ]);

        // Pasal 2
        Pasal::create([
            'bab_id' => $bab->id,
            'nomor_pasal' => '2',
            'isi_pasal' => "Ketentuan pidana dalam perundang-undangan Indonesia diterapkan bagi setiap orang yang melakukan sesuatu tindak pidana di Indonesia."
        ]);

        // Pasal 3
        Pasal::create([
            'bab_id' => $bab->id,
            'nomor_pasal' => '3',
            'isi_pasal' => "Ketentuan pidana dalam perundang-undangan Indonesia berlaku bagi setiap orang yang di luar wilayah Indonesia melakukan tindak pidana di dalam kendaraan air atau pesawat udara Indonesia."
        ]);

        // Pasal 4
        Pasal::create([
            'bab_id' => $bab->id,
            'nomor_pasal' => '4',
            'isi_pasal' => "Ketentuan pidana dalam perundang-undangan Indonesia diterapkan bagi setiap orang yang melakukan di luar Indonesia:\n1. salah satu kejahatan berdasarkan pasal-pasal 104, 106, 107,108,dan 131.\n2. suatu kejahatan mengenai mata uang atau uang kertas yang dikeluarkan oleh negara atau bank, ataupun mengenai meterai yang dikeluarkan dan merek yang digunakan oleh Pemerintah Indonesia.\n3. pemalsuan surat hutang atau sertifikat hutang atas tanggungan Indonesia, atas tanggungan suatu daerah atau bagian daerah Indonesia, termasuk pula pemalsuan talon, tanda dividen atau tanda bunga, yang mengikuti surat atau sertifikat itu, dan tanda yang dikeluarkan sebagai pengganti surat tersebut, atau menggunakan surat-surat tersebut di atas, yang palsu atau dipalsukan, seolah-olah asli dan tidak dipalsu;\n4. salah satu kejahatan yang tersebut dalam pasal-pasal 438, 444 sampai dengan 446 tentang pembajakan laut dan pasal 447 tentang penyerahan kendaraan air kepada kekuasaan bajak laut dan pasal 479 huruf j tentang penguasaan pesawat udara secara melawan hukum, pasal 479 huruf I, m, n, dan o tentang kejahatan yang mengancam keselamatan penerbangan sipil."
        ]);

        // Buku Kedua
        $buku2 = Buku::create(['judul' => 'Buku Kedua']);
        
        $babBuku2 = [
            ['I', null, range(104,129)],
            ['II', null, range(130,139)],
            ['III', null, [139,140,141,142,143,144,145]], // Contoh dengan nomor tidak berurutan
            ['IV', null, range(146,153)],
            ['V', null, range(154,181)],
            ['VI', null, range(182,186)],
            ['VII', null, range(187,206)],
        ];

        foreach ($babBuku2 as $bab) {
            $newBab = Bab::create([
                'buku_id' => $buku2->id,
                'nomor_bab' => $bab[0],
                'label_bab' => $bab[1]
            ]);

            foreach ($bab[2] as $nomorPasal) {
                Pasal::create([
                    'bab_id' => $newBab->id,
                    'nomor_pasal' => (string)$nomorPasal,
                    'isi_pasal' => "Isi pasal $nomorPasal dari Buku Kedua, Bab {$bab[0]}"
                ]);
            }
        }
    }
}
