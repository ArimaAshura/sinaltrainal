<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class articulos extends Model
{
    use HasFactory;
    use SoftDeletes;



    /**
     * Representacion de los campos de la tabla
     * @var array
     */
    protected $fields = [
        'Titulo',
        'Subtitulo',
        'Autor',
        'ArticuloConstitucional',
        'cuerpoArticulo',
        'Imagen',
        'Archivo',
        'Estado'
    ];


    /**
     * tabla para agregar los articulos
     * @var string
     */
    protected $table = 'tblArticulos';
}
