@extends('layouts.main')

@section('title', 'Departamentos')

@section('content')

<h3>Departamentos</h3>

<ul>
    <li>Computadores</li>
    <li>Eletronicos</li>
    <li>Acessórios</li>
    <li>Roupas</li>
</ul>

{{-- Utilizando o as que foi definido em App/Providers/AppServiceProvider.php->boot() --}}
@alert(['title'=>'Erro fatal', 'type'=>'info'])
    <p><strong>Erro inesperado</strong></p>
    <p>Ocorreu um erro tal...</p>
@endalert

@component('components.alert', ['title'=>'Erro fatal', 'type'=>'error'])
    <p><strong>Erro inesperado</strong></p>
    <p>Ocorreu um erro tal...</p>
@endcomponent

@component('components.alert', ['title'=>'Erro fatal', 'type'=>'success'])
    <p><strong>Erro inesperado</strong></p>
    <p>Ocorreu um erro tal...</p>
@endcomponent

@component('components.alert', ['title'=>'Erro fatal', 'type'=>'warning'])
    <p><strong>Erro inesperado</strong></p>
    <p>Ocorreu um erro tal...</p>
@endcomponent

{{-- 
@component('components.alert')
@endcomponent --}}

@endsection