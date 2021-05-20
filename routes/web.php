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

Route::get('/', function () {
    return view('welcome');
});

// ***CONTROLLERS***

// MovieController
Route::get('/movies/{page?}', 'MovieController@index');

// set path's name
Route::get('/details/{y?}', array(
    'middleware' => 'testyear',
    'uses' => 'MovieController@details',
    'as'   => 'details.movie'
));

Route::get('/redirection', 'MovieController@redirection');
Route::get('/form', 'MovieController@form');
Route::post('/receive', 'MovieController@receive');

// resource controller example
Route::resource('user', 'UserController');

// Fruit Routes, grouping with prefix ex: fruits/index
Route::group(['prefix' => 'fruits'], function(){
    Route::get('index', 'FruitController@index');
    Route::get('detail/{id}', 'FruitController@detail');
    Route::get('create', 'FruitController@create');
    Route::post('save', 'FruitController@save');
    Route::get('delete/{id}', 'FruitController@delete');
    Route::get('update/{id}', 'FruitController@update');
    Route::post('doUpdate', 'FruitController@doUpdate');
});

// ***SAMPLES***

Route::get('/mostrar-fecha', function(){
    $titulo = 'Uso de vista .blade llamada desde route con parametros';
    $date_params = 'Y-m-d h:i:sa';
    return view('mostrar-fecha', array(
        'title'    => $titulo,
        'd_params' => $date_params
    ));
});

// Ruta con condicional where con expresiones regulares
Route::get('/pelicula/{t}/{y}', function($titulo, $year){
    return view('pelicula', array(
        'title' => $titulo,
        'anio'  => $year
    ));
})->where(array(    
    't' => '[a-zA-Z0-9\s@ñáéíóú€\.\,\+\$]+',
    'y' => '[0-9\-]+'
));
// 't' => '^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$'

// Ruta con parametro opcional
Route::get('/pelicula-opcional/{t?}', function($titulo = 'no movie :('){ // ERROR: Too few arguments to function
    return view('pelicula', array(
        'title' => $titulo
    ));
});

Route::get('/movies-list', function(){
    $title = 'list of movies';
    $list = array('lord of rings', 'dumb and dumber', 'home alone');

    return view('movies.list')
        ->with('title', $title)
        ->with('list', $list);
});

Route::get('/generic-page', function(){
    return view('page');
});