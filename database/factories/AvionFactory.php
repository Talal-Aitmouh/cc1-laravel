<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Avion;

class AvionFactory extends Factory
{
    protected $model = Avion::class;

    public function definition()
{
    return [
        'CodeAv' => strtoupper(fake()->lexify('???')),
        'ModèleAv' => fake()->word(),
        'CapacitéAv' => fake()->numberBetween(50, 300),
    ];
}

}
