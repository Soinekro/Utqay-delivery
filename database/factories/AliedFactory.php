<?php

namespace Database\Factories;

use App\Models\Alied;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AliedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alied::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(20),
            'person'=>$this->faker->name(),
            'user_id'=>User::all()->random()->id,
        ];
    }
}
