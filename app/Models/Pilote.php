<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilote extends Model
{
    use HasFactory;
    protected $primaryKey = 'MatPil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['MatPil', 'NomPrénomPil', 'AdressePil', 'TelPil'];

    public function vols()
    {
        return $this->hasMany(Vol::class, 'MatPil', 'MatPil');
    }
}

