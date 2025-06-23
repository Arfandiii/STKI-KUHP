<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TermIndex extends Model
{
    use HasFactory;

    protected $table = 'term_index';

    protected $guarded = ['id'];

    public function pasal()
    {
        return $this->belongsTo(Pasal::class);
    }
}
