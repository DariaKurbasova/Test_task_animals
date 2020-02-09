<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Редактирование животного</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body>
<form method="post" action={{url('update_animal')}}>
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$animal->id}}">

    <label for="name">Кличка</label>
    <span>
        <input type="text" name="name" id="name" value="{{$animal->name}}">
    </span>
    <br>

    <label for="type">Тип</label>
    <span>
        <select name="type" id="type">
            <option value="wild" @if($animal->type === 'wild') selected @endif>Хищное</option>
            <option value="home" @if($animal->type === 'home') selected @endif>Домашнее</option>
        </select>
    </span>
    <br>

    <label for="legs">Количество лап</label>
    <span>
        <input type="number" name="legs" id="legs" min="0" max="100" placeholder="4" value="{{$animal->legs}}">
    </span>
    <br>
    <input type="submit" value="Сохранить">
</form>
</body>