<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //piura
        Provincia::create([
            'name'=>'Piura',
            'disctrict_id'=>1,
        ]);
        Provincia::create([
            'name'=>'Castilla',
            'disctrict_id'=>1,
        ]);
        Provincia::create([
            'name'=>'26 de Octubre',
            'disctrict_id'=>1,
        ]);
        //paita
        Provincia::create([
            'name'=>'Paita',
            'disctrict_id'=>2,
        ]);
        Provincia::create([
            'name'=>'Colán',
            'disctrict_id'=>2,
        ]);
        Provincia::create([
            'name'=>'Vichayal',
            'disctrict_id'=>2,
        ]);
        //sullana
        Provincia::create([
            'name'=>'Sullana',
            'disctrict_id'=>3,
        ]);
        Provincia::create([
            'name'=>'Bellavista',
            'disctrict_id'=>3,
        ]);
        Provincia::create([
            'name'=>'Ignacio Escudero',
            'disctrict_id'=>3,
        ]);
    }
}
