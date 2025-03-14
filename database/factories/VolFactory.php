<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vol;
use App\Models\Avion;
use App\Models\Pilote;

class VolFactory extends Factory
{
    protected $model = Vol::class;

    public function definition()
    {
        return [
            'CodeAv' => Avion::inRandomOrder()->first()->CodeAv ?? 'A001',
            'MatPil' => Pilote::inRandomOrder()->first()->MatPil ?? 'P00001',
            'DateVol' => fake()->date(),
            'VilleDép' => fake()->city(),
            'VilleArr' => fake()->city(),
            'NbrePass' => fake()->numberBetween(40, 250),
            'VolRéalisé' => fake()->boolean(),
        ];
    }
    
}
