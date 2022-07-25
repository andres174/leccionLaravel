<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Jugador;
use App\Models\Equipo;
use PDF;

class JugadoresEquipoComponent extends Component
{
    
    public $search;
 
    protected $queryString = ['search'];

    
    public function render()
    {
        /* return view('livewire.jugadores-equipo-component'); */
        /* $p = Jugador::all(); */
        /* $j = DB::table('jugadors')
        ->join('equipos', 'jugadors.id_equipo', '=', 'equipos.id')
        ->select('jugadors.*', 'equipos.nombreEquipo as nombre_equipo')
        ->where( 'cedula', '=', '1785694862');
         */
        
        return view('livewire.jugadores-equipo-component'/* , compact('j') */);
    }
    
    

    public function generarReporte()
    {   
        
        $j = DB::table('jugadors')
        ->join('equipos', 'jugadors.id_equipo', '=', 'equipos.id')
        ->select('jugadors.*', 'equipos.nombreEquipo as nombre_equipo')
        ->where( 'cedula', '=', '1785694862')
        ->get();

        return view('livewire.jugadores-equipo-component', compact('j'));

        

        
        
        /* return view('livewire.jugadores-equipo-component', compact('j'));

        $data = [
            
            'nombre' => '$this->jugador->nombre',
            'apellido' => 'Apellido',
            'cedula' => '$j->cedula',
            'num_camiseta' => '$j->num_camiseta',
            'posicion' => '$j->posicion',
            'nombre_equipo' => '$j->nombre_equipo'
        ];
 */
        /* return PDF::loadView('reporte-cedula-jugador', $data)
        ->stream('archivo.pdf'); */

        
        

        
    }

    /* public function descargar(){
        $j = DB::table('jugadors')
        ->join('equipos', 'jugadors.id_equipo', '=', 'equipos.id')
        ->select('jugadors.*', 'equipos.nombreEquipo as nombre_equipo')
        ->where( 'cedula', '=', '1785694862')
        ->get();
        $pdf = PDF::loadView('reporte-cedula-jugador', compact('j'));

        return $pdf->download('archivo.pdf');
    } */
}
