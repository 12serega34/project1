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

Route::get('/', function () {    return view('welcome');    });
Route::get('/test', 'App\Http\Controllers\TestController@show');
Route::get('/user/{id?}', function (int $id = 0) { return $id; })->where('id', '[0-9]+');
Route::get('/user/{name}', function (string $name) { return "имя юзера: $name"; })->where('name', '[a-zA-Z]+');
Route::get('/user/show-{names}', function(string $names){return $names;});
Route::get('sum/{num1}/{num2}', function($num1, $num2){ return $num1 + $num2; });
Route::get('user/show-{id}', function($id){ return $id; });
Route::get('user/{id}/{name}', function(int $id, string $name){ return "$id $name"; }) -> where (['id' => '[0-9]+', 'name' => '[a-z]{3,}' ]);
Route::get('articles/{date}', function ($date){return $date;}) -> where('date', '[0-9]{4}[+=-_><*][0-9]{2}[+=-_><*][0-9]{2}');
Route::get('users/{order}', function ($order){return $order;})->where('order', 'name|surname|age');
Route::get('{year}/{month}/{day}', function(int $year, int $month, int $day){
    if($month < 13 and $day < 32){
        $date = "$year-$month-$day";
        echo "$year - $month - $day";
        echo '<br>' . strftime("%A" , strtotime($date));
    }}) -> where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}', 'day' => '[0-9]{2}']);
Route::get('/show', 'App\Http\Controllers\TestController@show');
Route::get('/pages/show/{arg}', 'App\Http\Controllers\Page@showOne') -> where('arg', '[0-9]+');
Route::get('/pages/all', 'App\Http\Controllers\Page@showAll');
Route::get('test/sum/{param1}/{param2}', 'App\Http\Controllers\TestController@sum')-> where([ 'param1' => '[0-9]+', 'param2' => '[0-9]+']);
Route::get('/employee/{num}', 'App\Http\Controllers\Employee@showOne') -> where('num', '[0-9]+');
Route::get('/employee/{num}/{param}', 'App\Http\Controllers\Employee@showField') -> where(['num' => '[0-9]+', 'param' => 'name|surname|salary']);
Route::get('/empshow', 'App\Http\Controllers\Employee@show');

