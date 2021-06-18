<?php

namespace Database\Factories;

use App\Models\Alied;
use App\Models\Client;
use App\Models\Disctrict;
use App\Models\Motorizado;
use App\Models\Pedido;
use App\Models\Product;
use App\Models\TipoPago;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cantidad'=>$this->faker->numberBetween(1,5),
            'address'=>$this->faker->text(100),
            'monto'=>$this->faker->numberBetween(20.00,200.00),
            'status'=>$this->faker->randomElement([1,2,3]),
            'client_id'=>Client::all()->random()->id,
            'motorizado_id'=>Motorizado::all()->random()->id,
            'product_id'=>Product::all()->random()->id,
            'alied_id'=>Alied::all()->random()->id,
            'disctrict_id'=>Disctrict::all()->random()->id,
            'tipo_pago_id'=>TipoPago::all()->random()->id,
        ];
    }
}
