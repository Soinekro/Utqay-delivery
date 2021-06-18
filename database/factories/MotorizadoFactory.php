<?php

namespace Database\Factories;

use App\Models\Disctrict;
use Illuminate\Support\Str;
use App\Models\Motorizado;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorizadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Motorizado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'placa'=>$this->faker->word(8),
            'licencia'=>$this->faker->text(20),
            'dni'=>$this->faker->numberBetween(10000000,90000000),
            'status'=>$this->faker->randomElement([1,2]),
            'user_id'=>User::all()->random()->id,
            'disctrict_id'=>Disctrict::all()->random()->id,
        ];
    }
}
