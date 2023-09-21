@extends('layouts.app')
@section('content')

<main class="main__container">

    <section class="container">
    
        <div class="title">
            <h1 style="font-size: 100px; margin-top: 200px;" class="title__main">Error 403</h1>
        </div>

        <p class="paragraph">No se te ha permitido entrar a este sitio</p>

        <div class="picture picture__show" id="image1">
            <img class="picture__image" src="{{asset('images-frontEnd/karsten-big.png')}}" alt="">
        </div>

    </section>

</main>

@endsection
