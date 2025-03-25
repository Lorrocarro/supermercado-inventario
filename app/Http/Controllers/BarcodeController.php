<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function process(Request $request)
    {
        $barcode = $request->input('barcode');

        // Aquí puedes agregar lógica para procesar el código de barras
        // Por ejemplo, buscar un producto en la base de datos

        
    return back()->with('success', "Código de barras procesado: {$barcode}");
    }
}
