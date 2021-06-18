<?php

namespace Database\Seeders;

use App\Models\Disctrict;
use Illuminate\Database\Seeder;

class DisctrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disctrict::create([
            'name'=>'Piura'
        ]);
        Disctrict::create([
            'name'=>'Paita'
        ]);
        Disctrict::create([
            'name'=>'Sullana'
        ]);
    }
}
