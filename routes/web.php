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
// (12) :
//route sans paramètre (simple) :
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*
//route avec un paramètre :
Route::get('welcome/{name}', function($name) {
    return "welcome " . $name;
});
//route avec ou sans paramètre :
Route::get('hi/{name?}', function($name) {
    return "HI " . $name;
});
//route avec son nom : 
Route::get('hello/{id}', function($id) {
    return "Hello " . $id;
})->name('a'); //si on souhaite utiliser cette route a travers un lien on écrit tous simplement ça : <a href="{{ route('a',55) }}">documents</a> 
//Route Structure & Route Service Provider (13) :
//---Naming Routing and Namespaces - ??? routes (14) :
Route::namespace('front')->group(function(){  //seulement les controlleurs qui se trouve dans le dossier(Controllers.Front) qui marche 
    Route::get('show', 'FirstController@show');
});
//laravel Route Group , prefix and middleware - routes ??? (15) :
Route::prefix('web')->group(function(){
    Route::get('affiche', function(){
        return "affiche";
    });
});
Route::group(['prefix' => 'web'], function(){
    Route::get('bem', function(){
        return "bem";
    });
});
Route::get('ford', function(){
    return "ford";
})->middleware('auth');
//laravel controller and route resource part 1 (19) et part 2 (20) :
Route::resource('new', 'NewController');
//laravel passing data to views from controller - ??? ???????? (22) :
Route::get('info', function(){
    //$data = [];
    //$data['name'] = 'badro';
    //$data['age'] = 33;
    //return view('vue1', $data);
    return view('vue1')->with(['name' => 'pedro' ,'age' => 35]);
});
Route::get('infos', 'Front\FirstController@viewAffiche');
Route::get('infoss', 'Front\FirstController@getIndex');
*/
//Auth Login and Register with laravel part1 ???? ??????? ?????? ?????? ??????? (27) : 
//Auth Login and Register with Laravel 6 laravel 7 part2 - ????? ?????? ??????? (28) :  ???
//Login Via Mobile Number with Laravel 6 & laravel 7 ????? ?????? ???? ??????? (30) :
//create githube remote repository and upload source code project (video 33) :















