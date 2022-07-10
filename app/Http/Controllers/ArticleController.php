<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articulos;
use App\Models\comentarios;
use Illuminate\Support\Facades\Storage;



class ArticleController extends Controller
{
    public function index()
    {
        return view('Articulos.inicio');
    }


    /**
     * controlador de la view para crear articulos
     * @return view
     */
    public function create()
    {
        return view('Articulos.agregarArticulo');
    }


    /**
     * controlador para insertar articulos en la base de datos
     * @param Request $request
     * @return view
     */
    public function store(Request $request)
    {


        /**
         * validacion de que exista el token de el formulario para evitar ataques
         */
        if (isset($request['_token'])) {


            /**
             * array que contiene los campos a insertar
             * @var array
             */
            $fields = [];


            if ($request->hasFile('imagenArticulo')) {
                $file = $request->file('imagenArticulo');
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path() . '/img/', $name);
            }

            $fields = [
                'titulo'                  => $request['Titulo'],
                'subtitulo'               => $request['Subtitulo'],
                'autor'                   => $request['Autor'],
                'articulo_constitucional' => $request['ArticuloConstitucional'],
                'cuerpo_articulo'         => $request['Descripcion'],
                'imagen'                  => $name ?? 'sin imagen',
                'archivo'                 => public_path() . '/img/'
            ];

            articulos::insert($fields);


            // dd($request->all());
        } else {
            return view('Articulos.inicio');
        }
    }
}
