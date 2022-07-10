@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Agregar Articulo Nuevo</h2>
    <form action="{{ url('/agregarArticulo/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row shadow-sm border p-2">
            <div class="col-md-4 col-lg-3 col-xl-3 py-4">
                <input type="text" name="Titulo" id="Titulo" class="form form-control" placeholder="Agrega Titulo">
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 py-4">
                <input type="text" name="Subtitulo" id="Subtitulo" class="form form-control" placeholder="Agrega Subtitulo">
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 py-4">
                <input type="text" name="ArticuloConstitucional" id="ArticuloConstitucional" class="form form-control" placeholder="Agrega Articulo Constitucional">
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 py-4">
                <input type="text" name="Autor" id="Autor" class="form form-control" placeholder="Agrega Autor" value="{{ Auth::user()->name }}" readonly>
            </div>
            <div class="col-md-4 col-lg-12 col-xl-12 py-4">
                <input type="file" name="imagenArticulo" id="imagenArticulo" class="form form-control" placeholder="Agregar Imagen">
            </div>
            <div class="col-md-12 col-lg-12 col-xl-12 py-4">
                <textarea name="Descripcion" id="Descripcion" class="form form-control" placeholder="Agrega Descripcion"></textarea>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-12 py-4">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection