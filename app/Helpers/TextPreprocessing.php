<?php
namespace App\Helpers;

use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;

class TextPreprocessing
{
    private static $stopWordRemover;
    private static $stemmer;

    public static function init()
    {
        // Inisialisasi Stopword Remover
        $stopWordRemoverFactory = new StopWordRemoverFactory();
        self::$stopWordRemover = $stopWordRemoverFactory->createStopWordRemover();

        // Inisialisasi Stemmer
        $stemmerFactory = new StemmerFactory();
        self::$stemmer = $stemmerFactory->createStemmer();
    }


    // Tokenisasi dan case folding
    public static function tokenize($text)
    {
        // Case Folding dan Tokenizing
        $text = strtolower($text);
        return preg_split('/[\s,\.!?;:()"\'-]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    }


    // Filter tokens untuk hanya menyimpan token yang terdiri dari huruf
    public static function filterTokens($tokens)
    {
        // Filtering token (hanya huruf)
        return array_filter($tokens, function($token) {
            return preg_match('/^[a-z]+$/', $token);
        });
    }

    // Hapus stopwords
    public static function removeStopwords($tokens)
    {
        // Remove Stopwords
        return array_map(function($token) {
            return self::$stopWordRemover->remove($token);
        }, $tokens);
    }

    // Stemming token
    public static function stemTokens($tokens)
    {
        // Stemming token
        return array_map(function($token) {
            return self::$stemmer->stem($token);
        }, $tokens);
    }

    public static function preprocessText($text)
    {
        // Inisialisasi Sastrawi jika belum
        if (!self::$stopWordRemover instanceof \Sastrawi\StopWordRemover\StopWordRemover) {
            self::init();
        }

        // 1. Tokenize (termasuk case folding)
        $tokens = self::tokenize($text);

        // 2. Filter tokens
        $filteredTokens = self::filterTokens($tokens);

        // 3. Remove stopwords
        $filteredTokens = self::removeStopwords($filteredTokens);

        // 4. Stemming
        $stemmedTokens = self::stemTokens($filteredTokens);

        return $stemmedTokens;
    }
}