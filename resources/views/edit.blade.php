@extends('layouts.layout')

@section('title', 'Редактирование поста')

@section('content')
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <p>Введите новое название</p>
            <input type="text" name="title" value="{{ old('title', $task->title) }}" required>
        </div>
        <br>
        <div>
            <p>Введите новый текст</p>
            <textarea name="description" required>{{ old('description', $task->title) }}</textarea>
        </div>
        <div>
            <button>Редактировать</button>
        </div>
    </form>
@endsection
