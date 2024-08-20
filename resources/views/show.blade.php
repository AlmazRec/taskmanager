@extends('layouts.layout')

@section('title', 'Пост')

@section('content')
    <div>
        <h3>Запись номер {{ $task->id }}</h3>
        <span>
    Статус:
    @if ($task->is_completed == 1)
                Выполнено
            @else
                Не выполнено
            @endif
</span>
    </div>
    <br>
    <p>{{ $task->description }}</p>
    <button><a href="{{ route('tasks.index') }}" style="text-decoration: none">Вернуться назад</a> </button>
    <button><a href="{{ route('tasks.edit', $task->id) }}" style="text-decoration: none">Редактировать</a> </button>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить этот пост?');">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить</button>
    </form>
@endsection
