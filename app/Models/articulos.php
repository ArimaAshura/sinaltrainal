<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Modelo para la tabla de articulos
 * @author Cristian Aguirre y Frank Mateo Ospina
 * @version 1.0
 */
class articulos extends Model
{
    use HasFactory;
    use SoftDeletes;



    /**
     * Representacion de los campos de la tabla
     * @var array
     */
    protected $fields = [
        'titulo',
        'subtitulo',
        'autor',
        'articulo_constitucional',
        'cuerpo_articulo',
        'imagen',
        'archivo'
    ];


    /**
     * tabla para agregar los articulos
     * @var string
     */
    protected $table = 'tbl_articulos';
}
