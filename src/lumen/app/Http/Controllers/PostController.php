<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class PostController extends Controller
{
    public function create()
    {
        return view('factura');
    }
 
    public function store(Request $request)
    {
        $facturama = new \Facturama\Client(env('FACTURAMA_USER'), env('FACTURAMA_PASS'));
        $id                 = $request->input('ticket');
        $sucursal           = $request->input('sucursal');
        $fecha              = date('Y-m-d', strtotime($request->input('fecha')));
        $monto              = $request->input('monto');
        $rfc                = $request->input('rfc');
        $razon_social       = $request->input('razon_social');
        //$nameID             = "Emisor?";


        
        $ticket = \DB::table('ticket')->when($id, function ($query, $ticket) {
                    $query->where('id', $ticket);
                })
                ->get();

        if ($ticket->isNotEmpty()) { // id no está vacío
            
            //validar campos
            if ( 
                $fecha      == date('Y-m-d', strtotime($ticket[0]->fecha)) &&
                $sucursal   == $ticket[0]->sucursal &&
                $monto      == $ticket[0]->monto // checar tema de centavos...
            ) {
                //echo "ok";
                // enviar datos a API


                $params = [
                    'ExpeditionPlace' => $ticket[0]->sucursal,
                    //'serie' => '',
                    'Folio' => '100',
                    'Currency' => 'MXN',
                    'CfdiType' => 'I',
                    'PaymentForm' => '03',//($ticket[0]->forma_pago,
                    'PaymentMethod' => 'PUE',
                    'Receiver' => [
                           'Rfc' => $rfc,
                           'Name' => $razon_social,
                           'CfdiUse' => 'P01',
                         ],
                    'Items' => [
                       [
                            'ProductCode' => '10101504',
                            'IdentificationNumber' => 'EDL',
                            'Description' => 'Gasolina Magma',
                            'Unit' => 'Litro',
                            'UnitCode' => 'LTR',
                            'UnitPrice' => 25.0,
                            'Quantity' => 10.0,
                            'Subtotal' => 250.0,
                
                            'Taxes' => [
                               [
                                   'Total' => 40.0,
                                   'Name' => 'IVA',
                                   'Base' => 250.0,
                                   'Rate' => 0.16,
                                   'IsRetention' => false,
                               ],
                            ],
                            'Total' => 290.0,
                        ],
                    ],
                ];
            
                //$result = $facturama->post('2/cfdis', $params);

                
                $document = 'pdf'; //variable que define el tipo de archivo a descargar(pdf,Xml,html)
                $type = 'Issued';
                $id = 'xqMeJdfgMcDynk1gCeZwWQ2';
                $params = [];
                $pdf = $facturama->get('cfdi/pdf/'.$type.'/'.$id, $params);
                $xml = $facturama->get('cfdi/xml/'.$type.'/'.$id, $params);
                $my_pdf = fopen('factura'.$id.'.pdf', 'a+');
                fwrite($my_pdf, base64_decode(end($pdf)));
                fclose($my_pdf);

                $my_xml = fopen('factura'.$id.'.xml', 'a+');
                fwrite($my_xml, base64_decode(end($xml)));
                fclose($my_xml);

                return view('descarga', [
                    'pdf' => 'factura'.$id.'.pdf',
                    'xml' => 'factura'.$id.'.xml'
                ]);

            } else {
                // manejar la excepción
                echo "Intente mas tarde o revise sus datos<br>";
                //echo "fecha ticket: ".$ticket[0]->fecha;
                //echo "<br>fecha request: ".$fecha;
                //echo "<br>monto request = ".$monto;
                //echo "<br>monto ticket =".$ticket[0]->monto;
                
            }

            //return $ticket[0]->fecha; 

        } else {
            return "Intente mas tarde o revise sus datos";
        }

    }

    public function getFactura()
    {
        $facturama = new \Facturama\Client(env('FACTURAMA_USER'), env('FACTURAMA_PASS'));
        $document = 'pdf'; //variable que define el tipo de archivo a descargar(pdf,Xml,html)
        $type = 'Issued';
        $id = 'xqMeJdfgMcDynk1gCeZwWQ2';
        $params = [];
        $pdf = $facturama->get('cfdi/pdf/'.$type.'/'.$id, $params);
        $xml = $facturama->get('cfdi/xml/'.$type.'/'.$id, $params);
        $my_pdf = fopen('factura'.$id.'.pdf', 'a+');
        fwrite($my_pdf, base64_decode(end($pdf)));
        fclose($my_pdf);

        $my_xml = fopen('factura'.$id.'.xml', 'a+');
        fwrite($my_xml, base64_decode(end($xml)));
        fclose($my_xml);

        $data = [
            'pdf' => 'factura'.$id.'.pdf',
            'xml' => 'factura'.$id.'.xml'
        ];
        //dd($data);
        return view('descarga', [
            'pdf' => 'factura'.$id.'.pdf',
            'xml' => 'factura'.$id.'.xml'
        ]);
    }
}