<?php

Route::get('/', function () {
    return view('home.index')
        ->with(['titulo' => 'Página inicial', 'usuario' => 'Johnny Ferreira', 'n' => 10]);
});
