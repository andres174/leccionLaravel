<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class JugadorController extends Controller
{
    //
    public function mostrar(){
        return view('jugador');
    }
    public function generarReporte()
    {   
        /* dd('aaaaaaaaaaaaaaa'); */
        

        $data = [
            
            'nombre' => '$this->jugador->nombre',
            'apellido' => 'Apellido',
            'cedula' => '$j->cedula',
            'num_camiseta' => '$j->num_camiseta',
            'posicion' => '$j->posicion',
            'nombre_equipo' => '$j->nombre_equipo'
        ];

        /* return PDF::loadView('reporte-cedula-jugador', $data)
        ->stream('archivo.pdf'); */

        $pdf = PDF::loadView('reporte-cedula-jugador', $data);

        return $pdf->download('archivo.pdf');
        

        
    }
}
