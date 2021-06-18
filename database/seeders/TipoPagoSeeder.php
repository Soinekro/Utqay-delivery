<?php

namespace Database\Seeders;

use App\Models\TipoPago;
use Illuminate\Database\Seeder;

class TipoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPago::create([
            'name'=>'Yape',
        ]);
        TipoPago::create([
            'name'=>'Plin',
        ]);
        TipoPago::create([
            'name'=>'Efectivo',
        ]);
    }
}
