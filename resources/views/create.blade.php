@extends('layouts.layout')

@section('title', 'Создание')

@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        @method('POST')

        <div>
            <p>Введите название</p>
            <input type="text" name="title" required>
        </div>
        <br>
        <div>
            <p>Введите текст</p>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <button>Создать</button>
        </div>
    </form>
@endsection
