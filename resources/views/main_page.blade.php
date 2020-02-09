<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная страница</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <table id="animalsList">
        <thead>
            <th>Кличка</th>
            <th>Тип</th>
            <th>Количество лап</th>
            @if (!empty($animals))
                <th></th>
            @endif
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr @if ($animal->name === 'Крот') style="background-color: rgba(255,0,0,0.65);" @endif>
                    <td>{{ $animal->name }}</td>
                    <td>@if ($animal->type === 'wild')
                            Хищное
                        @else
                            Домашнее
                        @endif
                    </td>
                    <td>{{ $animal->legs }}</td>
                    <td>
                        <a href="edit/{{$animal->id}}" class="editAnimal">Редактировать</a>
                        @if ($animal->name !== 'Крот') | <a href="delete/{{$animal->id}}" class="deleteAnimal">Удалить</a> @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="create" id="addAnimal">Добавить животное</a>
</body>
</html>