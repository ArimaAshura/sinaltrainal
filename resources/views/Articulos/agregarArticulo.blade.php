@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <form action="" method="post">
                @csrf

            </form>
        </div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
    </div>
</div>
@endsection