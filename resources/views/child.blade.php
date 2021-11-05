@extends('layouts.app')
@section('title', 'Заголовок страницы')

@section('sidebar')
    @parent

    <div>
        Содержание бокового меню раздела
    </div>
@show

@section('content')
    <div>
        Содержание страницы
    </div>
@show
