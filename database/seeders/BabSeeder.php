<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Bab;

class BabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $babkuhp = [
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'I',
                'label_bab' => 'BATAS-BATAS BERLAKUNYA ATURAN PIDANA DALAM PERUNDANG-UNDANGAN',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'II',
                'label_bab' => 'PIDANA',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'III',
                'label_bab' => 'HAL-HAL YANG MENGHAPUSKAN, MENGURANGI ATAU MEMBERATKAN PIDANA',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IV',
                'label_bab' => 'PERCOBAAN',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'V',
                'label_bab' => 'PENYERTAAN DALAM TINDAK PIDANA',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VI',
                'label_bab' => 'PERBARENGAN TINDAK PIDANA',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'VII',
                'label_bab' => 'PENGAJUAN DAN PENARIKAN KEMBALI PENUNTUTAN',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'I',
                'label_bab' => 'HAPUSNYA KEWENANGAN MENUNTUT PIDANA DAN MENJALANKAN PIDANA',
            ],
            [
                'buku' => 'BUKU KESATU ATURAN UMUM',
                'nomor_bab' => 'IX',
                'label_bab' => 'ARTI BEBERAPA ISTILAH YANG DIPAKAI DALAM KITAB UNDANG-UNDANG',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'I',
                'label_bab' => 'KEJAHATAN TERHADAP KEAMANAN NEGARA',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'II',
                'label_bab' => 'KEJAHATAN-KEJAHATAN TERHADAP MARTABAT PRESIDEN DAN WAKIL PRESIDEN',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'III',
                'label_bab' => 'KEJAHATAN-KEJAHATAN TERHADAP NEGARA SAHABAT DAN TERHADAP KEPALA NEGARA SAHABAT SERTA WAKILNYA',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IV',
                'label_bab' => 'KEJAHATAN TERHADAP MELAKUKAN KEWAJIBAN DAN HAK KENEGARAAN',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'V',
                'label_bab' => 'KEJAHATAN TERHADAP KETERTIBAN UMUM',
            ],
        ];

        foreach ($babkuhp as $data) {
            $buku = Buku::where('judul', $data['buku'])->first();

            if (!$buku) continue;

            Bab::firstOrCreate([
                'buku_id' => $buku->id,
                'nomor_bab' => $data['nomor_bab'],
            ], [
                'label_bab' => $data['label_bab']
            ]);
        }
    }
}
