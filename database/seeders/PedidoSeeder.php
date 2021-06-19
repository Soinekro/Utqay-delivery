<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\Product;
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
        $pedidos = Pedido::all();
        foreach ($pedidos as $pedido) {
            $pedido->products()->attach([
                rand(rand(1,5),rand(5,10)),
                rand(11, 20),
                rand(21, 30),
                rand(31, 40),
                rand(41, 50)
            ]);
        /* Pedido::factory(1)->create([
            'cantidad'=> rand(1, 10),
        ]);
        Product::factory(1)->create(

        ); */
        }
        $pedidos = Pedido::all();

        foreach ($pedidos as $pedido) {
            $pedido->alieds()->attach([
                rand(1, 5),
                rand(6, 10),
                rand(11, 15),
                rand(16, 20),
            ]);
        }
    }
}
