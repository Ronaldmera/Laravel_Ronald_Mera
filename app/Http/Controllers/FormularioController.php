<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function solicitar(){
        return view('formularioVista');
    }

    public function calcular(Request $valor){
        $valorA = $valor -> input('numA');
        $valorB = $valor -> input('numB');
        $valorC = $valor -> input('numC');

        $x = ($valorB ** 2 ) - (4 * $valorA * $valorC);
        if($x > 0 ){
        $x1 = (($valorB*(-1)) + sqrt($x)) / (2 * $valorA);
        $x2 = (($valorB*(-1)) - sqrt($x)) / (2 * $valorA);
      
        }
        else{
            return'Error';
        }
        
        return view('resultadosVista', compact('valorA', 'valorB', 'valorC', 'x', 'x1', 'x2'));

    }
}
