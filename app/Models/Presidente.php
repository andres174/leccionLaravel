<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;
    protected $table= 'presidentes';
    public $timestamps = false;
    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'fecha_pos',
        'id_equipo'
    ];
}
