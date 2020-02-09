<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Создание животного</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <form method="post" action={{url('add_animal')}}>
        {{ csrf_field() }}
        <label for="name">Кличка</label>
        <span>
            <input type="text" name="name" id="name">
        </span>
        <br>

        <label for="type">Тип</label>
        <span>
            <select name="type" id="type">
                <option value="wild">Хищное</option>
                <option value="home">Домашнее</option>
            </select>
        </span>
        <br>

        <label for="legs">Количество лап</label>
        <span>
            <input type="number" name="legs" id="legs" min="0" max="100" placeholder="4">
        </span>
        <br>
        <input type="submit" value="Сохранить">
    </form>
</body>