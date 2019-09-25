<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li>
                        <a
                            class="{{ request()->routeIs('clients.*') ? 'active' : '' }}"
                            href="{{ route('clients.index') }}">
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a
                            class="{{ request()->routeIs('products') ? 'active' : '' }}"
                            href="{{ route('products') }}">
                            Produtos
                        </a>
                    </li>
                    <li>
                        <a 
                            class="{{ request()->routeIs('departaments') ? 'active' : '' }}"
                            href="{{ route('departaments') }}">
                            Departamentos
                        </a>
                    </li>
                    <li>
                            <a 
                                class="{{ request()->routeIs('options') ? 'active' : '' }}"
                                href="{{ route('options') }}">
                                Opções
                            </a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="col2">
            @yield('content')
        </div>
    </div>
</body>
</html>