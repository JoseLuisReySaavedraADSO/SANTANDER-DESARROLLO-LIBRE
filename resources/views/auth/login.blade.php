@extends('layouts.app')

@section('content')
<main class="login">
    <form class="form" method="POST" action="{{ route('login') }}">

        <input placeholder="Correo Electrónico" id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="error__form" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        @csrf

        <input placeholder="Contraseña" id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="error__form" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit" class="btn btn-primary">
        {{ __('Login') }}
        </button>

        <div class="form__inputContainer--login">
            <p class="form__inputContainer--text">¿Aún no posee una cuenta? <a class="form__inputContainer--link" href="{{route('register')}}">Regístrate</a> </p>
        </div>

    </form>
</main>
@endsection