<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use DB;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodo_pago')->delete();

        $metodo_pago = [
            ['id' =>1, 'desc' => 'Pago en parcialidades ó diferido', 'valor' =>'PPD'],
            ['id' =>2, 'desc' => 'Pago en una sola exhibición', 'valor' =>'PUE'],
        ];

        DB::table('metodo_pago')->insert($metodo_pago);
    }
}
