@extends('home.layout')

@section('titulo', $titulo ?? "Teste")

@section('menu')
    @parent
    <ul>
        <li>Item 1</li>
    </ul>

    @if($n < 10)
        <p>Número muito pequeno</p>
    @else
        <p>Número ideal</p>
    @endif

@endsection