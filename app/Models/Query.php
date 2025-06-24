<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Query extends Model
{
    use HasFactory;
    protected $table = 'queries';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function queryTerms()
    {
        return $this->hasMany(QueryTerm::class);
    }

    // public function similarityScores()
    // {
    //     return $this->hasMany(SimilarityScore::class);
    // }
}
