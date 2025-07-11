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
                'nomor_bab' => 'VIII',
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
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VI',
                'label_bab' => 'PERKELAHIAN TANDING',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VII',
                'label_bab' => 'KEJAHATAN YANG MEMBAHAYAKAN KEAMANAN UMUM BAGI ORANG ATAU BARANG',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'VIII',
                'label_bab' => 'KEJAHATAN TERHADAP PENGUASA UMUM',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'IX',
                'label_bab' => 'SUMPAH PALSU DAN KETERANGAN PALSU',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'X',
                'label_bab' => 'PEMALSUAN MATA UANG DAN UANG KERTAS',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XI',
                'label_bab' => 'PEMALSUAN MATERAI DAN MEREK',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XII',
                'label_bab' => 'PEMALSUAN SURAT',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIII',
                'label_bab' => 'KEJAHATAN TERHADAP ASAL-USUL DAN PERKAWINAN',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIV',
                'label_bab' => 'KEJAHATAN TERHADAP KESUSILAAN',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XV',
                'label_bab' => 'MENINGGALKAN ORANG YANG PERLU DITOLONG',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVI',
                'label_bab' => 'PENGHINAAN',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVII',
                'label_bab' => 'Membuka Rahasia',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XVIII',
                'label_bab' => 'Kejahatan Terhadap Kemerdekaan Orang',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XIX',
                'label_bab' => 'Kejahatan Terhadap Nyawa',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XX',
                'label_bab' => 'Penganiayaan',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXI',
                'label_bab' => 'Menyebabkan Mati Atau Luka-Luka Karena Kealpaan',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXII',
                'label_bab' => 'Pencurian',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIII',
                'label_bab' => 'Pemerasan dan Pengancaman',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIV',
                'label_bab' => 'Penggelapan',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXV',
                'label_bab' => 'Perbuatan Curang',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVI',
                'label_bab' => 'Perbuatan Merugikan Pemiutang atau Orang yang Mempunyai Hak',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVII',
                'label_bab' => 'Menghancurkan atau Merusakkan Barang',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXVIII',
                'label_bab' => 'Kejahatan Jabatan',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX',
                'label_bab' => 'Kejahatan Pelayaran',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXIX A',
                'label_bab' => 'Kejahatan Penerbangan Dan Kejahatan Terhadap Sarana/Prasarana Penerbangan',
            ],
            [
                'buku' => 'BUKU KEDUA KEJAHATAN',
                'nomor_bab' => 'XXX',
                'label_bab' => 'Penadahan Penerbitan dan Percetakan',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'I',
                'label_bab' => 'Tentang Pelanggaran Keamanan Umum bagi Orang atau Barang dan Kesehatan',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'II',
                'label_bab' => 'Pelanggaran Ketertiban Umum',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'III',
                'label_bab' => 'Pelanggaran Terhadap Penguasa Umum',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'IV',
                'label_bab' => 'Pelanggaran Mengenai Asal-Usul dan Perkawinan',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'V',
                'label_bab' => 'Pelanggaran Terhadap Orang yang Memerlukan Pertolongan',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'VI',
                'label_bab' => 'Pelanggaran Kesusilaan',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'VII',
                'label_bab' => 'Pelanggaran Mengenai Tanah, Tanaman dan Pekarangan',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'VIII',
                'label_bab' => 'Pelanggaran Jabatan',
            ],
            [
                'buku' => 'BUKU KETIGA PELANGGARAN',
                'nomor_bab' => 'IX',
                'label_bab' => 'Pelanggaran Pelayaran',
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
