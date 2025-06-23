<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasal extends Model
{
    use HasFactory;
    protected $table = 'pasal';
    protected $guarded = ['id'];
    protected $fillable = ['bab_id', 'nomor_pasal', 'isi_pasal', 'vector'];
    protected $casts = ['vector' => 'array'];


    public function bab()
    {
        return $this->belongsTo(Bab::class);
    }

    public function termIndex()
    {
        return $this->hasMany(TermIndex::class);
    }
}
