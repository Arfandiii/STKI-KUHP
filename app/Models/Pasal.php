<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasal extends Model
{
    protected $table = 'pasal';
    protected $guarded = ['id'];

    public function bab(): BelongsTo
    {
        return $this->belongsTo(Bab::class);
    }
}
