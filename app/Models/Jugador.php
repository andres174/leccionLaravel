<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table= 'jugadors';
    public $timestamps = false;
    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'num_camiseta',
        'posicion',
        'id_equipo'
    ];
}
