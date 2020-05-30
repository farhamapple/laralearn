<!-- Layout Templating -->
@extends('layout')

@section('title', 'Test Parameter Page')


<!-- Masukkin kontentnnya, yang nyambung dengan Layout -->
@section('content')
    <h1>Parameter Page</h1>
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
