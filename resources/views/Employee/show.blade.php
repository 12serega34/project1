<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
Имя: {{ $name }}<br>
Фамилия: {{ $surname }}<br>
Зарплата: {{ $salary}}<br>
The current UNIX timestamp is {{ time() }}<br>
Текущая дата: {{date('d.m.y')}}<br>
</body>
</html>
