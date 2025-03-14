<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vol;

class VolSeeder extends Seeder
{
    public function run()
    {
        Vol::factory(20)->create();
    }
}
