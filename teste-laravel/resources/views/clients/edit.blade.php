@extends('layouts.main')

@section('title', 'Editar cliente')

@section('content')

<h3>Novo cliente</h3>

<form action="{{ route('clients.update', $client['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $client['name']}}">
    <input type="submit" value="Salvar">
</form>

@endsection