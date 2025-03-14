<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pilote;

class PiloteSeeder extends Seeder
{
    public function run()
    {
        Pilote::factory(10)->create();
    }
}
