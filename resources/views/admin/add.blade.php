@extends('layouts.app')
@section('content')
    <main class="add">
        <header>
            <h2>Adicionar Mascota</h2>
            <a href="{{ route('dashboard') }}" class="back"></a>
            <a href="{{ route('dogs') }}" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="imgs/photo-lg-0.svg" alt="">
        </figure>
        <form method="POST" action="{{ route('store') }}">

            @csrf
            <input type="text" name="name" placeholder="Nombre">
            <div class="select">

                <select name="raza">
                    <option disabled selected>Seleccionar raza...</option>
                    @foreach ($races as $race)
                        <option value="{{ $race->id }}">{{ $race->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="select">
                <select name="categoria">
                    <option disabled selected>Seleccionar categoria...</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <button type="button" class="upload">Subir Foto</button> --}}
            <div class="select">
                <select name="genero">
                    <option disabled selected>Seleccionar genero...</option>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="save">Guardar</button>
        </form>
    </main>
@endsection
