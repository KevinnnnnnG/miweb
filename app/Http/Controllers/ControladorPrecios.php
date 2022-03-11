<?php

namespace App\Http\Controllers;

use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function tienda ($precio){

       //inicializamos las variables
       $valor_total = 0;

       if(is_numeric($precio)){


       if($precio <100000){
           echo 'este producto no tiene descuento';
    }

       elseif($precio>=100000 && $precio<150000){

        $valor= $precio*0.2;
        $valor_total= ($precio-$valor);

           echo 'El descuento del producto es del 2%, y el total a
           pagar es: ' . $valor_total;
       }

       elseif($precio>=150000 && $precio<300000){

        $valor= $precio*0.3;
        $valor_total= ($precio-$valor);

           echo 'El descuento del producto es del 3%, y el total a
           pagar es: ' . $valor_total;
       }

       elseif($precio>=300000 && $precio<500000){

        $valor= ($precio*0.4);
        $valor_total= ($precio-$valor);

           echo 'El descuento del producto es del 4%, y el total a
           pagar es: ' . $valor_total;
       }

       elseif($precio>=500000){

        $valor= $precio*0.5;
        $valor_total= ($precio-$valor);

           echo 'El descuento del producto es del 5%, y el total a
           pagar es: ' . $valor_total;
       }


    }

    else{
        echo '“El valor ingresado es incorrecto. Inténtelo nuevamente';
    }

    }

    public function IVA ($nombreArticulo, $sinIVA){

        $IVA=0.19;
        $iVA2=$sinIVA*$IVA;
        $total=$sinIVA+$iVA2;

        return 'El articulo ' .$nombreArticulo . 
        ' sin IVA cuesta ' .$sinIVA . 
        ' y el precio del IVA es de ' .$IVA . 
        ' el total a pagar por el articulo con IVA es de ' .$total;
    }
}
