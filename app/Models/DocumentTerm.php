<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentTerm extends Model
{
    use HasFactory;
    protected $table = 'document_terms';
    protected $guarded = ['id'];

    public function pasal()
    {
        return $this->belongsTo(Pasal::class);
    }
}
