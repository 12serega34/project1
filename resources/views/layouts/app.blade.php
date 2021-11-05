<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
@section('sidebar')
    Боковое меню
@show

<content>
    @yield('content')
</content>
</body>
</html>
