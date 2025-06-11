<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bab extends Model
{   
    
    protected $table = 'bab';
    protected $guarded = ['id'];

    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }

    public function pasals(): HasMany
    {
        return $this->hasMany(Pasal::class);
    }
}
