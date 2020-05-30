<!-- Layout Templating -->
@extends('layout')

@section('title', 'Kontak Page')


<!-- Masukkin kontentnnya, yang nyambung dengan Layout -->
@section('content')
    <h1>Kontak Page</h1>
    <p>Isi dari Kontak</p>
    <br>
    <ul>
        <?php
        // foreach ($tasks as $value) {
        //     # code...
        //     echo "<li>".$value."</li>";
        // }
        ?>

        @foreach($tasks as $value)
        <li>{{ $value }}</li>
        @endforeach
    </ul>
@endsection
