@extends('layouts.back')
@section('content')
<main class="dashboard">
    <header>
        <h2>Administrar Mascotas</h2>
        <a href="{{ route('home') }}" class="close"></a>
    </header>
        <a href="{{ route('add') }}" class="add"></a>
    <table>
        @php
        $count = 1;
        @endphp
        @foreach ($pets as $pet)
        <tr>
            <td>
                <figure class="photo">
                    <img src="imgs/photo-sm-{{$count}}.svg" alt="">
                </figure>
                <div class="info">
                    <h3>{{$pet->name}}</h3>
                    <h4>{{$pet->race->name}}</h4>
                </div>
                <div class="controls">
                    <a href="show.html" class="show"></a>
                    <a href="edit.html" class="edit"></a>
                    <a href="#" class="delete"></a>
                </div>
            </td>
        </tr>
        @php
        $count = $count >= 5 ? 1 : $count + 1;
        @endphp
        @endforeach
    </table>
</main>

@endsection
