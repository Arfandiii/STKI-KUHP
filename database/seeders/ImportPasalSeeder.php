<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Bab;
use App\Models\Pasal;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ImportPasalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = storage_path('app/data/pasal.xlsx');
        $spreadsheet = IOFactory::load($path);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        $header = $rows[0];
        $data = array_slice($rows, 1);

        $buku = $bab = null;

        foreach ($data as $row) {
            $rowData = array_combine($header, $row);

            // Update buku dan bab jika kolom tidak kosong
            if (!empty($rowData['Buku'])) {
                $buku = Buku::firstOrCreate(
                    ['judul' => trim($rowData['Buku'])],
                    ['nomor' => Str::before(trim($rowData['Buku']), ' ')]
                );
            }

            if (!empty($rowData['Bab'])) {
                $bab = Bab::firstOrCreate(
                    [
                        'buku_id' => $buku->id,
                        'judul' => trim($rowData['Bab']),
                    ],
                    ['nomor' => Str::before(trim($rowData['Bab']), ' ')]
                );
            }

            // Gabungkan isi pasal dari 5 kolom
            $isi = '';
            for ($i = 1; $i <= 5; $i++) {
                $kolom = "Isi Pasal Ke $i";
                if (!empty($rowData[$kolom])) {
                    $isi .= trim($rowData[$kolom]) . ' ';
                }
            }

            if (!empty($rowData['Pasal']) && !empty($isi)) {
                Pasal::create([
                    'bab_id' => $bab->id,
                    'nomor' => trim($rowData['Pasal']),
                    'isi' => trim($isi)
                ]);
            }
        }

        echo "Import selesai: buku, bab, dan pasal berhasil dimasukkan.\n";
    }
}
