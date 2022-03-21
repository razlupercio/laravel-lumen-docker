<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//require __DIR__.'/vendor/autoload.php';

class FacturamaController extends Controller
{
    public function index()
    {
        $facturama = new \Facturama\Client(env('FACTURAMA_USER'), env('FACTURAMA_PASS'));
        $lstNameIds = $facturama->get('catalogs/PaymentMethods');
        dd($lstNameIds);
    }
}
