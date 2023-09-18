@extends('layouts.back')
<main class="dashboard">
    <header>
        <h2>Administrar Mascotas</h2>
        <a href="index.html" class="close"></a>
    </header>
    <a href="add.html" class="add"></a>
    <table>
        <tr>
            <td>
                <figure class="photo">
                    <img src="imgs/photo-sm-1.svg" alt="">
                </figure>
                <div class="info">
                    <h3>karsten</h3>
                    <h4>Bulldog</h4>
                </div>
                <div class="controls">
                    <a href="show.html" class="show"></a>
                    <a href="edit.html" class="edit"></a>
                    <a href="#" class="delete"></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="photo">
                    <img src="imgs/photo-sm-2.svg" alt="">
                </figure>
                <div class="info">
                    <h3>Alban</h3>
                    <h4>Corgi</h4>
                </div>
                <div class="controls">
                    <a href="show.html" class="show"></a>
                    <a href="edit.html" class="edit"></a>
                    <a href="#" class="delete"></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="photo">
                    <img src="imgs/photo-sm-3.svg" alt="">
                </figure>
                <div class="info">
                    <h3>Reigner</h3>
                    <h4>Bulldog</h4>
                </div>
                <div class="controls">
                    <a href="show.html" class="show"></a>
                    <a href="edit.html" class="edit"></a>
                    <a href="#" class="delete"></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="photo">
                    <img src="imgs/photo-sm-4.svg" alt="">
                </figure>
                <div class="info">
                    <h3>Alex</h3>
                    <h4>Siamese</h4>
                </div>
                <div class="controls">
                    <a href="show.html" class="show"></a>
                    <a href="edit.html" class="edit"></a>
                    <a href="#" class="delete"></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="photo">
                    <img src="imgs/photo-sm-5.svg" alt="">
                </figure>
                <div class="info">
                    <h3>Ariana</h3>
                    <h4>Graycat</h4>
                </div>
                <div class="controls">
                    <a href="show.html" class="show"></a>
                    <a href="edit.html" class="edit"></a>
                    <a href="#" class="delete"></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="photo">
                    <img src="imgs/photo-sm-1.svg" alt="">
                </figure>
                <div class="info">
                    <h3>Lorem</h3>
                    <h4>Ipsum</h4>
                </div>
                <div class="controls">
                    <a href="show.html" class="show"></a>
                    <a href="edit.html" class="edit"></a>
                    <a href="#" class="delete"></a>
                </div>
            </td>
        </tr>
    </table>
</main>
@section('content')
@endsection
