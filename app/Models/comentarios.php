<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comentarios extends Model
{
    use HasFactory;
    use SoftDeletes;


    /**
     * Representacion de los campos de la tabla
     * @var array
     */
    protected $fields = [
        'comentario',
        'autor',
        'tbl_articulos_id'
    ];


    /**
     * tabla para agregar los comentarios
     * @var string
     */
    protected $table = 'tbl_comentarios';
}
