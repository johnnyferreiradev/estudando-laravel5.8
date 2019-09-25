@extends('layouts.main')

@section('title', 'Opções')

@section('content')

    <div class="options">
        <ul>
            <li>
                <a
                    class="warning {{ request()->routeIs('options') && $option == 1 ? 'selected' : '' }}"
                    href="{{ route('options', 1) }}">
                    warning
                </a>
            </li>
            <li>
                <a
                    class="info {{ request()->routeIs('options') && $option == 2 ? 'selected' : '' }}"
                    href="{{ route('options', 2) }}">
                    info
                </a>
            </li>
            <li>
                <a
                    class="success {{ request()->routeIs('options') && $option == 3 ? 'selected' : '' }}"
                    href="{{ route('options', 3) }}">
                    success
                </a>
            </li>
            <li>
                <a
                    class="error {{ request()->routeIs('options') && $option == 4 ? 'selected' : '' }}"
                    href="{{ route('options', 4) }}">
                    error
                </a>
            </li>
        </ul>
    </div>

    @if(isset($option)) 
        @switch($option)
            @case(1)
                @component('components.alert', ['title'=>'Erro fatal', 'type'=>'warning'])
                    <p><strong>Erro inesperado</strong></p>
                    <p>Ocorreu um erro tal...</p>
                @endcomponent
                @break
            @case(2)
                @alert(['title'=>'Erro fatal', 'type'=>'info'])
                    <p><strong>Erro inesperado</strong></p>
                    <p>Ocorreu um erro tal...</p>
                @endalert
                @break
            @case(3)
                @component('components.alert', ['title'=>'Erro fatal', 'type'=>'success'])
                    <p><strong>Erro inesperado</strong></p>
                    <p>Ocorreu um erro tal...</p>
                @endcomponent
                @break
            @case(4)
                @component('components.alert', ['title'=>'Erro fatal', 'type'=>'error'])
                    <p><strong>Erro inesperado</strong></p>
                    <p>Ocorreu um erro tal...</p>
                @endcomponent
                @break
        @endswitch
    @endif

@endsection