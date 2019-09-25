@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>
<a href="{{ route('clients.create') }}">Novo Cliente</a>

@if(count($clients) > 0)
    <ul>
        @foreach ($clients as $client)
            <li>
                ID: {{ $client['id']}} | Nome: {{ $client['name'] }} |
                <a href="{{ route('clients.edit', $client['id']) }}">editar</a> | 
                <a href="{{ route('clients.show', $client['id']) }}">info.</a> |
                <form action="{{ route('clients.destroy', $client['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="excluir">
                </form>
            </li>
        @endforeach
    </ul>
@else
    <h4>Não existem clientes cadastrados</h4>
@endif

@empty($clients)
    <h4>Não existem clientes cadastrados (usando empty)</h4>
@endempty

@endsection