<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasal extends Model
{
    use HasFactory;
    protected $table = 'pasal';
    protected $guarded = ['id'];

    public function bab()
    {
        return $this->belongsTo(Bab::class);
    }

    public function documentTerms()
    {
        return $this->hasMany(DocumentTerm::class);
    }

}

    // public function similarityScores()
    // {
    //     return $this->hasMany(SimilarityScore::class);
    // }