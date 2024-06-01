<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadoraController extends Controller
{
    public function mostrarCalculadora()
    {
        return view('calculadora');
    }
    public function sumar(Request $request)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
    

        if ($numero1 = null && $numero2 = null){
            $resultado = "Resultado";  
        }else {
            $resultado = $numero1 + $numero2;
        }
     
        return view('calculadora', ['resultado' => $resultado]);
    }
}
