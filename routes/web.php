<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('bienvenido/{id}', function ($id) {
    return $id;
});

Route::get('bienvenido', function () {
    $noticias=[
        ['id'=> '1',
        'titulo'=>'Visita Pastoral',
        'descripcion'=>'Pastor distrital llegará de visita'],
        ['id'=> '2',
        'titulo'=>'Visita Pastor Stanley',
        'descripcion'=>'Pastor visita la U']
    ];
    return view('noticia',['noticias'=>$noticias]);
});

Route::get('tarea', function () {
    $personas=[
        [
        'name'=>'Cristian',
        'edad'=>20],
        [
        'name'=>'Manuel',
        'edad'=>16]
    ];
    return view('persona',['personas'=>$personas]);
});
