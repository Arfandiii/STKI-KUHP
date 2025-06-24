<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueryTerm extends Model
{
    use HasFactory;
    protected $table = 'query_terms';
    protected $guarded = ['id'];

    public function getQuery()
    {
        return $this->belongsTo(Query::class);
    }
}
