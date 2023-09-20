@extends('layouts.app')

@section('content')
<main class="main__container">

  <section class="sectionDetails">

    {{-- SECCIÓN SUPERIOR --}}
    <div class="sectionDetails__superior">

      {{-- BOTONES --}}
      <div class="superior__buttons">
        <a href="{{ route('dogs') }}">
          <img src="{{ asset('images-frontEnd/chevron-left-white.svg') }}" alt="">
        </a>
        <img src="{{ asset('images-frontEnd/heart-white.svg') }}" alt="">
      </div>

      {{-- FOTO MASCOTA --}}
      <div class="superior__image">
        <img class="superior__image--img" src="{{ asset('images-frontEnd/karsten-big.png') }}" alt="Foto de la mascota">
      </div>

      {{-- DESCRIPCIÓN --}}
      <div class="superior__descripcion">
        <div class="descripcion__desc">
          <p>Edad</p>
          <span>1 año</span>
        </div>
        <div class="descripcion__desc">
          <p>Largo</p>
          <span>5-6</span>
        </div>
        <div class="descripcion__desc">
          <p>Color</p>
          <span>Crema</span>
        </div>
        <div class="descripcion__desc">
          <p>Genero</p>
          <span>Macho</span>
        </div>
      </div>

    </div>


    {{-- SECCIÓN INFERIOR --}}
    <div class="sectionDetails__inferior">

      {{-- DETALLES MASCOTA --}}
      <div class="inferior__detallesMascota">
        <div>
          <p>Karsten</p>
          <span>Bulldog</span>
        </div>
        <p>$200</p>
      </div>

      {{-- DETALLES ADOPTADOR --}}
      <div class="inferior__detallesAdoptador">
        <img class="inferior__detallesAdoptador--img" src="{{ asset('images-frontEnd/rodolfo.png') }}" alt="">
        <div>
          <p>Rodolfo Lopez</p>
          <span>Dueño - Medellín Colombia</span>
        </div>
      </div>

      {{-- BOTÓN --}}
      <div class="inferior__button">
        <a class="inferior__button--btn" href="#">Llevar a casa</a>
      </div>

    </div>

  </section>

</main>
@endsection
