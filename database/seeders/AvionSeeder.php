<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Avion;

class AvionSeeder extends Seeder
{
    public function run()
    {
        Avion::factory(5)->create();
    }
}
