<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    use HasFactory;

    //Especificar la columna de la clave primaria
    protected $primaryKey = 'id';

    //Indicar si la clave primaria es autoincremental
    public $incrementing = true;

    //Especificar el tipo de la clave primaria
    protected $keyType = 'int';

    //Indicar los campos de la tabla
    protected $fillable = [
        'nombre_piloto',
        'escuderia_actual',
        'ultimo_gp_ganado',
        'victorias',
        'numero_podios',
        'numero_pole_position',
        'puntos_campeonato'
    ];

    public function drivers()
    {
        return $this->hasMany(Drivers::class);
    }
}
