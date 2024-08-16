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
        'fecha_de_creacion',
        'pagina_web',
        'ultima_gp_ganado',
    ];

    public function scuderias()
    {
        return $this->hasMany(Scuderias::class);
    }
}
