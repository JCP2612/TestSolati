<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scuderias extends Model
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
        'nombre_scuderia',
        'pais_de_origen',
        'fundacion',
        'pagina_web',
        'ultimo_gp_ganado',
        'puntos_campeonato',
        'bandera_scuderia',
        'imagen_scuderia'
    ];

    public function scuderias()
    {
        return $this->hasMany(Scuderias::class);
    }
}
