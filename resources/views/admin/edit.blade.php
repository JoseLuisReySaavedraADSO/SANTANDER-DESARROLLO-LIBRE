@extends('layouts.app')
@section('content')
    <main class="add">
        <header>
            <h2>Editar Mascota</h2>
            <a href="{{ route('dashboard') }}" class="back"></a>
            <a href="{{ route('dogs') }}" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="/imgs/photo-lg-0.svg" alt="">
        </figure>
        <form method="POST" action="{{ route('update', $pet->id) }}">
            @csrf

            <input type="text" name="name" placeholder="Nombre" value="{{ $pet->name }}">

            <div class="select">
                <select name="raza">
                    <option disabled>Seleccionar raza...</option>
                    @foreach ($races as $race)
                        <option value="{{ $race->id }}" {{ $race->id == $pet->race_id ? 'selected' : '' }}>
                            {{ $race->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="select">
                <select name="categoria">
                    <option disabled>Seleccionar categoria...</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $categorie->id == $pet->categorie_id ? 'selected' : '' }}>
                            {{ $categorie->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="select">
                <select name="genero">
                    <option disabled>Seleccionar genero...</option>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}" {{ $gender->id == $pet->gender_id ? 'selected' : '' }}>
                            {{ $gender->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="save">Guardar</button>
        </form>
    </main>
@endsection
