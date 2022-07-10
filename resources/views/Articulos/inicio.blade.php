@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row text-center">
        <h1>
            Bienvenidos
        </h1>
    </div>
    <div class="row text-center">

        @foreach ($articulos as $articulo)
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card" style="width: 18rem;">
                <img src="{{ public_path() . '/img/'.$articulo->imagen }}" class="card-img-top" alt="{{ $articulo->titulo }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $articulo->titulo }}</h5>
                    <p class="card-text">{{ $articulo->articulo_constitucional }}</p>
                    <a href="{{ $articulo->id }}" class="btn btn-primary">Abrir este articulo</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection