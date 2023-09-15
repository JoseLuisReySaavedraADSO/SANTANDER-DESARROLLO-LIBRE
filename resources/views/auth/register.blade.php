@extends('layouts.app')

@section('content')
<main class="login__container">
    
    <section class="login">

        <div class="title">
            <h1 class="title__main">Tu mejor amigo <span class="title__second">en casa!</span></h1>
        </div>

        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form__inputContainer">
                <input placeholder="Nombre Completo" id="name" type="text" class="form__input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form__inputContainer">
                <input placeholder="Correo Electrónico" id="email" type="email" class="form__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form__inputContainer">
                <input placeholder="Contraseña" id="password" type="password" class="form__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form__inputContainer">
                <input placeholder="Confirmar Contraseña" id="password-confirm" type="password" class="form__input form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form__inputContainer">
                <button type="submit" class="form__input form__button">
                    {{ __('Register') }}
                </button>
            </div>

            <div class="form__inputContainer">
                <p class="form__inputContainer--text">¿Ya posee una cuenta? <a class="form__inputContainer--link" href="{{ route('login') }}">Inicia Sesión</a> </p>
            </div>

        </form>

    </section>

</main>

@endsection
