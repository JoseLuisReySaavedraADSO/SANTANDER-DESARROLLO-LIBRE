@extends('layouts.app')

@section('content')
<main class="main__container">

    <section class="container second__container">

        <div class="headerTitle">
            <a class="headerTitle__link" href="{{ url('/') }}"><img src="{{asset('images-frontEnd/chevron-left.svg')}}" alt=""></a>
            <h1>Buscar</h1>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
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
            <div class="category__animal">
                <img class="category__animal--image" src="{{asset('images-frontEnd/fa-solid_dog.svg')}}" alt="">
                <p class="category__animal--text">Perros</p>
            </div>
            <div class="category__animal">
                <img class="category__animal--image" src="{{asset('images-frontEnd/fa-solid_cat.svg')}}" alt="">
                <p class="category__animal--text">Gatos</p>
            </div>
        </div>

        <div class="container__cards">
            @foreach ($pets as $pet)
                <div class="card__animal">
                    <div class="animal__photo">    
                        <img class="animal__photo--image" src="{{asset('/images-frontEnd/ivana.png')}}" alt="">
                    </div>
                    <div class="animal__info">
                        {{-- {{dd($pet)}} --}}
                        <h2 class="animal__info--name">{{$pet->name}}</h2>
                        <p class="animal__info--race">{{$pet->race->name}}</p>
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
