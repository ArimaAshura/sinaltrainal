<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('Articulos.inicio');
    }

    public function create()
    {
        return view('Articulos.agregarArticulo');
    }
}
