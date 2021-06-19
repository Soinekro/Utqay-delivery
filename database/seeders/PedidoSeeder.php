<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Disctrict;
use App\Models\Motorizado;
use App\Models\Pedido;
use App\Models\Product;
use App\Models\TipoPago;
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
                rand(1,10),
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
        Pedido::factory(30)->create([
            'address'=>'calle falsa 123 cruce con avenida viva cdr 5',
            'monto'=>random_int(20,400),
            'status'=>1,
            'client_id'=>Client::all()->random()->id,
            'motorizado_id'=>null,
            'disctrict_id'=>Disctrict::all()->random()->id,
            'tipo_pago_id'=>TipoPago::all()->random()->id,
        ]);
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
