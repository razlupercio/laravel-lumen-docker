<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forma_pago')->delete();

        $forma_pago = [
            ['id' => 1, 'desc' => 'Efectivo'],
            ['id' => 2, 'desc' => 'Cheque nominativo'],
            ['id' =>3, 'desc' => 'Transferencia electrónica de fondos'],
            ['id' =>4, 'desc' => 'Tarjeta de crédito'],
            ['id' =>5, 'desc' => 'Monedero electrónico'],
            ['id' =>6, 'desc' => 'Dinero electrónico'],
            ['id' =>8, 'desc' => 'Vales de despensa'],
            ['id' =>12, 'desc' => 'Dación en pago'],
            ['id' =>13, 'desc' => 'Pago por subrogación'],
            ['id' =>14, 'desc' => 'Pago por consignación'],
            ['id' =>15, 'desc' => 'Condonación'],
            ['id' =>17, 'desc' => 'Compensación'],
            ['id' =>23, 'desc' => 'Novación'],
            ['id' =>24, 'desc' => 'Confusión'],
            ['id' =>25, 'desc' => 'Remisión de deuda'],
            ['id' =>26, 'desc' => 'Prescripción o caducidad'],
            ['id' =>27, 'desc' => 'A satisfacción del acreedor'],
            ['id' =>28, 'desc' => 'Tarjeta de débito'],
            ['id' =>29, 'desc' => 'Tarjeta de servicios'],
            ['id' =>30, 'desc' => 'Aplicación de anticipos'],
            ['id' =>31, 'desc' => 'Intermediario pagos'],
            ['id' =>99, 'desc' => 'Por definir']
        ];

        DB::table('forma_pago')->insert($forma_pago);
    }
}   
