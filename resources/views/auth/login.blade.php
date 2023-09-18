@extends('layouts.back')

@section('content')
<main class="login">
    <form class="form" method="POST" action="{{ route('login') }}">

            <input placeholder="Correo Electrónico" id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="form__error invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        @csrf

            <input placeholder="Contraseña" id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="form__error invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        {{-- <input type="password" name="clave" placeholder="Contraseña"> --}}

        
            <button type="submit" class="form__input form__button btn btn-primary">
            {{ __('Login') }}
            </button>

            <div class="form__inputContainer">
                <p class="form__inputContainer--text">¿Aún no posee una cuenta? <a class="form__inputContainer--link" href="{{route('register')}}">Regístrate</a> </p>
            </div>
            
            {{-- <button type="submit">Ingresar</button>
        
            <p class="form__inputContainer--text">¿Aún no posee una cuenta? <a class="form__inputContainer--link" href="{{ route('register') }}">Regístrate</a> </p> --}}

    </form>
</main>
@endsection