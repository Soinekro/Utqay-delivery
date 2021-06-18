<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pedidos= Pedido::all();
            foreach ($pedidos as $pedido) {
                $pedido->products()->attach([
                    rand(1,10),
                    rand(11,20),
                    rand(21,30),
                    rand(31,40),
                    rand(41,50)
                ]);
            }
            foreach ($pedidos as $pedido) {
            $pedido->alieds()->attach([
                rand(1,5),
                rand(6,10),
                rand(11,15),
                rand(16,20),
            ]);
        }
        foreach ($pedidos as $pedido) {
            $pedido->disctricts()->attach([
                rand(1,2),
                rand(2,3)
            ]);
        }
    }
}
