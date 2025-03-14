<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    use HasFactory;
    protected $primaryKey = 'CodeAv';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['CodeAv', 'ModèleAv', 'CapacitéAv'];

    public function vols()
    {
        return $this->hasMany(Vol::class, 'CodeAv', 'CodeAv');
    }
}

