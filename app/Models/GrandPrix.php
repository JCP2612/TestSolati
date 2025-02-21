<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandPrix extends Model
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
        'nombre_gp',
        'ubicacion',
        'numero_vueltas',
        'numero_kilometros',
        'ultimo_ganador',
        'pilotos_victorias',
        'mejor_record',
        'imagen_circuito'
    ];

    public function grandprix()
    {
        return $this->hasMany(GrandPrix::class);
    }
}
