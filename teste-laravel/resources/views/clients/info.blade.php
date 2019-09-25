@extends('layouts.main')

@section('title', 'Informações do cliente')

@section('content')

<h3>Informações do cliente</h3>

<p>ID: {{ $client['id'] }}</p>
<p>Nome: {{$client['name'] }} </p>

<br>

<a href="{{ route('clients.index') }}">voltar</a>

@endsection