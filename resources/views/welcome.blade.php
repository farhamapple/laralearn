<!-- Layout Templating -->
@extends('layout')

@section('title')
    Halaman Welcome
@endsection

<!-- Masukkin kontentnnya, yang nyambung dengan Layout -->
@section('content')
    <h1>Home Page</h1>

    <h2>Tasks</h2>
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
        <br>
        {{ $foo }}
        <br>
            {{ $param_url }}
        <br>
            {{ $script }}
        <br>
            {!! $script !!}
@endsection
