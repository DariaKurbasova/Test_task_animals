<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная страница</title>
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
                <tr>
                    <td>{{ $animal->name }}</td>
                    <td>@if ($animal->type === 'wild')
                            Хищное
                        @else
                            Домашнее
                        @endif
                    </td>
                    <td>{{ $animal->legs }}</td>
                    <td>
                        <a href="edit/{{$animal->id}}" class="editAnimal">Редактировать</a> |
                        <a href="delete/{{$animal->id}}" class="deleteAnimal">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="create" id="addAnimal">Добавить животное</a>
</body>
</html>