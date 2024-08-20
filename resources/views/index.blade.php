@extends('layouts.layout')

@section('title', 'Главная страница')

@section('content')
    <h1>Добро пожаловать на главную страницу!</h1>
    <a href="{{ route('tasks.create') }}">Создать новую запись</a>
    <br>
    <h2>Список записей</h2>
    @foreach($tasks as $task)
        <a href="{{ route('tasks.show', $task->id) }}"><h3>{{ $task->title }}</h3></a>
    @endforeach
@endsection
