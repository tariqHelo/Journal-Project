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
            'entry_date' => $this->faker->unique()->dateTimeBetween('-7 days', '+1 months')->format('Y-m-d H:i:s'),
            // 'entry_time' => $this->faker->time( 'H:i:s',  rand(1,54000)),
            'exit_date'  => $this->faker->unique()->dateTimeBetween('-7 days', '+2 months')->format('Y-m-d H:i:s'),
            'position_nr'=> $this->faker->randomDigit,
            'symbol'     => $this->faker->currencyCode,
            'type'       => $type[rand(0 ,1)],
            'size'       => $this->faker->unique()->randomFloat(1, 0, 10),
            'entry_price'=> $this->faker->unique()->randomFloat(1, 0, 1000),
            's_l'        => $this->faker->unique()->randomFloat(1, 0, 1000),
            't_p'        => $this->faker->unique()->randomFloat(1, 0, 1000),
            'exit_price' => $this->faker->unique()->randomFloat(2, 0, 1000),
            'commission' => $this->faker->unique()->randomFloat(1, 0, 100),
            'swap'       => $this->faker->unique()->randomFloat(1, 0, 100),  
            'profit'     => $this->faker->unique()->numberBetween(100, 500),
            'user_id'    => $this->faker->unique()->numberBetween(1, 10),
        ];
    } 
}
