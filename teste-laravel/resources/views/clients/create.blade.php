@extends('layouts.main')

@section('title', 'Novo cliente')

@section('content')

<h3>Novo cliente</h3>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="submit" value="Salvar">
</form>

@endsection