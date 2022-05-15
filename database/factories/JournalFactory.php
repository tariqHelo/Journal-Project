<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {  
        $type = ['sal' , 'buy'];
        $size = ['L' , 'XL' , 'M' , 'S' , 'XXL'];

        return [
            'entry_date' => $this->faker->unique()->dateTimeBetween('-7 days', '+2 months')->format('Y-m-d'),
            'entry_time' => $this->faker->dateTime,
            'exit_date'  => $this->faker->unique()->dateTimeBetween('-7 days', '+2 months')->format('Y-m-d'),
            'position_nr'=> $this->faker->dateTime,
            'symbol'     => $this->faker->currencyCode,
            'type'       => $type[rand(0 ,1)],
            'size'       => $size[rand(0 ,4)],
            'entry_price'=> $this->faker->unique()->randomFloat(1, 0, 1000),
            's/l'        => $this->faker->unique()->randomFloat(1, 0, 1000),
            't/p'        => $this->faker->unique()->randomFloat(1, 0, 1000),
            'exit_price' => $this->faker->unique()->randomFloat(2, 0, 1000),
            'commission' => $this->faker->unique()->randomFloat(1, 0, 100),
            'swap'       => $this->faker->unique()->randomFloat(1, 0, 100),  
            'profit'     => $this->faker->unique()->numberBetween(100, 500),
            'user_id' => $this->faker->unique()->numberBetween(1, 10),
        ];
    } 
}
