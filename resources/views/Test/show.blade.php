<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
первый элемент массива: {{ $arr[0] }}<br>
второй элемент массива: {{ $arr[1] }}<br>
Город: {{ $city ?? 'Default' }}<br>
Выводим жирным: {!! $str !!}<br>
передаем дату:
@if ($date == 'Saturday' || $date == 'Sunday')
    Сегодня выходной
@else
    Сегодня будний день: {{ $date }}
@endif
<ul>
    @foreach ($numbers as $value)
        <li>
            {{ $value * $value }}
        </li>
    @endforeach
</ul>
<table>
    @foreach ($users as $value)
        <tr>
        @foreach($value as $v)
                <td>{{ $v }}</td>
        @endforeach
        </tr>
    @endforeach
</table>

@foreach ($employees as $value)
<ul>
    @foreach ($value as $v)
    <li>
        {{ $v }}
    </li>
    @endforeach
</ul>
@endforeach

@foreach($employees as $value)
    <ul>
        @foreach($value as $v)
            @if($loop->first)
                <li>это первая итерация: {{ $loop->iteration }} - {{ $v }}</li>
            @else
                <li>{{ $loop->iteration }} - {{ $v }}</li>

            @endif

            @if($loop->last)
                <li>это последняя итерация: {{ $loop->iteration }} - {{ $v }}</li>
            @endif
        @endforeach
    </ul>
@endforeach

@foreach($users as $value)
    @foreach ($value as $user)
        @if ($loop->parent->remaining !== 0)
                <b>{{ $user }}</b>
        @elseif ($loop->remaining < 3)
            <i>{{ $user }}</i>
        @else
            <b>{{ $user }}</b>
        @endif
    @endforeach
@endforeach
</body>
</html>
