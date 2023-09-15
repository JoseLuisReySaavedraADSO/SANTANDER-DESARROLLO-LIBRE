@extends('layouts.app')

@section('content')
<main class="main">

    <section class="container second__container">

        <div class="headerTitle">
            <a class="headerTitle__link" href="{{ url('/') }}"><img src="images/chevron-left.svg" alt=""></a>
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
            <img class="barSearch__image" src="images/search.svg" alt="">
            <input class="barSearch__input" type="search">
        </div>

        <div class="category">
            <div class="category__animal">
                <img class="category__animal--image" src="images/fa-solid_dog.svg" alt="">
                <p class="category__animal--text">Perros</p>
            </div>
            <div class="category__animal">
                <img class="category__animal--image" src="images/fa-solid_cat.svg" alt="">
                <p class="category__animal--text">Gatos</p>
            </div>
        </div>

        @foreach ($pets as $pet)
                    <div class="container__cards">
                        <div class="card__animal">
                            <div class="animal__photo">    
                                <img class="animal__photo" src="images/ivana.png" alt="">
                            </div>
                            <div class="animal__info">
                                {{-- {{dd($pet)}} --}}
                                <h2 class="animal__info--name">{{$pet->name}}</h2>
                                <p class="animal__info--race">{{$pet->race->name}}</p>
                                <div class="animal__info--extra">
                                    <span>$400</span>
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                    
            @endforeach

    </section>
        
</main>


@endsection
