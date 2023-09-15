@extends('layouts.app')

@section('content')

<main class="login__container">
    
    <section class="login">

        <div class="title">
            <h1 class="title__main">Tu mejor amigo <span class="title__second">en casa!</span></h1>
        </div>

        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form__inputContainer">
                <input placeholder="Correo Electrónico" id="email" type="email" class="form__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="form__error invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form__inputContainer">
                <input placeholder="Contrseña" id="password" type="password" class="form__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="form__error invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form__inputContainer">
                <button type="submit" class="form__input form__button btn btn-primary">
                    {{ __('Login') }}
                </button>

                {{-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif --}}
            </div>

            <div class="form__inputContainer">
                <p class="form__inputContainer--text">¿Aún no posee una cuenta? <a class="form__inputContainer--link" href="{{ route('register') }}">Regístrate</a> </p>
            </div>

        </form>

    </section>

</main>

@endsection