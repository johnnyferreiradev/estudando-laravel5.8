<?php

Route::get('/', function () {
    return view('home.index')
        ->with(['titulo' => 'Página inicial', 'usuario' => 'Johnny Ferreira', 'n' => 10]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
