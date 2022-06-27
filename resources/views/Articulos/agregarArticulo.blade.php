@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-2"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-8 shadow-sm border p-2">
            <h2 class="text-center">Agregar Articulo Nuevo</h2>
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-xl-3 m-2">
                        <input type="text" name="Titulo" id="Titulo" class="form form-control" placeholder="Agrega Titulo">
                    </div>
                    <div class="col-lg-3 col-xl-3 m-2">
                        <input type="text" name="Subtitulo" id="Subtitulo" class="form form-control" placeholder="Agrega Subtitulo">
                    </div>
                    <div class="col-lg-3 col-xl-3 m-2">
                        <input type="text" name="ArticuloConstitucional" id="ArticuloConstitucional" class="form form-control" placeholder="Agrega Articulo Constitucional">
                    </div>
                    <div class="col-lg-3 col-xl-3 m-2">
                        <input type="text" name="Autor" id="Autor" class="form form-control" placeholder="Agrega Autor" value="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="col-lg-3 col-xl-3 m-2"></div>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-2"></div>
    </div>
</div>
@endsection