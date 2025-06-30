<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;
use Sastrawi\StopWordRemover\StopWordRemover;

class TextPreprocessing
{
    private static $stopWordRemover;
    private static $stemmer;

    // Daftar kata tidak bermakna (huruf daftar dan angka romawi umum)
    private static $customStopwords = [
        'i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'viii', 'ix', 'x',
        'xi', 'xii', 'xiii', 'xiv', 'xv', 'xvi', 'xvii', 'xviii', 'xix', 'xx',
        'xxi', 'xxii', 'xxiii', 'xxiv', 'xxv', 'xxvi', 'xxvii', 'xxviii', 'xxix', 'xxx',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
    ];

    /**
     * Inisialisasi Sastrawi (Stopword Remover & Stemmer)
     */
    private static function ensureInitialized()
    {
        if (!self::$stopWordRemover || !self::$stemmer) {
            $stopWordRemoverFactory = new StopWordRemoverFactory();
            self::$stopWordRemover = $stopWordRemoverFactory->createStopWordRemover();

            $stemmerFactory = new StemmerFactory();
            self::$stemmer = $stemmerFactory->createStemmer();
        }
    }


    /**
     * Melakukan case folding, normalisasi simbol, dan tokenisasi teks menjadi array kata.
     */
    public static function tokenize($text)
    {
        // 1. Case folding
        $text = strtolower($text);

        // 2. Hilangkan angka daftar seperti: 1. 2) 3. dll
        $text = preg_replace('/\b[0-9]+[\.\)]/', '', $text);

        // 3. Hilangkan simbol lain yang tidak relevan (misal tanda titik koma ganda, tanda petik ganda, dll)
        $text = preg_replace('/[^\p{L}\s]+/u', ' ', $text); // hanya huruf dan spasi (Unicode-aware)

        // 4. Tokenisasi dengan split by spasi (karena simbol sudah dibersihkan)
        return preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    }


    /**
     * Menyaring token hanya yang terdiri dari huruf dan panjang > 2 karakter.
     */
    public static function filterTokens($tokens)
    {
        // Filtering token (hanya huruf dan tidak kosong)
        return array_filter($tokens, function ($token) {
            return preg_match('/^[a-z]+$/', $token) && mb_strlen($token) > 2;
        });
    }

    /**
     * Menghapus stopwords standar Sastrawi dan daftar kata tidak bermakna khusus.
     */
    public static function removeStopwords($tokens)
    {
        // Remove Stopwords
        return array_filter(array_map(function ($token) {
            $cleaned = self::$stopWordRemover->remove($token);
            return !in_array($cleaned, self::$customStopwords) ? $cleaned : '';
        }, $tokens));
    }


    /**
     * Melakukan stemming terhadap token.
     */
    public static function stemTokens($tokens)
    {
        return array_filter(array_map(function($token) {
            return self::$stemmer->stem($token);
        }, $tokens), function($token) {
            return $token !== '';
        });
    }


    /**
     * Menjalankan semua proses preprocessing dalam satu fungsi:
     * case folding → tokenisasi → filter → stopword removal → stemming.
     */
    public static function preprocessText($text)
    {
        // Inisialisasi Sastrawi jika belum
        self::ensureInitialized();
        // 1. Tokenize (termasuk case folding)
        $tokens = self::tokenize($text);
        // 2. Filter tokens
        $filteredTokens = self::filterTokens($tokens);
        // 3. Remove stopwords
        $filteredTokens = self::removeStopwords($filteredTokens);
        // 4. Stemming
        $stemmedTokens = self::stemTokens($filteredTokens);
        // 5. Kembalikan hasil akhir
        return $stemmedTokens;
    }
}