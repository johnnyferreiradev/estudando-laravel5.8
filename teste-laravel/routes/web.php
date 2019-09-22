<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'MyController@products');
Route::get('/name', 'MyController@getName');
Route::get('/age', 'MyController@getAge');
Route::get('/multi/{n1}/{n2}', 'MyController@multi');

Route::resource('clients', 'ClienteController');

# Estudando rotas

// Route::get('/ola', function () {
//     return "Olá!";
// });

// // Passagem de parametros nas rotas
// Route::get('/hello/{name}/{lastname}', function ($name, $lastname) {
//     return "Olá! Seja bem vindo, $name $lastname!";
// });

// // Parâmetro opcional
// Route::get('/yourname/{name?}', function ($name = 'usuário') {
//     return "Olá! Seja bem vindo, $name!";
// });

// // Rotas com regras
// Route::get('/routeswithrules/{name}/{n}', function ($name, $n) {
//     for ($i=0; $i < $n; $i++) { 
//         echo $name."\n";
//     }
// })->where('name', '[A-Za-z]+')->where('n', '[0-9]+');

// // Agrupamento de rotas e nomeando
// Route::prefix('/app')->group(function () {
//     Route::get('/', function () {
//         return view('app');
//     })->name('app');

//     Route::get('/user', function () {
//         return view('user');
//     })->name('app.user');

//     Route::get('/profile', function () {
//         return view('profile');
//     })->name('app.profile');
// });

// Route::get('/products', function () {
//     echo "<h1>Produtos</h1>";
//     echo "<ol>";
//     echo "<li>Notebook</li>";
//     echo "<li>Impressora</li>";
//     echo "<li>Mouse</li>";
//     echo "</ol>";
// })->name('myproducts');

// // Redirecionamento de rotas

// // Utilizando o Route
// Route::redirect('allproducts1', 'products', 301);

// // Utilizando o metodo route do retorno da função redirect (forma mais utilizada)
// Route::get('allproducts2', function () {
//     return redirect()->route('myproducts');
// });

// // Metodos HTTP
// Route::post('/requests', function (Request $request) {
//     return 'Hello POST';
// });

// Route::delete('/requests', function (Request $request) {
//     return 'Hello DELETE';
// });

// Route::put('/requests', function (Request $request) {
//     return 'Hello PUT';
// });

// Route::patch('/requests', function (Request $request) {
//     return 'Hello PATCH';
// });

// Route::options('/requests', function (Request $request) {
//     return 'Hello OPTIONS';
// });