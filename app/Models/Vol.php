<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vol extends Model
{
    use HasFactory;
    protected $fillable = ['CodeAv', 'MatPil', 'DateVol', 'VilleDép', 'VilleArr', 'NbrePass', 'VolRéalisé'];

    public function avion()
    {
        return $this->belongsTo(Avion::class, 'CodeAv', 'CodeAv');
    }

    public function pilote()
    {
        return $this->belongsTo(Pilote::class, 'MatPil', 'MatPil');
    }
}
