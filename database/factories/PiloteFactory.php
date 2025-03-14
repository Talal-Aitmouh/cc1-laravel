<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pilote;

class PiloteFactory extends Factory
{
    protected $model = Pilote::class;

    public function definition()
{
    return [
        'MatPil' => strtoupper(fake()->lexify('??????')),
        'NomPrénomPil' => fake()->name(),
        'AdressePil' => fake()->address(),
        'TelPil' => fake()->numerify('########'), 

    ];
}

}
