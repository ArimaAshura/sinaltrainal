@extends('layouts.app')
@section('content')
<main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom border-danger">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            </a>
        </header>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Insertar</h1>
                <h2 class="">insertar</h2>
                <h9 autor="">Autor
                    <div class="byline  ">
                        <div class="datetime">10/7/2022</div>
                    </div>
                </h9>

                <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut corporis
                    suscipit dolorum itaque repellendus dolore nemo iure quidem quas ea culpa temporibus nulla
                    sapiente nihil esse impedit, perspiciatis architecto accusamus.</p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <form action="" class="form_comentarios">
                    <textarea name="" id="" placeholder="Escribe tu comentario" class="form-control" rows="3"></textarea>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-danger d-flex">Comentar</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="pt-3 mt-4 text-muted border-top border-danger">
            &copy; 2022
        </footer>
    </div>
</main>
@endsection