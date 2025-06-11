<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    protected $table = 'buku';
    protected $guarded = ['id'];
    
    public function bab():HasMany
    {
        return $this->hasMany(Bab::class);
    }
}
