<?php

namespace Database\Factories;

use App\Models\Alied;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(30),
            'description'=>$this->faker->text(250),
            'alied_id'=>Alied::all()->random()->id
        ];
    }
}
