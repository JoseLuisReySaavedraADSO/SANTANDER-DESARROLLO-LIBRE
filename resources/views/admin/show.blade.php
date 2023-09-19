@extends('layouts.back')
@section('content')
    <main class="show">
        <header>
            <h2>Consultar Mascota</h2>
            <a href="{{ route('dashboard') }}" class="back"></a>
            <a href="{{ route('home') }}" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="{{asset($pet->photo)}}" alt="">
        </figure>
        <div>
            <article class="info-name">
                <p>{{$pet->name}}</p>
            </article>
            <article class="info-race">
                {{-- {{dd($pet->photo)}} --}}
                <p>{{$pet->race->name}}</p>
            </article>
            <article class="info-category">
                <p>{{$pet->categorie->name}}</p>
            </article>
            <article class="info-gender">
                <p>{{$pet->gender->name}}</p>
            </article>
        </div>
    </main>
@endsection
