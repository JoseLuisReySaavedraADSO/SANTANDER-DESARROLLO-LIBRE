@extends('layouts.back')
@section('content')
    <main class="add">
        <header>
            <h2>Adicionar Mascota</h2>
            <a href="{{ route('dashboard') }}" class="back"></a>
            <a href="index.html" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="imgs/photo-lg-0.svg" alt="">
        </figure>
        <form action="" method="post">
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
                <select name="raza">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                </select>
            </div>
            <button type="button" class="upload">Subir Foto</button>
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Genero...</option>
                    <option value="1">Hembra</option>
                    <option value="2">Macho</option>
                </select>
            </div>
            <button class="save">Guardar</button>
        </form>
    </main>
@endsection
