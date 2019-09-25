@extends('layouts.main')

@section('title', 'Clientes')

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

    <hr>
    @for($i = 0; $i < 10; $i++)
        {{ $i }},
    @endfor

    <br><br>

    @for($i = 0; $i < count($clients); $i++)
        {{ $clients[$i]['name'] }},
    @endfor

    @foreach ($clients as $client)
        <p>
            {{ $client['name'] }}
            @if($loop->first)
                (primeiro) |
            @endif

            @if($loop->last)
                (ultimo) |
            @endif

            ({{ $loop->index }}) - {{ $loop->iteration }} / {{ $loop->count }}
        </p>
    @endforeach

@else
    <h4>Não existem clientes cadastrados</h4>
@endif

@empty($clients)
    <h4>Não existem clientes cadastrados (usando empty)</h4>
@endempty

@endsection