<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $nome = "Wesley";
    $idade = 19;
    $arr = [10, 20, 30, 40, 50];
    $nomes = ["Wesley", "Lukas", "João", "Ana"];

    return view('welcome',
    ['nome' => $nome,
    'idade' => $idade,
    'profissao' => "Programador",
    'arr' => $arr,
    'nomes' => $nomes]);
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/products', function () {
    return view('products');
});