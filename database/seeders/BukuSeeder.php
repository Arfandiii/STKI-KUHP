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
        $bukukuhp = [
            'BUKU KESATU ATURAN UMUM',
            'BUKU KEDUA KEJAHATAN',
            'BUKU KETIGA Pelanggaran',
        ];

        foreach ($bukukuhp as $judul) {
            Buku::create(['judul' => $judul]);
        }
    }
}
