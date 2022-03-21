<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{

    protected $model = \App\Models\Ticket::class;


    public function definition(): array
    {
        $monto  = $this->faker->randomFloat($nbMaxDecimals = 2, $min = 200, $max = 9999);
        $iva    = $monto * 0.16;
    	return [
    	    'monto' => $monto,
            'iva' => $iva,
            'sucursal' => "04320",
            'fecha' => $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now') // DateTime('2003-03-15 02:00:49', 'Africa/Lagos')

    	];
    }
}
