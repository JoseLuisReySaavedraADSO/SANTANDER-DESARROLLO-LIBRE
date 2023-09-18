@extends('layouts.app')

@section('content')
<main class="main__container">

    <section class="container second__container">

        <div class="headerTitle">
            <a class="headerTitle__link" href="{{ url('/') }}"><img src="{{asset('images-frontEnd/chevron-left.svg')}}" alt="Back" title="Volver al inicio"></a>
            <h1>Buscar</h1>
            <div class="headerTitle__close">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{-- {{ __('Logout') }} --}}
                    <img src="{{asset('images-BackEnd/btn-close.svg')}}" alt="Close" title="Cerrar sesión">
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <div class="barSearch">
            <img class="barSearch__image" src="{{asset('images-frontEnd/search.svg')}}" alt="">
            <input class="barSearch__input" type="search">
        </div>

        <div class="category">
            <a href="{{ route('home') }}" class="category__animal category__animal--select">
                <img class="category__animal--image" src="{{asset('images-frontEnd/fa-solid_dog.svg')}}" alt="">
                <p class="category__animal--text">Perros</p>
            </a>
            <a href="#" class="category__animal">
                <img class="category__animal--image" src="{{asset('images-frontEnd/fa-solid_cat.svg')}}" alt="">
                <p class="category__animal--text">Gatos</p>
            </a>
        </div>

        <div class="container__cards">
            @foreach ($pets as $pet)
                <div class="card__animal">
                    <div class="animal__photo">    
                        {{-- {{dd(asset($pet->photo))}} --}}
                        <img class="animal__photo--image" src="{{asset($pet->photo)}}" alt="">
                    </div>
                    <div class="animal__info">
                        {{-- {{dd($pet)}} --}}
                        <div>
                            <h2 class="animal__info--name">{{$pet->name}}</h2>
                            <p class="animal__info--race">{{$pet->race->name}}</p> 
                        </div>
                        <div class="animal__info--extra">
                            <span>$400</span>
                            <img src="{{asset('images-frontEnd/sm-heart.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
        
</main>


@endsection
