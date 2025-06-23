<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bab extends Model
{   
    use HasFactory;

    protected $table = 'bab';
    protected $guarded = ['id'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function pasals()
    {
        return $this->hasMany(Pasal::class);
    }
}
